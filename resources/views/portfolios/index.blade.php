<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting?->company_name ?? 'Company Profile' }} - Portfolio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }

        [x-cloak] { display: none !important; }

        .dark-grid-bg {
            background-color: #080c16;
            background-image: 
                linear-gradient(to right, rgba(255, 255, 255, 0.035) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
            background-size: 42px 42px;
        }

        .glass {
            background: rgba(15, 23, 42, 0.62);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-badge {
            background: rgba(255, 255, 255, 0.055);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glow-orb {
            position: absolute;
            border-radius: 9999px;
            pointer-events: none;
            filter: blur(2px);
        }

        .orb-blue {
            width: 420px; 
            height: 420px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.20) 0%, rgba(37, 99, 235, 0) 70%);
        }

        .orb-indigo {
            width: 500px; 
            height: 500px;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.18) 0%, rgba(79, 70, 229, 0) 70%);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-18px) translateX(8px); }
        }

        .float { animation: float 7s ease-in-out infinite; }

        @keyframes pulseGlow {
            0%, 100% { opacity: 0.35; transform: scale(0.95); }
            50% { opacity: 0.75; transform: scale(1.05); }
        }

        .pulse-glow { animation: pulseGlow 4s ease-in-out infinite; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-up {
            animation: fadeUp 0.8s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        .delay-1 { animation-delay: 0.12s; }
        .delay-2 { animation-delay: 0.24s; }
        .delay-3 { animation-delay: 0.36s; }

        .portfolio-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                        border-color 0.45s ease,
                        box-shadow 0.45s ease;
        }

        .portfolio-card:hover {
            transform: translateY(-10px);
            border-color: rgba(59, 130, 246, 0.42);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.5),
                        0 0 35px rgba(37, 99, 235, 0.10);
        }

        .portfolio-card::before {
            content: "";
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            background: linear-gradient(120deg, transparent, rgba(96, 165, 250, 0.16), transparent);
            transform: translateX(-120%);
            transition: transform 0.8s ease;
            pointer-events: none;
            z-index: 2;
        }

        .portfolio-card:hover::before { transform: translateX(120%); }

        .portfolio-image {
            transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1),
                        filter 0.65s ease;
        }

        .portfolio-card:hover .portfolio-image {
            transform: scale(1.09);
            filter: brightness(1.08);
        }

        .number-badge {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        }

        .shine {
            position: relative;
            overflow: hidden;
        }

        .shine::after {
            content: "";
            position: absolute;
            top: 0;
            left: -130%;
            width: 55%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.12), transparent);
            transform: skewX(-20deg);
            transition: left 0.9s ease;
            pointer-events: none;
        }

        .shine:hover::after { left: 140%; }

        .scroll-indicator {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(7px); }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body class="bg-[#080c16] text-slate-100 antialiased overflow-x-hidden" x-data="{ mobileMenuOpen: false }">

   <!-- NAVBAR PORTFOLIO (LEBIH TERANG & TRANSPARAN) -->
    <header class="fixed top-0 left-0 w-full z-50 bg-slate-800/40 backdrop-blur-md border-b border-white/15 transition-all duration-300">
        <nav class="max-w-7xl mx-auto px-6 md:px-12 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 flex items-center justify-center font-black shadow-lg shadow-blue-600/25 group-hover:scale-110 transition">
                    CP
                </div>
                <span class="text-lg md:text-xl font-extrabold tracking-tight text-white group-hover:text-blue-400 transition">
                    {{ $setting?->company_name ?? 'CompanyProfile' }}
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-9 text-sm font-medium text-slate-200">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-white transition">Tentang Kami</a>
                <a href="{{ route('services') }}" class="hover:text-white transition">Layanan</a>
                <a href="{{ route('portfolio') }}" class="relative text-white font-semibold">
                    Portfolio
                    <span class="absolute -bottom-1.5 left-0 w-full h-0.5 rounded-full bg-blue-500 shadow-[0_0_8px_rgba(59,130,246,0.8)]"></span>
                </a>
                <a href="{{ route('contact') }}" class="hover:text-white transition">Kontak</a>
            </div>

            <!-- Login Button -->
            <div class="hidden md:block">
                <a href="{{ Route::has('login') ? route('login') : '#' }}" class="px-5 py-2 rounded-lg text-xs font-semibold bg-white/15 hover:bg-white/25 border border-white/20 text-white transition">
                    Login Admin
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-slate-200 rounded-lg focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenuOpen" x-cloak @click.outside="mobileMenuOpen = false" class="md:hidden px-6 py-5 space-y-3 bg-slate-800/80 backdrop-blur-lg border-t border-white/15">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-200 hover:text-white">Home</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-200 hover:text-white">Tentang Kami</a>
            <a href="{{ route('services') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-200 hover:text-white">Layanan</a>
            <a href="{{ route('portfolio') }}" @click="mobileMenuOpen = false" class="block py-1 text-white font-semibold">Portfolio</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-200 hover:text-white">Kontak</a>
            <a href="{{ Route::has('login') ? route('login') : '#' }}" class="block text-center mt-3 px-4 py-2.5 rounded-lg bg-white/15 text-white font-semibold text-xs border border-white/20">
                Login Admin
            </a>
        </div>
    </header>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-slate-300 rounded-lg focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenuOpen" x-cloak @click.outside="mobileMenuOpen = false" class="md:hidden px-6 py-5 space-y-3 bg-[#0b0f19] border-t border-white/10">
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-300 hover:text-white">Home</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-300 hover:text-white">Tentang Kami</a>
            <a href="{{ route('services') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-300 hover:text-white">Layanan</a>
            <a href="{{ route('portfolio') }}" @click="mobileMenuOpen = false" class="block py-1 text-white font-semibold">Portfolio</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="block py-1 text-slate-300 hover:text-white">Kontak</a>
            <a href="{{ Route::has('login') ? route('login') : '#' }}" class="block text-center mt-3 px-4 py-2.5 rounded-lg bg-white/10 text-white font-semibold text-xs border border-white/15">
                Login Admin
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative min-h-[700px] pt-40 pb-28 dark-grid-bg overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-950/30 via-transparent to-[#080c16]"></div>
        <div class="glow-orb orb-blue -top-20 -left-20 float"></div>
        <div class="glow-orb orb-indigo top-10 -right-20 float" style="animation-delay: 2s;"></div>

        <div class="absolute top-44 left-[10%] w-2.5 h-2.5 rounded-full bg-blue-400 pulse-glow"></div>
        <div class="absolute top-60 right-[15%] w-3.5 h-3.5 rounded-full bg-indigo-400 pulse-glow" style="animation-delay: 1s;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-8 lg:col-start-3 text-center">

                    <div class="fade-up inline-flex items-center gap-2 px-4 py-2 rounded-full glass-badge text-xs font-bold text-blue-300 shadow-lg shadow-blue-900/20">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-400"></span>
                        </span>
                        <span class="tracking-wide">Inovasi & Solusi Digital Profesional</span>
                    </div>

                    <h1 class="fade-up delay-1 mt-6 text-4xl sm:text-6xl md:text-7xl font-black tracking-tight leading-[1.05]">
                        Karya Digital 
                        <span class="block mt-1 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-cyan-400 filter drop-shadow-sm">
                            Unggulan Kami
                        </span>
                    </h1>

                    <p class="fade-up delay-2 mt-6 max-w-2xl mx-auto text-slate-300 text-base md:text-lg leading-relaxed font-normal">
                        Jelajahi berbagai mahakarya website, sistem informasi, dan produk digital mutakhir yang dirancang khusus untuk mengakselerasi pertumbuhan bisnis Anda.
                    </p>

                    <div class="fade-up delay-3 mt-8 flex flex-wrap justify-center items-center gap-4">
                        <a href="#projects" class="group inline-flex items-center gap-3 px-7 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 font-bold text-sm shadow-xl shadow-blue-600/30 transition-all duration-300 hover:-translate-y-1">
                            <span>Jelajahi Portfolio</span>
                            <span class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center text-xs group-hover:translate-y-0.5 transition">↓</span>
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-7 py-4 rounded-2xl glass hover:bg-white/10 border border-white/10 font-bold text-sm transition-all duration-300 hover:-translate-y-1">
                            <span>Mulai Konsultasi</span>
                            <span class="text-blue-400">↗</span>
                        </a>
                    </div>

                    <div class="mt-16 pt-10 border-t border-white/10 grid grid-cols-3 gap-6 max-w-xl mx-auto">
                        <div class="glass rounded-2xl p-4 text-center">
                            <div class="text-2xl md:text-3xl font-black text-white">100<span class="text-blue-400">+</span></div>
                            <div class="mt-1 text-[11px] uppercase tracking-wider text-slate-400 font-semibold">Proyek Selesai</div>
                        </div>
                        <div class="glass rounded-2xl p-4 text-center">
                            <div class="text-2xl md:text-3xl font-black text-white">5<span class="text-indigo-400">+</span></div>
                            <div class="mt-1 text-[11px] uppercase tracking-wider text-slate-400 font-semibold">Tahun Pengalaman</div>
                        </div>
                        <div class="glass rounded-2xl p-4 text-center">
                            <div class="text-2xl md:text-3xl font-black text-white">100<span class="text-emerald-400">%</span></div>
                            <div class="mt-1 text-[11px] uppercase tracking-wider text-slate-400 font-semibold">Klien Puas</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mt-12 flex justify-center">
                <div class="scroll-indicator text-slate-400 text-xs flex flex-col items-center gap-2 cursor-pointer hover:text-white transition">
                    <span class="tracking-widest uppercase text-[10px]">Scroll ke bawah</span>
                    <span class="text-blue-400 text-base">↓</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="relative bg-[#080c16] py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>
        <div class="absolute -left-48 top-20 w-96 h-96 rounded-full bg-blue-600/10 blur-[120px]"></div>
        <div class="absolute -right-48 bottom-20 w-96 h-96 rounded-full bg-indigo-600/10 blur-[120px]"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-blue-400 text-xs font-bold uppercase tracking-[0.2em]">
                        <span class="w-8 h-px bg-blue-500"></span>
                        Selected Works
                    </div>
                    <h2 class="mt-4 text-3xl md:text-5xl font-black">Proyek Terbaru</h2>
                    <p class="mt-4 max-w-xl text-slate-400 text-sm leading-7">
                        Kumpulan karya yang kami kembangkan untuk menghadirkan pengalaman digital yang modern, cepat, dan relevan.
                    </p>
                </div>
                <div class="glass rounded-2xl px-5 py-4 text-xs text-slate-400">
                    <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 mr-2"></span>
                    Quality first · Detail matters
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
                @forelse($portfolios as $index => $item)
                    <article class="portfolio-card shine glass rounded-3xl p-4 group">
                        <div class="relative h-56 overflow-hidden rounded-2xl bg-slate-900">
                            @if($item->portfolioImages && $item->portfolioImages->isNotEmpty())
                                <img src="{{ asset('storage/' . $item->portfolioImages->first()->image) }}" alt="{{ $item->title }}" class="portfolio-image w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-slate-600 bg-gradient-to-br from-slate-900 to-slate-950">
                                    <svg class="w-12 h-12 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M4 16l4.5-5 3 3 3.5-4 5 6M4 19h16"/>
                                    </svg>
                                    <span class="text-xs">Tidak ada gambar</span>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            
                            <div class="number-badge absolute top-4 left-4 glass rounded-xl px-3 py-2 text-[10px] font-black text-blue-300">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <div class="absolute top-4 right-4 w-10 h-10 rounded-full glass flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition duration-300">
                                ↗
                            </div>
                        </div>

                        <div class="p-3 pt-5">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                                <span class="text-[10px] uppercase tracking-[0.18em] text-slate-500 font-bold">Digital Project</span>
                            </div>

                            <h3 class="text-xl font-black group-hover:text-blue-400 transition">{{ $item->title }}</h3>

                            <p class="mt-3 text-sm text-slate-400 leading-6 line-clamp-3">
                                {{ Str::limit(strip_tags($item->content ?? ''), 120) }}
                            </p>

                            <div class="mt-6 pt-5 border-t border-white/5">
                                <a href="{{ route('page.show', $item->slug) }}" class="inline-flex items-center gap-2 text-xs font-bold text-blue-400 hover:text-blue-300 transition">
                                    Lihat Detail
                                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full glass rounded-3xl py-20 px-6 text-center">
                        <div class="w-16 h-16 mx-auto rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-2xl mb-4">
                            ✦
                        </div>
                        <h3 class="text-xl font-bold">Belum Ada Portfolio</h3>
                        <p class="mt-2 text-sm text-slate-500">Portfolio yang ditambahkan melalui dashboard admin akan muncul di sini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="relative py-24 bg-[#080c16] overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 via-indigo-600/10 to-transparent"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-6">
            <div class="glass rounded-[2rem] p-10 md:p-16 text-center overflow-hidden relative">
                <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-80 h-80 rounded-full bg-blue-600/15 blur-[100px]"></div>

                <div class="relative">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-400 text-[10px] uppercase tracking-[0.2em] font-bold">
                        Let's create
                    </span>

                    <h2 class="mt-6 text-3xl md:text-5xl font-black">Punya Ide Proyek?</h2>

                    <p class="mt-4 max-w-2xl mx-auto text-slate-400 text-sm md:text-base leading-7">
                        Mari ubah ide Anda menjadi solusi digital yang modern dan berdampak.
                    </p>

                    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 font-bold text-sm shadow-lg shadow-blue-600/25 transition hover:-translate-y-1">
                        Hubungi Kami
                        <span>↗</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#05070d] border-t border-white/5 py-7 px-6 text-center text-xs text-slate-500">
        <p>&copy; {{ date('Y') }} {{ $setting?->company_name ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>

</body>
</html>