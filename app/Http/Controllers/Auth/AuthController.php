<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Schema;

class AuthController extends Controller
{
    /**
     * Tampilkan halaman login admin
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Tampilkan halaman register
     */
    public function showRegister()
    {
        return view('auth.login');
    }

    /**
     * Proses registrasi akun baru
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Buat username unik otomatis dari nama (ditambah suffix jika duplikat)
        $baseUsername = Str::slug($data['name'], '') !== '' ? Str::slug($data['name'], '') : Str::before($data['email'], '@');
        $username = $baseUsername;
        $counter = 1;
        while (User::where('username', $username)->exists()) {
            $username = $baseUsername . $counter;
            $counter++;
        }

        $user = User::create([
            'username' => $username,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'], // Hashed otomatis oleh casts model
        ]);

        Auth::login($user);

return redirect()->route('dashboard');
    }

    /**
     * Proses login dengan proteksi Rate Limiting & Audit Log
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => ['required_without:email', 'string'], // Email atau Username
            'email' => ['required_without:login', 'string'], // Email
            'password' => ['required', 'string'],
        ]);

        // Nilai login (mendukung field 'login' lama dan field 'email' baru)
        $loginInput = $request->input('login') ?? $request->input('email');

        // Kunci pembatas berdasarkan Login & IP Address
        $throttleKey = Str::lower($loginInput) . '|' . $request->ip();

        // Cek apakah user terlalu banyak mencoba login (Maksimal 5x dalam 60 detik)
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'login' => "Terlalu banyak percobaan login. Silakan coba lagi dalam {$seconds} detik.",
            ]);
        }

        // Deteksi apakah input berupa email atau username biasa
        $fieldType = filter_var($loginInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $fieldType => $loginInput,
            'password' => $request->input('password'),
        ];

        // Cek kredensial
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();

            // Catat log login (jika kolom tersedia di database)
            if (Schema::hasColumn('users', 'last_login_at')) {
                $request->user()->update([
                    'last_login_at' => now(),
                    'last_login_ip' => $request->ip(),
                ]);
            }

            return redirect()->intended(route('admin.homepage.edit'));
        }

        // Tambahkan hitungan gagal jika password salah
        RateLimiter::hit($throttleKey);

        throw ValidationException::withMessages([
            'login' => __('auth.failed'),
        ]);
    }

    /**
     * Proses logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
