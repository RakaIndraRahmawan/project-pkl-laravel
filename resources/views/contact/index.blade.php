<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak - Company Profile</title>

  <!-- Tailwind CSS & FontAwesome Icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- AOS Animation CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <style>
    body {
      background-color: #0b0f19;
      color: #ffffff;
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen flex flex-col justify-between bg-[#0b0f19] text-white overflow-x-hidden">

<!-- NAVBAR -->
<nav class="flex items-center justify-between px-12 py-6 border-b border-gray-800/60 max-w-7xl mx-auto w-full" data-aos="fade-down" data-aos-duration="800">
  <div class="flex items-center gap-3">
    <div class="bg-blue-600 text-white font-bold px-2.5 py-1 rounded-lg text-sm hover:rotate-6 transition-transform">CP</div>
    <span class="font-bold text-lg tracking-wide">CompanyProfile</span>
  </div>

  <!-- MENU NAVIGASI DENGAN ROUTE LARAVEL -->
  <div class="flex items-center gap-8 text-sm text-gray-400 font-medium">
    <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
    <a href="{{ route('about') }}" class="hover:text-white transition">Tentang Kami</a>
    <a href="{{ route('services') }}" class="hover:text-white transition">Layanan</a>
    <a href="{{ route('portfolio') }}" class="hover:text-white transition">Portfolio</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-500 font-semibold' : 'hover:text-white transition' }}">Kontak</a>
  </div>

  <a href="{{ route('login') }}" class="text-sm px-5 py-2 border border-gray-700 rounded-full hover:bg-gray-800 hover:border-gray-500 transition-all text-gray-300">Login Admin</a>
</nav>

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