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

<body class="bg-slate-50 h-screen">
    <div class="bg-white rounded-md relative overflow-hidden w-3xl max-w-full min-h-[480px] shadow-[0_14px_28px_rgba(0,0,0,0.25),0_10px_10px_rgba(0,0,0,0.22)]" id="container">
        <div class="absolute top-0 h-full transition-all duration-600 ease-in-out left-0 w-full z-20">
            <form method="POST" action="{{ route('login') }}" class="bg-white flex align-middle justify-center px-0 py-50 h-full text-center">
                @csrf
                <h1>Login</h1>
                </br>
                <span>Masukan akun anda</span>
                <input type="email" name="email" id="login-email" placeholder="Email" />
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="password" name="password" id="login-password" placeholder="Password" />
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <a href="{{ route('password.request') }}" class="btn_sosial">Forgot your password?</a>
                <button type="submit">Log In</button>
            </form>
        </div>
        <!-- <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Change your password at any time</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div> -->
    </div>
</body>
<script src="{{ asset('js/script_login.js') }}"></script>