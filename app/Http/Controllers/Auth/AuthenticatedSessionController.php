<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $validated = $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);
        // Kunci pembatas berdasarkan Username & IP Address
        $throttleKey = Str::lower($validated['email']) . '|' . $request->ip();

        // Cek apakah user terlalu banyak mencoba login (Maksimal 5x dalam 60 detik)
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'email' => "Terlalu banyak percobaan login. Silakan coba lagi dalam {$seconds} detik.",
            ]);
        }

       // Cek kredensial
        if (Auth::attempt($validated, $request->boolean('remember'))) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();

            // Catat log login (jika kolom tersedia di database)
            if (Schema::hasColumn('users', 'last_login_at')) {
                $request->user()->update([
                    'last_login_at' => now(),
                    'last_login_ip' => $request->ip(),
                ]);
            }

            return redirect()->intended(route('dashboard'));
        }

        // Tambahkan hitungan gagal jika password salah
        RateLimiter::hit($throttleKey);

        throw ValidationException::withMessages([
            'username' => __('auth.failed'),
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}