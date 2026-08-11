<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->company_name ?? 'Company Profile' }}</title>
    
    <!-- Google Font: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- CDN Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }

        /* Sticky Glass Header */
        .site-header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 300ms ease;
        }

        .site-header.header-scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
        }

        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            left: 0; right: 0; bottom: -0.36rem;
            height: 2px; border-radius: 99px;
            transform: scaleX(0); transform-origin: center;
            transition: transform 240ms ease;
            background: linear-gradient(90deg, #2563eb, #6366f1);
        }
        .nav-link:hover::after { transform: scaleX(1); }

        /* Hero Section (Gradient & Glowing Spheres) */
        .hero-section {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 40%, #4f46e5 100%);
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            width: 28rem; height: 28rem;
            top: -5rem; left: -5rem;
            background: rgba(99, 102, 241, 0.35);
            filter: blur(100px);
            border-radius: 9999px;
            pointer-events: none;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            width: 24rem; height: 24rem;
            bottom: -4rem; right: -2rem;
            background: rgba(14, 165, 233, 0.35);
            filter: blur(90px);
            border-radius: 9999px;
            pointer-events: none;
        }

        /* Mockup Frame / Card Accent */
        .hero-image-wrap {
            position: relative;
        }
        .hero-image-wrap::before {
            content: '';
            position: absolute;
            inset: -8px;
            border-radius: 1.75rem;
            background: linear-gradient(135deg, rgba(255,255,255,0.4), rgba(255,255,255,0.05));
            pointer-events: none;
        }

        /* Floating Badges */
        .float-badge {
            position: absolute;
            z-index: 10;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.15);
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }

        /* Card Hover Effects */
        .service-card {
            transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.12);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden" x-data="{ mobileMenuOpen: false }">

    <!-- 1. NAVBAR -->
    <header class="site-header sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto py-4 px-6 md:px-12 flex justify-between items-center">
            <!-- Logo -->
            <a href="#home" class="font-black text-2xl tracking-tight text-blue-600 flex items-center gap-2">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center text-white text-base shadow-lg shadow-blue-500/30">
                    CP
                </div>
                <span class="text-slate-900 font-extrabold">{{ $setting->company_name ?? 'CompanyProfile' }}</span>
            </a>
            
            <!-- Menu Navigasi Desktop -->
            <div class="hidden md:flex items-center space-x-9 text-sm font-semibold text-slate-600">
                <a href="#home" class="nav-link hover:text-blue-600 transition">Home</a>
                <a href="#about" class="nav-link hover:text-blue-600 transition">Tentang Kami</a>
                <a href="#services" class="nav-link hover:text-blue-600 transition">Layanan & Portofolio</a>
                <a href="#contact" class="nav-link hover:text-blue-600 transition">Kontak</a>
            </div>

            <!-- Login Admin -->
            <div class="hidden md:block">
                <a href="{{ route('login') }}" class="text-sm font-bold text-blue-600 bg-blue-50 hover:bg-blue-600 hover:text-white border border-blue-200/80 px-6 py-2.5 rounded-full transition-all duration-300 shadow-sm">
                    Login Admin
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg text-slate-600 hover:text-blue-600 focus:outline-none">
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
                <a href="{{ route('login') }}" class="block text-center text-sm font-bold text-blue-600 bg-blue-50 py-2.5 rounded-xl border border-blue-200">
                    Login Admin
                </a>
            </div>
        </div>
    </header>

    <!-- 2. HERO SECTION -->
    <section id="home" class="hero-section text-white py-24 md:py-32 px-6 md:px-12 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-12 items-center relative z-10">
            
            <!-- Kiri: Headline & CTA -->
            <div class="md:col-span-7 space-y-7 text-left">
                <!-- Tagline Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold text-blue-100 shadow-sm">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
                    </span>
                    Solusi Digital Masa Depan
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-[1.15]">
                    {{ $setting->hero_title ?? 'maghfi' }}
                </h1>
                
                <!-- Subtitle -->
                <p class="text-blue-100/90 text-base md:text-xl font-normal leading-relaxed max-w-xl">
                    {{ $setting->hero_subtitle ?? 'Max Smasta - Kami memberikan solusi teknologi digital terbaik untuk mengakselerasi pertumbuhan bisnis Anda.' }}
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#contact" class="bg-white text-blue-600 hover:bg-blue-50 font-extrabold px-8 py-4 rounded-2xl shadow-xl shadow-blue-900/20 hover:scale-105 active:scale-95 transition-all text-sm">
                        Hubungi Kami
                    </a>
                    <a href="#services" class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/25 text-white font-bold px-8 py-4 rounded-2xl transition-all text-sm">
                        Lihat Layanan
                    </a>
                </div>
            </div>

            <!-- Kanan: Visual Frame / Showcase -->
            <div class="md:col-span-5 relative flex justify-center md:justify-end">
                <div class="hero-image-wrap relative w-full max-w-lg">
                    
                    <!-- Main Frame -->
                    <div class="bg-slate-900 rounded-2xl p-2.5 shadow-2xl border border-white/20 relative z-10">
                        <img 
                            src="{{ isset($setting->hero_image) ? asset('storage/' . $setting->hero_image) : 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80' }}" 
                            alt="Hero Banner" 
                            class="rounded-xl w-full object-cover h-64 sm:h-80 md:h-96"
                        />
                    </div>

                    <!-- Floating Badge 1 (Atas Kiri) -->
                    <div class="float-badge -top-6 -left-6 rounded-2xl p-4 hidden sm:flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center font-extrabold text-lg">⚡</div>
                        <div>
                            <p class="text-[10px] uppercase font-bold tracking-wider text-slate-400">Performa</p>
                            <p class="text-xs font-bold text-slate-800">Sangat Cepat & Aman</p>
                        </div>
                    </div>

                    <!-- Floating Badge 2 (Bawah Kanan) -->
                    <div class="float-badge -bottom-6 -right-6 rounded-2xl p-4 hidden sm:flex items-center gap-3" style="animation-delay: 1s;">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-extrabold text-lg">✨</div>
                        <div>
                            <p class="text-[10px] uppercase font-bold tracking-wider text-slate-400">Kualitas</p>
                            <p class="text-xs font-bold text-slate-800">100% Terpercaya</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- 3. SECTION ABOUT US -->
    <section id="about" class="w-full py-24 px-6 md:px-12 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto space-y-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                
                <!-- Visual Left -->
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-600/10 rounded-3xl transform -rotate-3 scale-95"></div>
                    <img 
                        src="{{ isset($setting->about_image) ? asset('storage/' . $setting->about_image) : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80' }}" 
                        alt="Tentang Kami" 
                        class="relative rounded-3xl shadow-lg w-full object-cover h-80 md:h-[420px] border border-slate-100"
                    />
                </div>

                <!-- Text Right -->
                <div class="space-y-6">
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-4 py-2 rounded-full border border-blue-100">Tentang Perusahaan</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-snug">
                        {{ optional($about)->title ?? $setting->about_title ?? 'Mengenal Lebih Dekat Perusahaan Kami' }}
                    </h2>
                    <div class="text-slate-600 leading-relaxed text-base">
                        {!! optional($about)->content ?? optional($about)->description ?? $setting->about_description ?? 'Kami adalah penyedia layanan solusi digital yang berdedikasi untuk menciptakan produk berkualitas tinggi, aman, dan inovatif demi menunjang kesuksesan operasional bisnis Anda.' !!}
                    </div>

                    <!-- Mini Stat Cards -->
                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                            <p class="text-3xl font-black text-blue-600">50+</p>
                            <p class="text-xs font-semibold text-slate-500 mt-1">Proyek Selesai</p>
                        </div>
                        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                            <p class="text-3xl font-black text-indigo-600">99%</p>
                            <p class="text-xs font-semibold text-slate-500 mt-1">Kepuasan Klien</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. SECTION LAYANAN & PORTOFOLIO -->
    <section id="services" class="w-full py-24 px-6 md:px-12 bg-slate-50/70 border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto space-y-16">
            
            <div class="text-center space-y-3 max-w-2xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 bg-indigo-50 px-4 py-2 rounded-full border border-indigo-100">Layanan & Solusi</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Layanan Unggulan Kami</h2>
                <p class="text-slate-500 text-sm md:text-base">Dirancang khusus untuk memenuhi berbagai kebutuhan digital serta meningkatkan efisiensi bisnis Anda.</p>
            </div>

            <!-- Grid Layanan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($services as $index => $item)
                    <div class="service-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                        <div class="space-y-5">
                            <div class="w-14 h-14 bg-gradient-to-tr from-blue-600 to-indigo-600 text-white rounded-2xl flex items-center justify-center font-black text-lg shadow-lg shadow-blue-500/20">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <h3 class="text-xl font-bold text-slate-900">
                                {{ $item->title ?? $item->nama_layanan }}
                            </h3>

                            <p class="text-slate-600 text-sm leading-relaxed">
                                {{ $item->description ?? $item->deskripsi }}
                            </p>
                        </div>

                        @if(isset($item->image) && $item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Service Image" class="w-full h-44 object-cover rounded-2xl mt-6 border border-slate-100">
                        @endif
                    </div>
                @empty
                    <!-- Default Placeholders -->
                    <div class="service-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200/80 space-y-4">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center font-bold">01</div>
                        <h3 class="text-xl font-bold text-slate-900">Web Development</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Pengembangan situs web modern, responsif, dan performa tinggi sesuai standar industri.</p>
                    </div>
                    <div class="service-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200/80 space-y-4">
                        <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center font-bold">02</div>
                        <h3 class="text-xl font-bold text-slate-900">Mobile Apps</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Aplikasi Android & iOS interaktif yang berorientasi pada pengalaman pengguna terbaik.</p>
                    </div>
                    <div class="service-card bg-white p-8 rounded-3xl shadow-sm border border-slate-200/80 space-y-4">
                        <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center font-bold">03</div>
                        <h3 class="text-xl font-bold text-slate-900">UI/UX Design</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Perancangan visual antarmuka modern yang estetik, intuitif, dan mudah digunakan.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <!-- 5. SECTION KONTAK & FORM -->
    <section id="contact" class="w-full py-24 px-6 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto space-y-12">
            
            <div class="text-center space-y-3 max-w-2xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-widest text-blue-600 bg-blue-50 px-4 py-2 rounded-full border border-blue-100">Hubungi Kami</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Mulai Konsultasi Gratis</h2>
                <p class="text-slate-500 text-sm md:text-base">Ada pertanyaan atau ingin memulai diskusi proyek? Kami siap membantu Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
                
                <!-- Info Kontak Kiri -->
                <div class="md:col-span-5 bg-gradient-to-br from-blue-600 via-indigo-600 to-indigo-800 text-white rounded-3xl p-8 md:p-10 shadow-xl flex flex-col justify-between space-y-8 relative overflow-hidden">
                    <div class="space-y-6 relative z-10">
                        <h3 class="text-2xl font-bold">Mari Terhubung</h3>
                        <p class="text-blue-100 text-sm leading-relaxed">Tim profesional kami selalu siap memberikan solusi teknis terbaik untuk kebutuhan bisnis Anda.</p>

                        <div class="space-y-5 text-sm">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">✉</div>
                                <div>
                                    <p class="text-[11px] text-blue-200 uppercase font-semibold">Email</p>
                                    <p class="font-bold text-white">{{ $setting->contact_email ?? 'info@company.com' }}</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">📍</div>
                                <div>
                                    <p class="text-[11px] text-blue-200 uppercase font-semibold">Alamat</p>
                                    <p class="font-bold text-white">{{ $setting->contact_address ?? 'Jakarta, Indonesia' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($setting->contact_phone))
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->contact_phone) }}" target="_blank" class="w-full inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-white font-extrabold py-4 rounded-2xl transition shadow-lg text-sm relative z-10">
                            WhatsApp: {{ $setting->contact_phone }}
                        </a>
                    @endif
                </div>

                <!-- Form Kontak Kanan -->
                <div class="md:col-span-7 bg-slate-50 p-8 md:p-10 rounded-3xl border border-slate-200/80 flex flex-col justify-center">
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" placeholder="Masukkan nama Anda" class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600/40 text-sm transition" required>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Email</label>
                            <input type="email" name="email" placeholder="email@domain.com" class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600/40 text-sm transition" required>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Pesan</label>
                            <textarea name="message" rows="4" placeholder="Tuliskan detail kebutuhan proyek Anda..." class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600/40 text-sm transition" required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/20 transition text-sm">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-full bg-slate-900 text-slate-400 py-8 text-center text-xs border-t border-slate-800">
        <p>&copy; {{ date('Y') }} {{ $setting->company_name ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>

    <!-- Header Scroll Handler -->
    <script>
        const siteHeader = document.querySelector('.site-header');
        function handleHeaderScroll() {
            if (!siteHeader) return;
            siteHeader.classList.toggle('header-scrolled', window.scrollY > 24);
        }
        handleHeaderScroll();
        window.addEventListener('scroll', handleHeaderScroll);
    </script>

</body>
</html>