@extends('layouts.apps')

@section('title', ($setting->company_name ?? 'Company Profile') . ' - Beranda')

@section('style')

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
@endsection

@section('content')
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
@section('script')
  <!-- AOS Animation Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, // Animasi hanya berjalan 1 kali saat di-scroll/load
    });
  </script>
@endsection