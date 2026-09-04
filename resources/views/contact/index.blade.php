<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak - Company Profile</title>

  <!-- Tailwind CSS & FontAwesome Icons -->
  <script src="https://cdn.tailwindcss.com"></script>

<!-- Alpine JS -->
<script
    defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">
</script>

  <style>
    body {
      background-color: #0b0f19;
      color: #ffffff;
      font-family: 'Inter', sans-serif;
    }

    body {
    background-color: #0b0f19;
    color: #ffffff;
    font-family: 'Inter', sans-serif;
}

[x-cloak] {
    display: none !important;
}

.site-header {
    background: rgba(15, 23, 42, 0.88);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

  </style>
</head>
<body
    class="min-h-screen flex flex-col justify-between bg-[#0b0f19] text-white overflow-x-hidden"
    x-data="{ mobileMenuOpen: false }"
>

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
            class="block text-slate-300 hover:text-blue-400 py-1"
        >
            Layanan
        </a>


        <a
            href="{{ route('portfolio') }}"
            class="block text-slate-300 hover:text-blue-400 py-1"
        >
            Portfolio
        </a>


        <!-- KONTAK AKTIF -->

        <a
            href="{{ route('contact') }}"
            class="block text-blue-400 font-bold py-1"
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

  <!-- MAIN CONTENT -->
  <main class="max-w-6xl mx-auto px-6 py-12 flex-1 flex flex-col justify-center items-center w-full">
    
    <!-- HEADER -->
    <div class="text-center mb-12 max-w-2xl" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
      <span class="inline-block bg-blue-900/40 text-blue-400 text-xs font-semibold px-4 py-1.5 rounded-full border border-blue-500/30 mb-4 tracking-wider animate-pulse">
        HUBUNGI KAMI
      </span>
      <h1 class="text-4xl font-extrabold tracking-tight mb-3">
        Mari Berdiskusi <span class="text-blue-500">Dengan Kami</span>
      </h1>
      <p class="text-gray-400 text-sm leading-relaxed">
        Punya pertanyaan atau berminat menjalin kerja sama? Kirimkan pesan Anda melalui form berikut.
      </p>
    </div>

    <!-- CONTENT GRID -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 w-full max-w-5xl">
      
      <!-- LEFT CARD: INFORMASI KONTAK -->
      <div class="md:col-span-5 bg-gradient-to-b from-blue-600 to-indigo-800 rounded-2xl p-8 flex flex-col justify-between shadow-2xl relative overflow-hidden transition-all duration-300 hover:scale-[1.02]"
           data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
        <div>
          <h2 class="text-2xl font-bold mb-3 text-white">Mari Terhubung</h2>
          <p class="text-blue-100 text-xs leading-relaxed mb-8">
            Tim profesional kami selalu siap memberikan solusi teknis terbaik untuk kebutuhan bisnis Anda.
          </p>

          <div class="space-y-5">
            <!-- Facebook -->
            <div class="flex items-center gap-4 group cursor-pointer">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white backdrop-blur-md group-hover:bg-white group-hover:text-blue-600 transition-all duration-300 group-hover:scale-110">
                <i class="fab fa-facebook-f text-sm"></i>
              </div>
              <div>
                <p class="text-[10px] text-blue-200 tracking-wider font-semibold">FACEBOOK</p>
                <p class="text-sm font-semibold text-white group-hover:text-blue-200 transition">facebook.com</p>
              </div>
            </div>

            <!-- Instagram -->
            <div class="flex items-center gap-4 group cursor-pointer">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white backdrop-blur-md group-hover:bg-white group-hover:text-blue-600 transition-all duration-300 group-hover:scale-110">
                <i class="fab fa-instagram text-sm"></i>
              </div>
              <div>
                <p class="text-[10px] text-blue-200 tracking-wider font-semibold">INSTAGRAM</p>
                <p class="text-sm font-semibold text-white group-hover:text-blue-200 transition">instagram.com</p>
              </div>
            </div>

            <!-- Twitter -->
            <div class="flex items-center gap-4 group cursor-pointer">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white backdrop-blur-md group-hover:bg-white group-hover:text-blue-600 transition-all duration-300 group-hover:scale-110">
                <i class="fab fa-twitter text-sm"></i>
              </div>
              <div>
                <p class="text-[10px] text-blue-200 tracking-wider font-semibold">TWITTER</p>
                <p class="text-sm font-semibold text-white group-hover:text-blue-200 transition">twitter.com</p>
              </div>
            </div>

            <!-- Email -->
            <div class="flex items-center gap-4 group cursor-pointer">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white backdrop-blur-md group-hover:bg-white group-hover:text-blue-600 transition-all duration-300 group-hover:scale-110">
                <i class="fas fa-envelope text-sm"></i>
              </div>
              <div>
                <p class="text-[10px] text-blue-200 tracking-wider font-semibold">EMAIL</p>
                <p class="text-sm font-semibold text-white group-hover:text-blue-200 transition">info@company.com</p>
              </div>
            </div>

            <!-- Alamat -->
            <div class="flex items-center gap-4 group cursor-pointer">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white backdrop-blur-md group-hover:bg-white group-hover:text-blue-600 transition-all duration-300 group-hover:scale-110">
                <i class="fas fa-map-marker-alt text-sm"></i>
              </div>
              <div>
                <p class="text-[10px] text-blue-200 tracking-wider font-semibold">ALAMAT</p>
                <p class="text-sm font-semibold text-white group-hover:text-blue-200 transition">Jakarta, Indonesia</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT CARD: FORM PESAN -->
      <div class="md:col-span-7 bg-[#111827] border border-gray-800 rounded-2xl p-8 shadow-2xl transition-all duration-300 hover:border-gray-700"
           data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
        <form class="space-y-5">
          <div>
            <label class="block text-xs font-bold text-gray-400 mb-2 tracking-wider">NAMA LENGKAP</label>
            <input type="text" placeholder="Masukkan nama Anda" class="w-full bg-[#1f2937] border border-gray-700/60 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all duration-300">
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-400 mb-2 tracking-wider">EMAIL</label>
            <input type="email" placeholder="email@domain.com" class="w-full bg-[#1f2937] border border-gray-700/60 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all duration-300">
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-400 mb-2 tracking-wider">PESAN</label>
            <textarea rows="4" placeholder="Tuliskan detail kebutuhan proyek Anda..." class="w-full bg-[#1f2937] border border-gray-700/60 rounded-xl px-4 py-3 text-sm text-white placeholder-gray-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all duration-300 resize-none"></textarea>
          </div>

          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 active:scale-[0.98] text-white font-semibold py-3.5 rounded-xl transition-all duration-300 shadow-lg shadow-blue-600/30 text-sm hover:shadow-blue-500/50">
            Kirim Pesan
          </button>
        </form>
      </div>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="text-center py-6 border-t border-gray-800/60 text-xs text-gray-500">
    © 2026 Company Profile. All rights reserved.
  </footer>

  <!-- AOS Animation Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, // Animasi hanya berjalan 1 kali saat di-scroll/load
    });
  </script>

</body>
</html>