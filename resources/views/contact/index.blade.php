<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->company_name ?? 'Company Profile' }}</title>
    
    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }

        /* Smooth Gradient Background Hero */
        .hero-gradient {
            background: linear-gradient(115deg, #2563eb 0%, #3b82f6 35%, #4f46e5 70%, #6366f1 100%);
        }

        /* Glassmorphism Badge */
        .glass-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Glassmorphism Button */
        .btn-glass {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.28);
        }

        /* Floating Badge Design */
        .floating-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased" x-data="{ mobileMenuOpen: false }">

    <!-- 1. NAVBAR -->
    <header class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto py-4 px-6 md:px-12 flex justify-between items-center">
            
            <!-- Logo -->
            <a href="#home" class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-extrabold text-sm flex items-center justify-center shadow-md shadow-blue-500/20">
                    CP
                </div>
                <span class="text-xl font-extrabold tracking-tight text-blue-600">CompanyProfile</span>
            </a>
            
            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-10 text-sm font-medium text-slate-600">
                <a href="#home" class="hover:text-blue-600 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600 transition">Tentang Kami</a>
                <a href="#services" class="hover:text-blue-600 transition">Layanan & Portofolio</a>
                <a href="#contact" class="hover:text-blue-600 transition">Kontak</a>
            </div>

            <!-- Login Admin -->
            <div class="hidden md:block">
                <a href="{{ route('login') }}" class="text-xs font-bold text-blue-600 bg-blue-50/80 hover:bg-blue-100 border border-blue-100 px-5 py-2.5 rounded-full transition">
                    Login Admin
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg text-slate-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>

        <!-- Menu Mobile -->
        <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false" class="md:hidden bg-white border-b border-slate-200 px-6 py-4 space-y-3">
            <a href="#home" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Home</a>
            <a href="#about" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Tentang Kami</a>
            <a href="#services" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Layanan & Portofolio</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Kontak</a>
            <div class="pt-2 border-t border-slate-100">
                <a href="{{ route('login') }}" class="block text-center text-xs font-bold text-blue-600 bg-blue-50 py-2.5 rounded-full border border-blue-100">
                    Login Admin
                </a>
            </div>
        </div>
    </header>
    
    <!-- 5. SECTION KONTAK -->
    <section id="contact" class="w-full py-20 px-6 md:px-12 bg-white border-t border-slate-100">
        <div class="max-w-3xl mx-auto space-y-8">
            <div class="text-center space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 px-3.5 py-1.5 rounded-full">Hubungi Kami</span>
                <h2 class="text-3xl font-extrabold text-slate-900">Mari Berdiskusi Dengan Kami</h2>
                <p class="text-slate-600 text-sm">Punya pertanyaan atau berminat menjalin kerja sama? Kirimkan pesan Anda melalui form berikut.</p>
            </div>

            <!-- Alert Pesan Sukses -->
            @if(session('success'))
                <div class="p-4 text-sm text-emerald-800 bg-emerald-100 rounded-xl border border-emerald-200 flex items-center gap-2">
                    <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- Form Kontak -->
            <form action="{{ route('contact.send') }}" method="POST" class="bg-slate-50 p-8 rounded-3xl border border-slate-200/80 space-y-5">
                @csrf

                <!-- Input Nama -->
                <div>
                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Nama Lengkap</label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required 
                           placeholder="Masukkan nama Anda" 
                           class="w-full px-4 py-3 rounded-xl border @error('name') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-slate-800 text-sm transition">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Email -->
                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Alamat Email</label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           placeholder="nama@email.com" 
                           class="w-full px-4 py-3 rounded-xl border @error('email') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-slate-800 text-sm transition">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Pesan -->
                <div>
                    <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Pesan Anda</label>
                    <textarea id="message" 
                              name="message" 
                              rows="7" 
                              required 
                              placeholder="Tuliskan pesan Anda di sini..." 
                              class="w-full px-4 py-3 rounded-xl border @error('message') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-slate-800 text-sm transition">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-6 rounded-xl transition duration-200 shadow-md hover:shadow-lg text-sm">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-full bg-slate-900 text-slate-400 py-6 text-center text-xs">
        <p>&copy; {{ date('Y') }} {{ $setting->company_name ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>

</body>
</html>
