@extends('layouts.apps')

@section('title', ($setting->company_name ?? 'Company Profile') . ' - Beranda')

@section('style')
    <style>
        .site-header {
            background: rgba(15, 23, 42, 0.88);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .tech-grid {
            background-image:
                linear-gradient(
                    rgba(255,255,255,0.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,0.025) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;
        }

        .glow-orb {
            border-radius: 100%;
            pointer-events: none;
            animation: pulse 2s infinite cubic-bezier(0.4, 0, 0.6, 1);
        }

        .mini-orb {
            position: absolute;
            border-radius: 9999px;
            pointer-events: none;
            filter: blur(2px);
        }

        .pulse-glow {
            animation: pulseGlow 4s infinite ease-in-out;
        }

        .service-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
                        border-color 0.45s ease,
                        box-shadow 0.45s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: rgba(59, 130, 246, 0.42);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.5),
                        0 0 35px rgba(37, 99, 235, 0.10);
        }

        .service-card::before {
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

        .service-card:hover::before {
            transform: translateX(120%);
        }

        .service-image {
            transition: transform 0.65s cubic-bezier(0.22, 1, 0.36, 1),
                        filter 0.65s ease;
        }

        .service-card:hover .service-image {
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
        
        .shine:hover::after {
            left: 140%;
        }



        @keyframes pulse {
            50% {
                opacity: 0.5;
            }
        }

        @keyframes pulseGlow {
            0%, 100% {
                transform: scale(0.95);
                opacity: 0.35;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.75;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[85vh] flex flex-col justify-center items-center text-center px-4 overflow-hidden bg-slate-950">
        <!-- Grid Background & Animated Glow Effect -->
        <div class="absolute inset-0 tech-grid pointer-events-none"></div>
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/15 blur-3xl glow-orb" style="animation-delay: 1s"></div>
        <div class="absolute top-1/2 left-[15%] -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-indigo-600/15 blur-3xl glow-orb" style="animation-delay: 2s"></div>
        <div class="absolute top-2/3 left-3/4 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-emerald-600/15 blur-3xl glow-orb"></div>

        <div class="absolute top-1/4 left-[55%] w-2.5 h-2.5 rounded-full bg-blue-400 pulse-glow"></div>
        <div class="absolute top-[45%] left-[10%] w-3.5 h-3.5 rounded-full bg-indigo-400 pulse-glow" style="animation-delay: 1s"></div>
        <div class="absolute top-[65%] right-[20%] w-3 h-3 rounded-full bg-emerald-400 pulse-glow" style="animation-delay: 2s"></div>

        <!-- Badge -->
        <div data-aos="zoom-in" data-aos-delay="200" class="inline-flex items-center space-x-2 bg-slate-900/80 border border-slate-800 rounded-full px-4 py-1.5 mb-8 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-xs font-medium text-slate-300 tracking-wide">Layanan Kami</span>
        </div>

        <!-- Title & Subtitle -->
        <h1 data-aos="fade-up" data-aos-delay="300" class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-white">
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

    <!-- PROJECTS SECTION -->
    <section id="projects" class="relative bg-slate-950 py-24 overflow-hidden">
        <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>
        <div class="absolute -left-48 top-20 w-96 h-96 rounded-full bg-blue-600/10 blur-[120px]"></div>
        <div class="absolute -right-48 bottom-20 w-96 h-96 rounded-full bg-indigo-600/10 blur-[120px]"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-blue-400 text-xs font-bold uppercase tracking-[0.2em]">
                        <span class="w-8 h-px bg-blue-500"></span>
                        Our Top Services
                    </div>
                    <h2 class="mt-4 text-3xl md:text-5xl font-black text-white">Layanan Terbaru</h2>
                    <p class="mt-4 max-w-xl text-slate-400 text-sm leading-7">
                        Kumpulan layanan yang kami tawarkan untuk menghadirkan pengalaman digital yang modern, cepat, dan relevan.
                    </p>
                </div>
                <div class="glass rounded-2xl px-5 py-4 text-xs text-slate-400">
                    <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 mr-2"></span>
                    Quality first · Detail matters
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
                @forelse($services as $index => $item)
                    <article class="service-card bg-slate-900 shine glass rounded-3xl p-4 group">
                        <div class="relative h-56 overflow-hidden rounded-2xl bg-slate-900">
                            @if($item->serviceImages && $item->serviceImages->isNotEmpty())
                                <img src="{{ asset('storage/' . $item->serviceImages->first()->image) }}" alt="{{ $item->title }}" class="portfolio-image w-full h-full object-cover">
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

                            <h3 class="text-white text-xl font-black group-hover:text-blue-400 transition">{{ $item->title }}</h3>

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
                        <h3 class="text-xl font-bold">Belum Ada Layanan</h3>
                        <p class="mt-2 text-sm text-slate-500">Layanan yang ditambahkan melalui dashboard admin akan muncul di sini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section data-aos="fade-up" data-aos-offset="100" class="bg-gradient-to-r from-slate-950 via-slate-950 to-indigo-950 border-t border-slate-800/60 py-16 text-center">
        {{-- <div class="absolute left-[1%] bottom-[2%] transform -translate-x-1/2 -translate-y-1/2 w-[180px] h-[180px] bg-blue-600/15 blur-3xl glow-orb"></div>
        <div class="absolute right-[1%] bottom-[2%] transform translate-x-1/2 -translate-y-1/2 w-[180px] h-[180px] bg-blue-600/15 blur-3xl glow-orb"></div>
        <div class="absolute left-1/2 bottom-[2%] transform -translate-x-1/2 -translate-y-1/2 w-[180px] h-[180px] bg-indigo-600/30 blur-3xl glow-orb"></div> --}}

        <h2 class="text-2xl font-bold text-white mb-2">Mari Buat Sesuatu yang Luar Biasa</h2>
        <p class="text-slate-400 text-sm mb-6">Punya ide proyek? Kami siap membantunya menjadi kenyataan.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center text-sm font-semibold text-blue-400 hover:text-blue-300 group">
            Hubungi Tim Kami <span class="ml-1 group-hover:translate-x-2 transition-transform duration-300">→</span>
        </a>    
    </section>
@endsection

@section('script')
  <!-- AOS Animation JS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true, // Animasi hanya berjalan 1 kali
      duration: 800, // Durasi animasi (ms)
      easing: 'ease-out-cubic',
    });
  </script>
@endsection