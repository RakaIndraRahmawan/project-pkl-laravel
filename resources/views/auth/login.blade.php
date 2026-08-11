<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth - {{ $setting->company_name ?? 'Company Profile' }}</title>
    
    <!-- Google Font: Montserrat & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }

        /* Latar Belakang Utama */
        .page-bg {
            background-color: #eef2f7;
        }

        /* Gradasi Panel Overlay */
        .overlay-bg {
            background: linear-gradient(135deg, #2a4494 0%, #3b52c5 50%, #5833c0 100%);
        }

        /* Warna Tombol Utama */
        .btn-primary {
            background-color: #2a4494;
        }
        .btn-primary:hover {
            background-color: #1e3373;
        }

        /* Warna Teks Link */
        .text-custom-blue {
            color: #2a4494;
        }

        /* Warna Field Input */
        .input-bg {
            background-color: #eef2f7;
        }
    </style>
</head>
<body class="page-bg min-h-screen flex flex-col items-center justify-center p-4 antialiased">

    <!-- Tombol Kembali ke Beranda -->
    <a href="{{ url('/') }}" class="mb-6 inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-slate-900 bg-white border border-slate-200 px-4 py-2 rounded-full shadow-sm transition">
        ← Kembali ke Halaman Utama
    </a>

    <!-- Container Utama Card Auth -->
    <div 
        x-data="{ isRegister: false }" 
        class="relative w-full max-w-4xl min-h-[500px] bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100"
    >
        
        <!-- 1. FORM LOGIN (Sisi Kiri) -->
        <div 
            class="absolute top-0 left-0 h-full w-full sm:w-1/2 p-8 md:p-12 flex flex-col justify-center transition-all duration-700 ease-in-out z-10"
            :class="isRegister ? 'opacity-0 z-0 pointer-events-none' : 'opacity-100 z-10'"
        >
            <form method="POST" action="{{ route('login') }}" class="space-y-5 text-center">
                @csrf
                <div class="space-y-1">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Login</h2>
                    <p class="text-xs text-slate-500 font-medium">Masukan akun anda</p>
                </div>

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-600 px-3 py-2 rounded-xl text-xs text-left">
                        @foreach ($errors->all() as $error)
                            <p>• {{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <div class="space-y-3">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email" 
                        value="{{ old('email') }}" 
                        required 
                        class="w-full px-4 py-3 rounded-xl input-bg border border-slate-200 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2a4494]/40 focus:bg-white transition"
                    >
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        required 
                        class="w-full px-4 py-3 rounded-xl input-bg border border-slate-200 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2a4494]/40 focus:bg-white transition"
                    >
                </div>

                <div class="text-center pt-1">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs font-semibold text-custom-blue hover:underline">Forgot your password?</a>
                    @endif
                </div>

                <button 
                    type="submit" 
                    class="px-10 py-3 btn-primary text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition transform active:scale-95"
                >
                    LOG IN
                </button>
            </form>
        </div>

        <!-- 2. FORM REGISTER / BUAT AKUN (Sisi Kanan) -->
        <div 
            class="absolute top-0 right-0 h-full w-full sm:w-1/2 p-8 md:p-12 flex flex-col justify-center transition-all duration-700 ease-in-out z-10"
            :class="isRegister ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'"
        >
            <form method="POST" action="{{ route('register') }}" class="space-y-4 text-center">
                @csrf
                <div class="space-y-1">
                    <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Buat Akun</h2>
                    <p class="text-xs text-slate-500 font-medium">Gunakan email anda untuk register</p>
                </div>

                <div class="space-y-3">
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Name" 
                        required 
                        class="w-full px-4 py-3 rounded-xl input-bg border border-slate-200 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2a4494]/40 focus:bg-white transition"
                    >
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email" 
                        required 
                        class="w-full px-4 py-3 rounded-xl input-bg border border-slate-200 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2a4494]/40 focus:bg-white transition"
                    >
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        required 
                        class="w-full px-4 py-3 rounded-xl input-bg border border-slate-200 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2a4494]/40 focus:bg-white transition"
                    >
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="Confirm Password" 
                        required 
                        class="w-full px-4 py-3 rounded-xl input-bg border border-slate-200 text-slate-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2a4494]/40 focus:bg-white transition"
                    >
                </div>

                <button 
                    type="submit" 
                    class="px-10 py-3 btn-primary text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-md transition transform active:scale-95"
                >
                    REGISTER
                </button>
            </form>
        </div>

        <!-- 3. SLIDING OVERLAY PANEL -->
        <div 
            class="hidden sm:block absolute top-0 left-0 w-1/2 h-full overflow-hidden transition-transform duration-700 ease-in-out z-20"
            :class="isRegister ? 'translate-x-0' : 'translate-x-full'"
        >
            <div 
                class="overlay-bg text-white h-full w-[200%] relative -left-full flex items-center transition-transform duration-700 ease-in-out"
                :class="isRegister ? 'translate-x-1/2' : 'translate-x-0'"
            >
                
                <!-- Overlay Kiri (Muncul saat form Register aktif) -->
                <div class="w-1/2 px-10 text-center space-y-6">
                    <h2 class="text-3xl font-extrabold tracking-tight">Welcome Back!</h2>
                    <p class="text-xs text-blue-100/90 leading-relaxed max-w-xs mx-auto">
                        To keep connected with us please login with your personal info
                    </p>
                    <button 
                        @click="isRegister = false" 
                        class="px-10 py-2.5 border-2 border-white text-white font-bold text-xs uppercase tracking-wider rounded-full hover:bg-white hover:text-[#2a4494] transition duration-300"
                    >
                        SIGN IN
                    </button>
                </div>

                <!-- Overlay Kanan (Muncul saat form Login aktif) -->
                <div class="w-1/2 px-10 text-center space-y-6">
                    <h2 class="text-3xl font-extrabold tracking-tight">Hello, Friend!</h2>
                    <p class="text-xs text-blue-100/90 leading-relaxed max-w-xs mx-auto">
                        Enter your personal details and start your journey with us.
                    </p>
                    <button 
                        @click="isRegister = true" 
                        class="px-10 py-2.5 border-2 border-white text-white font-bold text-xs uppercase tracking-wider rounded-full hover:bg-white hover:text-[#2a4494] transition duration-300"
                    >
                        SIGN UP
                    </button>
                </div>

            </div>
        </div>

    </div>

</body>
</html>