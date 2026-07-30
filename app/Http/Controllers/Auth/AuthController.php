<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
     * Proses login dengan proteksi Rate Limiting & Audit Log
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Kunci pembatas berdasarkan Username & IP Address
        $throttleKey = Str::lower($request->input('username')) . '|' . $request->ip();

        // Cek apakah user terlalu banyak mencoba login (Maksimal 5x dalam 60 detik)
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'username' => "Terlalu banyak percobaan login. Silakan coba lagi dalam {$seconds} detik.",
            ]);
        }

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
            'username' => __('auth.failed'),
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

        return redirect()->route('login');
    }
}

