<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan - Company Profile</title>
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- AOS Animation CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <style>
    .site-header {
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
  </style>
</head>
<body class="bg-[#080d1a] text-white font-sans antialiased selection:bg-blue-600 selection:text-white overflow-x-hidden">

  <!-- =====================================================
     NAVBAR
===================================================== -->

<header class="site-header fixed top-0 left-0 w-full z-50">

    <nav
        class="max-w-7xl mx-auto py-4 px-6 md:px-12 flex justify-between items-center"
    >

        <!-- LOGO -->

        <a
            href="{{ route('home') }}"
            class="flex items-center gap-2.5 group"
        >

            <div
                class="
                    w-10 h-10
                    rounded-xl
                    bg-gradient-to-tr
                    from-blue-600
                    to-indigo-600
                    text-white
                    font-extrabold
                    flex items-center justify-center
                    shadow-lg
                    shadow-blue-600/30
                    group-hover:scale-110
                    transition duration-300
                "
            >
                CP
            </div>

            <span
                class="
                    text-xl
                    font-extrabold
                    tracking-tight
                    text-white
                "
            >
                {{ $setting?->company_name ?? 'Company Profile' }}
            </span>

        </a>


        <!-- DESKTOP MENU -->

        <div
            class="
                hidden md:flex
                items-center
                space-x-10
                text-sm
                font-semibold
                text-slate-300
            "
        >

            <!-- HOME -->

            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Home
            </a>


            <!-- TENTANG KAMI -->

            <a
                href="{{ route('about') }}"
                class="{{ request()->routeIs('about')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Tentang Kami
            </a>


            <!-- LAYANAN -->

            <a
                href="{{ route('services') }}"
                class="{{ request()->routeIs('services')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Layanan
            </a>


            <!-- PORTFOLIO -->

            <a
                href="{{ route('portfolio') }}"
                class="{{ request()->routeIs('portfolio')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Portfolio
            </a>


            <!-- KONTAK -->

            <a
                href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Kontak
            </a>

        </div>


        <!-- LOGIN ADMIN -->

        <div class="hidden md:block">

            <a
                href="{{ Route::has('login') ? route('login') : '#' }}"
                class="
                    text-xs
                    font-bold
                    text-white
                    bg-white/10
                    hover:bg-white/20
                    border
                    border-white/20
                    px-5 py-2.5
                    rounded-full
                    backdrop-blur-md
                    transition
                    hover:scale-105
                "
            >
                Login Admin
            </a>

        </div>


        <!-- MOBILE BUTTON -->

        <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="
                md:hidden
                p-2
                rounded-lg
                text-white
            "
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
                />

                <path
                    x-show="mobileMenuOpen"
                    x-cloak
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />

            </svg>

        </button>

    </nav>


    <!-- MOBILE MENU -->

    <div
        x-show="mobileMenuOpen"
        x-cloak
        @click.away="mobileMenuOpen = false"
        class="
            md:hidden
            bg-slate-950/95
            backdrop-blur-xl
            border-b
            border-white/10
            px-6
            py-5
            space-y-3
        "
    >

        <a
            href="{{ route('home') }}"
            class="block text-slate-300 hover:text-blue-400 py-1"
        >
            Home
        </a>


        <a
            href="{{ route('about') }}"
            class="block text-slate-300 hover:text-blue-400 py-1"
        >
            Tentang Kami
        </a>


        <a
            href="{{ route('services') }}"
            class="block text-blue-400 font-bold py-1"
        >
            Layanan
        </a>


        <a
            href="{{ route('portfolio') }}"
            class="block text-slate-300 hover:text-blue-400 py-1"
        >
            Portfolio
        </a>


        <a
            href="{{ route('contact') }}"
            class="block text-slate-300 hover:text-blue-400 py-1"
        >
            Kontak
        </a>


        <div class="pt-3 border-t border-white/10">

            <a
                href="{{ Route::has('login') ? route('login') : '#' }}"
                class="
                    block
                    text-center
                    text-sm
                    font-bold
                    text-white
                    bg-blue-600
                    hover:bg-blue-500
                    py-3
                    rounded-xl
                "
            >
                Login Admin
            </a>

        </div>

    </div>

</header>

  <!-- Hero Section -->
  <section class="relative min-h-[85vh] flex flex-col justify-center items-center text-center px-4 overflow-hidden">
    <!-- Grid Background & Animated Glow Effect -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f293715_1px,transparent_1px),linear-gradient(to_bottom,#1f293715_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/15 rounded-full blur-3xl pointer-events-none animate-pulse"></div>

    <!-- Badge -->
    <div data-aos="zoom-in" data-aos-delay="200" class="inline-flex items-center space-x-2 bg-slate-900/80 border border-slate-800 rounded-full px-4 py-1.5 mb-8 backdrop-blur-md">
      <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
      <span class="text-xs font-medium text-slate-300 tracking-wide">Layanan Kami</span>
    </div>

    <!-- Title & Subtitle -->
    <h1 data-aos="fade-up" data-aos-delay="300" class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
      Layanan <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-indigo-500 bg-clip-text text-transparent">Profesional</span>
    </h1>
    <p data-aos="fade-up" data-aos-delay="400" class="max-w-2xl text-slate-400 text-sm md:text-base leading-relaxed mb-12">
      Jelajahi berbagai layanan profesional kami. Kami menyediakan solusi berkualitas tinggi untuk memenuhi kebutuhan transformasi digital bisnis Anda.
    </p>

    <!-- Services Grid / Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl w-full z-10 px-4">
      
      <!-- Card 1 -->
      <div data-aos="fade-up" data-aos-delay="500" class="glow-card bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 text-left backdrop-blur-md hover:border-blue-500/50 hover:-translate-y-2 transition-all duration-300 group">
        <div class="w-12 h-12 bg-blue-950/50 border border-blue-800/50 text-blue-400 rounded-xl flex items-center justify-center font-mono font-bold text-lg mb-4 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
          &lt;/&gt;
        </div>
        <h3 class="font-bold text-lg text-white mb-1 group-hover:text-blue-400 transition-colors">Web Development</h3>
        <p class="text-xs text-slate-400 leading-relaxed">Modern & Scalable website modern untuk performa bisnis terbaik.</p>
      </div>

      <!-- Card 2 -->
      <div data-aos="fade-up" data-aos-delay="600" class="glow-card bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 text-left backdrop-blur-md hover:border-indigo-500/50 hover:-translate-y-2 transition-all duration-300 group">
        <div class="w-12 h-12 bg-indigo-950/50 border border-indigo-800/50 text-indigo-400 rounded-xl flex items-center justify-center font-mono font-bold text-lg mb-4 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
          ✦
        </div>
        <h3 class="font-bold text-lg text-white mb-1 group-hover:text-indigo-400 transition-colors">Digital Solution</h3>
        <p class="text-xs text-slate-400 leading-relaxed">Creative & Innovative strategi digital terpadu untuk percepatan bisnis.</p>
      </div>

      <!-- Card 3 -->
      <div data-aos="fade-up" data-aos-delay="700" class="glow-card bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 text-left backdrop-blur-md hover:border-emerald-500/50 hover:-translate-y-2 transition-all duration-300 group">
        <div class="w-12 h-12 bg-emerald-950/50 border border-emerald-800/50 text-emerald-400 rounded-xl flex items-center justify-center font-mono font-bold text-lg mb-4 group-hover:scale-110 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
          ⚡
        </div>
        <h3 class="font-bold text-lg text-white mb-1 group-hover:text-emerald-400 transition-colors">UI/UX Design</h3>
        <p class="text-xs text-slate-400 leading-relaxed">Desain antarmuka intuitif dan ramah pengguna untuk aplikasi Anda.</p>
      </div>

    </div>
  </section>

  <!-- CTA Section -->
  <section data-aos="fade-up" data-aos-offset="100" class="border-t border-slate-800/60 py-16 text-center">
    <h2 class="text-2xl font-bold text-white mb-2">Mari Buat Sesuatu yang Luar Biasa</h2>
    <p class="text-slate-400 text-sm mb-6">Punya ide proyek? Kami siap membantunya menjadi kenyataan.</p>
    <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-semibold text-blue-400 hover:text-blue-300 group">
      Hubungi Tim Kami <span class="ml-1 group-hover:translate-x-2 transition-transform duration-300">→</span>
    </a>    
  </section>

  <!-- Footer -->
  <footer class="border-t border-slate-800/40 py-6 text-center text-xs text-slate-500">
    © 2026 Company Profile. All rights reserved.
  </footer>

  <!-- AOS Animation JS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, // Animasi hanya berjalan 1 kali
      duration: 800, // Durasi animasi (ms)
      easing: 'ease-out-cubic',
    });
  </script>

</body>
</html>