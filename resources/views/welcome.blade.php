<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->company_name ?? 'Company Profile' }} - Beranda</title>

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
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3, .font-heading {
            font-family: 'Montserrat', sans-serif;
        }

        .site-header {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .btn-glass {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.28);
        }

        .glass-card-overlay {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }
    </style>
</head>

<body
    class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden"
    x-data="{ mobileMenuOpen: false }"
>

    <!-- =========================
         NAVBAR
    ========================== -->
    <header class="site-header fixed top-0 left-0 w-full z-50">

        <nav class="max-w-7xl mx-auto py-4 px-6 md:px-12 flex justify-between items-center">

            <!-- Logo -->
            <a
                href="{{ route('home') }}"
                class="flex items-center gap-2.5 group"
            >
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 text-white font-extrabold text-sm flex items-center justify-center shadow-md shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                    CP
                </div>

                <span class="text-xl font-extrabold tracking-tight text-white">
                    {{ $setting->company_name ?? 'Company Profile' }}
                </span>
            </a>


            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-10 text-sm font-semibold text-slate-300">

                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Tentang Kami
                </a>

                <a
                    href="{{ route('services') }}"
                    class="{{ request()->routeIs('services') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Layanan
                </a>

                <!-- PORTFOLIO -->
                <a
                    href="{{ route('portfolio') }}"
                    class="{{ request()->routeIs('portfolio') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Portfolio
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Kontak
                </a>

            </div>


            <!-- Login Admin -->
            <div class="hidden md:block">

                <a
                    href="{{ Route::has('login') ? route('login') : '#' }}"
                    class="text-xs font-bold text-white bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 rounded-full transition hover:scale-105 backdrop-blur-md inline-block"
                >
                    Login Admin
                </a>

            </div>


            <!-- Mobile Hamburger -->
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden p-2 rounded-lg text-white hover:text-blue-400 focus:outline-none"
            >

                <svg
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >

                    <path
                        x-show="!mobileMenuOpen"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    ></path>

                    <path
                        x-show="mobileMenuOpen"
                        x-cloak
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    ></path>

                </svg>

            </button>

        </nav>


        <!-- Menu Mobile -->
        <div
            x-show="mobileMenuOpen"
            x-cloak
            @click.away="mobileMenuOpen = false"
            class="md:hidden bg-slate-900 border-b border-slate-800 px-6 py-4 space-y-3"
        >

            <a
                href="{{ route('home') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Tentang Kami
            </a>

            <a
                href="{{ route('services') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Layanan
            </a>

            <!-- PORTFOLIO MOBILE -->
            <a
                href="{{ route('portfolio') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Portfolio
            </a>

            <a
                href="{{ route('contact') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Kontak
            </a>

            <div class="pt-2 border-t border-slate-800">

                <a
                    href="{{ Route::has('login') ? route('login') : '#' }}"
                    class="block text-center text-xs font-bold text-white bg-blue-600 py-2.5 rounded-xl"
                >
                    Login Admin
                </a>

            </div>

        </div>

    </header>


    <!-- =========================
         HERO
    ========================== -->
    <section class="relative min-h-screen w-full text-white pt-28 pb-12 px-6 md:px-12 flex flex-col justify-between overflow-hidden bg-slate-950">

        <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-600/30 rounded-full blur-[130px] pointer-events-none animate-pulse"></div>

        <div class="absolute top-1/2 right-0 w-80 h-80 bg-indigo-500/20 rounded-full blur-[120px] pointer-events-none"></div>


        <div class="absolute inset-0 z-0">

            @php
                $heroImg = !empty($setting->hero_image)
                    ? asset('storage/' . str_replace('public/', '', $setting->hero_image))
                    : 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1920&q=80';
            @endphp

            <img
                src="{{ $heroImg }}"
                alt="Hero Background"
                class="w-full h-full object-cover object-center"
            />

            <div class="absolute inset-0 bg-slate-950/60 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>

        </div>


        <div class="max-w-7xl mx-auto my-auto w-full relative z-10 py-12">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">


                <!-- HERO LEFT -->
                <div class="lg:col-span-8 space-y-6 text-left">

                    <div
                        data-aos="fade-down"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-badge text-xs font-semibold text-white shadow-sm"
                    >

                        <span class="flex h-2 w-2 relative">

                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>

                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>

                        </span>

                        Solusi Digital Masa Depan

                    </div>


                    <h1
                        data-aos="fade-up"
                        data-aos-delay="100"
                        class="text-4xl sm:text-6xl lg:text-7xl font-black tracking-tight leading-[1.1] max-w-3xl"
                    >
                        {{ $setting->hero_title ?? 'Selamat Datang di Website Kami' }}
                    </h1>


                    <p
                        data-aos="fade-up"
                        data-aos-delay="200"
                        class="text-slate-200 text-base md:text-xl leading-relaxed max-w-2xl"
                    >
                        {{ $setting->hero_subtitle ?? 'Kami menyediakan layanan digital terbaik untuk mempercepat pertumbuhan bisnis Anda.' }}
                    </p>


                    <div
                        data-aos="fade-up"
                        data-aos-delay="300"
                        class="flex flex-wrap items-center gap-4 pt-2"
                    >

                        <a
                            href="{{ route('contact') }}"
                            class="bg-blue-600 hover:bg-blue-500 text-white font-extrabold px-8 py-4 rounded-xl text-sm transition shadow-xl shadow-blue-600/30 hover:scale-105"
                        >
                            Hubungi Kami
                        </a>

                        <a
                            href="{{ route('services') }}"
                            class="btn-glass text-white font-bold px-8 py-4 rounded-xl text-sm transition hover:scale-105"
                        >
                            Lihat Layanan
                        </a>

                    </div>

                </div>


                <!-- HERO RIGHT -->
                <div
                    data-aos="fade-left"
                    data-aos-delay="400"
                    class="lg:col-span-4 hidden lg:flex justify-end"
                >

                    <div class="glass-card-overlay p-6 rounded-3xl space-y-4 max-w-sm text-slate-100 animate-float">

                        <div class="w-10 h-10 rounded-xl bg-blue-500/30 text-blue-300 flex items-center justify-center font-bold text-lg">
                            ⚡
                        </div>

                        <h3 class="font-bold text-lg text-white">
                            Layanan Terpercaya
                        </h3>

                        <p class="text-xs text-slate-300 leading-relaxed">
                            Jelajahi halaman profil dan portofolio kami untuk mengetahui solusi terbaik bagi Anda.
                        </p>

                        <a
                            href="{{ route('about') }}"
                            class="inline-block text-xs font-bold text-blue-400 hover:underline"
                        >
                            Pelajari Tentang Kami &rarr;
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================== -->
    <footer class="w-full bg-slate-900 text-slate-400 py-8 px-6 border-t border-slate-800">

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4 text-xs">

            <p>
                &copy; {{ date('Y') }}
                {{ $setting->company_name ?? 'Company Profile' }}.
                All rights reserved.
            </p>


            <div class="flex items-center space-x-6 text-slate-300">

                <a
                    href="{{ route('home') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Tentang Kami
                </a>

                <a
                    href="{{ route('services') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Layanan
                </a>

                <a
                    href="{{ route('portfolio') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Portfolio
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Kontak
                </a>

            </div>

        </div>

    </footer>


    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

</body>
</html>