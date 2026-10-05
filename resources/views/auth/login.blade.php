<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">

    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-heading {
            font-family: 'Montserrat', sans-serif;
        }
    </style>

</head>

<body class="bg-slate-50 min-h-screen flex flex-row items-center justify-center p-4">
    <div class="hidden md:flex bg-white rounded-md relative overflow-hidden w-full max-w-3xl min-h-[480px] shadow-[0_14px_28px_rgba(0,0,0,0.25),0_10px_10px_rgba(0,0,0,0.22)]"
         id="container">

        <div class="absolute top-0 left-0 w-1/2 h-full transition-all duration-600 ease-in-out z-20">
            <form method="POST" action="{{ route('login') }}"
                  class="bg-white flex flex-col items-center justify-center px-8 py-12 h-full text-center">
                @csrf
                <h1 class="text-2xl font-bold mb-4">Login</h1>
                <span class="text-sm text-slate-500 mb-4">Masukan akun anda</span>

                <p class="text-left w-full max-w-xs mb-2 text-slate-500">Email</p>
                <input type="email" name="email" id="login-email" placeholder="Email"
                       class="w-full max-w-xs border rounded px-3 py-2 mb-2" />
                @error('email')
                    <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
                @enderror

                <p class="text-left w-full max-w-xs mb-2 text-slate-500">Password</p>
                <input type="password" name="password" id="login-password" placeholder="Password"
                       class="w-full max-w-xs border rounded px-3 py-2 mb-2" />
                @error('password')
                    <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
                @enderror

                {{-- <a href="{{ route('password.request') }}" class="text-sm text-blue-600 mb-4">
                    Forgot your password?
                </a> --}}

                <button type="submit"
                        class="bg-gradient-to-tr from-blue-600 to-indigo-600 text-white px-8 py-2 mt-6 rounded font-semibold hover:from-blue-800 hover:to-indigo-800 transition-colors">
                    Log In
                </button>
            </form>
        </div>

        <div class="absolute top-0 right-0 w-1/2 h-full transition-all duration-600 ease-in-out z-20">
            <div class="bg-gradient-to-tr from-blue-600 to-indigo-600 h-full flex flex-col justify-center items-center text-center text-white px-8 py-12">
                <h1 class="text-2xl font-bold mb-2">Hello, Friend!</h1>
                <p class="mb-6">Enter your personal details and start journey with us</p>
            </div>
        </div>

    </div>

    <!-- Mobile view -->
    <div class="md:hidden bg-white items-center rounded-md relative overflow-hidden w-full max-w-md min-h-[480px] shadow-[0_14px_28px_rgba(0,0,0,0.25),0_10px_10px_rgba(0,0,0,0.22)]">
        <form method="POST" action="{{ route('login') }}"
              class="bg-white flex flex-col items-center justify-center px-8 py-24 h-full text-center">
            @csrf
            <h1 class="text-2xl font-bold mb-4">Login</h1>
            <span class="text-sm text-slate-500 mb-4">Masukan akun anda</span>
            
            <p class="text-left w-full max-w-xs mb-2 text-slate-500">Email</p>
            <input type="email" name="email" id="login-email" placeholder="Email"
                   class="w-full max-w-xs border rounded px-3 py-2 mb-2" />
            @error('email')
                <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
            @enderror

            <p class="text-left w-full max-w-xs mb-2 text-slate-500">Password</p>
            <input type="password" name="password" id="login-password" placeholder="Password"
                   class="w-full max-w-xs border rounded px-3 py-2 mb-2" />
            @error('password')
                <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
            @enderror

            {{-- <a href="{{ route('password.request') }}" class="text-sm text-blue-600 mb-4">
                Forgot your password?
            </a> --}}

            <button type="submit"
                    class="bg-gradient-to-tr from-blue-600 to-indigo-600 text-white px-8 py-2 mt-6 rounded font-semibold hover:from-blue-800 hover:to-indigo-800 transition-colors">
                Log In
            </button>
        </form>
    </div>
</body>
{{-- <script src="{{ asset('js/script_login.js') }}"></script> --}}