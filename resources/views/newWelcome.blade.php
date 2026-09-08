@extends('layouts.apps')

@section('title', ($setting->company_name ?? 'Company Profile') . ' - Beranda')

@section('content')
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
@endsection