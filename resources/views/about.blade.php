<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Tentang Kami - {{ $setting?->company_name ?? 'Company Profile' }}
    </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@700;800;900&display=swap"
        rel="stylesheet"
    >

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine -->
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js">
    </script>

    <!-- AOS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@next/dist/aos.css"
    >

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-heading {
            font-family: 'Montserrat', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        /* =====================================================
           NAVBAR
        ===================================================== */

        .site-header {
            background: rgba(15, 23, 42, 0.88);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* =====================================================
           GLASS CARD
        ===================================================== */

        .glass-card {
            background: rgba(15, 23, 42, 0.68);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .glass-light {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.10);
        }

        /* =====================================================
           GLOW
        ===================================================== */

        .blue-glow {
            box-shadow:
                0 0 40px rgba(37, 99, 235, 0.18),
                0 0 100px rgba(79, 70, 229, 0.08);
        }

        /* =====================================================
           FLOAT ANIMATION
        ===================================================== */

        @keyframes float {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        /* =====================================================
           GRID BACKGROUND
        ===================================================== */

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

        /* =====================================================
           HERO ORB
        ===================================================== */

        @keyframes pulseGlow {
            0%,
            100% {
                opacity: .35;
                transform: scale(1);
            }

            50% {
                opacity: .6;
                transform: scale(1.08);
            }
        }

        .hero-orb {
            animation: pulseGlow 7s ease-in-out infinite;
        }

        /* =====================================================
           FLOATING LINE
        ===================================================== */

        @keyframes lineMove {
            0% {
                transform: translateX(-30px);
                opacity: .15;
            }

            50% {
                opacity: .5;
            }

            100% {
                transform: translateX(30px);
                opacity: .15;
            }
        }

        .moving-line {
            animation: lineMove 5s ease-in-out infinite;
        }
    </style>

</head>


<body
    class="bg-slate-950 text-white antialiased overflow-x-hidden"
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

            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Home
            </a>


            <a
                href="{{ route('about') }}"
                class="{{ request()->routeIs('about')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Tentang Kami
            </a>


            <a
                href="{{ route('services') }}"
                class="{{ request()->routeIs('services')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Layanan
            </a>


            <a
                href="{{ route('portfolio') }}"
                class="{{ request()->routeIs('portfolio')
                    ? 'text-blue-400 font-bold'
                    : 'hover:text-blue-400' }}
                    transition-colors"
            >
                Portfolio
            </a>


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


        <!-- LOGIN -->

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
            class="block text-blue-400 font-bold py-1"
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



<!-- =====================================================
     HERO ABOUT
===================================================== -->

<section
    class="
        relative
        min-h-[720px]
        pt-32
        pb-16
        overflow-hidden
        bg-slate-950
    "
>

    <!-- GRID -->

    <div
        class="
            absolute
            inset-0
            tech-grid
            opacity-80
        "
    ></div>


    <!-- TOP BLUE GLOW -->

    <div
        class="
            hero-orb
            absolute
            -top-48
            left-1/2
            -translate-x-1/2
            w-[650px]
            h-[450px]
            bg-blue-600/20
            rounded-full
            blur-[140px]
        "
    ></div>


    <!-- LEFT GLOW -->

    <div
        class="
            absolute
            top-1/3
            -left-48
            w-[500px]
            h-[500px]
            bg-indigo-600/15
            rounded-full
            blur-[140px]
        "
    ></div>


    <!-- RIGHT GLOW -->

    <div
        class="
            absolute
            top-1/3
            -right-48
            w-[500px]
            h-[500px]
            bg-blue-500/15
            rounded-full
            blur-[140px]
        "
    ></div>


    <!-- DECORATIVE LINES -->

    <div
        class="
            absolute
            top-[42%]
            left-0
            w-64
            h-px
            bg-gradient-to-r
            from-transparent
            via-blue-500/40
            to-transparent
            moving-line
        "
    ></div>


    <div
        class="
            absolute
            top-[48%]
            right-0
            w-64
            h-px
            bg-gradient-to-r
            from-transparent
            via-indigo-500/40
            to-transparent
            moving-line
        "
        style="animation-delay: 1.5s;"
    ></div>


    <!-- DECORATIVE DOTS -->

    <div
        class="
            absolute
            top-40
            left-[12%]
            w-2
            h-2
            rounded-full
            bg-blue-400
            shadow-[0_0_20px_rgba(96,165,250,.9)]
            animate-pulse
        "
    ></div>


    <div
        class="
            absolute
            top-56
            right-[15%]
            w-3
            h-3
            rounded-full
            bg-indigo-400
            shadow-[0_0_25px_rgba(129,140,248,.9)]
            animate-pulse
        "
    ></div>


    <div
        class="
            absolute
            bottom-32
            left-[20%]
            w-2
            h-2
            rounded-full
            bg-emerald-400
            shadow-[0_0_20px_rgba(52,211,153,.8)]
            animate-pulse
        "
    ></div>


    <!-- MAIN CONTENT -->

    <div
        class="
            relative
            z-10
            max-w-7xl
            mx-auto
            px-6
        "
    >

        <!-- HERO TEXT -->

        <div
            class="
                max-w-4xl
                mx-auto
                text-center
            "
        >

            <!-- BADGE -->

            <div
                data-aos="fade-down"
                class="
                    inline-flex
                    items-center
                    gap-2
                    px-5
                    py-2.5
                    rounded-full
                    bg-white/[0.07]
                    border
                    border-white/15
                    backdrop-blur-xl
                    shadow-lg
                    shadow-blue-900/20
                "
            >

                <span
                    class="
                        w-2.5
                        h-2.5
                        rounded-full
                        bg-emerald-400
                        shadow-[0_0_15px_rgba(52,211,153,.9)]
                    "
                ></span>

                <span
                    class="
                        text-sm
                        font-bold
                        text-blue-300
                    "
                >
                    Profil Perusahaan
                </span>

            </div>


            <!-- TITLE -->

            <h1
                data-aos="fade-up"
                data-aos-delay="100"
                class="
                    mt-7
                    text-5xl
                    sm:text-6xl
                    md:text-7xl
                    lg:text-8xl
                    font-black
                    tracking-tight
                    leading-[0.95]
                "
            >

                Tentang

                <span
                    class="
                        text-transparent
                        bg-clip-text
                        bg-gradient-to-r
                        from-blue-400
                        via-indigo-400
                        to-blue-500
                    "
                >
                    Kami
                </span>

            </h1>


            <!-- DESCRIPTION -->

            <p
                data-aos="fade-up"
                data-aos-delay="200"
                class="
                    mt-7
                    max-w-2xl
                    mx-auto
                    text-base
                    md:text-lg
                    leading-8
                    text-slate-300
                "
            >
                Mengenal lebih dekat visi, pengalaman, dan dedikasi
                kami dalam menghadirkan solusi digital berkualitas
                tinggi untuk kebutuhan bisnis Anda.
            </p>


            <!-- MINI STATS -->

            <div
                data-aos="fade-up"
                data-aos-delay="300"
                class="
                    mt-9
                    flex
                    flex-wrap
                    justify-center
                    gap-4
                "
            >

                <!-- STAT -->

                <div
                    class="
                        glass-card
                        rounded-2xl
                        px-7
                        py-4
                        min-w-[155px]
                        hover:-translate-y-1
                        transition
                        duration-300
                    "
                >

                    <div
                        class="
                            text-2xl
                            font-black
                            text-blue-400
                        "
                    >
                        5+
                    </div>

                    <div
                        class="
                            mt-1
                            text-[10px]
                            uppercase
                            tracking-wider
                            text-slate-400
                        "
                    >
                        Tahun Pengalaman
                    </div>

                </div>


                <!-- STAT -->

                <div
                    class="
                        glass-card
                        rounded-2xl
                        px-7
                        py-4
                        min-w-[155px]
                        hover:-translate-y-1
                        transition
                        duration-300
                    "
                >

                    <div
                        class="
                            text-2xl
                            font-black
                            text-indigo-400
                        "
                    >
                        100+
                    </div>

                    <div
                        class="
                            mt-1
                            text-[10px]
                            uppercase
                            tracking-wider
                            text-slate-400
                        "
                    >
                        Proyek Selesai
                    </div>

                </div>


                <!-- STAT -->

                <div
                    class="
                        glass-card
                        rounded-2xl
                        px-7
                        py-4
                        min-w-[155px]
                        hover:-translate-y-1
                        transition
                        duration-300
                    "
                >

                    <div
                        class="
                            text-2xl
                            font-black
                            text-emerald-400
                        "
                    >
                        100%
                    </div>

                    <div
                        class="
                            mt-1
                            text-[10px]
                            uppercase
                            tracking-wider
                            text-slate-400
                        "
                    >
                        Komitmen Kualitas
                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             FLOATING TECHNOLOGY CARDS
        ================================================== -->

        <div
            class="
                relative
                max-w-5xl
                mx-auto
                mt-12
                h-[145px]
                hidden
                md:block
            "
        >

            <!-- LEFT CARD -->

            <div
                data-aos="fade-right"
                data-aos-delay="300"
                class="
                    absolute
                    left-0
                    top-3
                    glass-card
                    rounded-2xl
                    px-5
                    py-4
                    w-60
                    blue-glow
                    animate-float
                "
            >

                <div
                    class="
                        flex
                        items-center
                        gap-3
                    "
                >

                    <div
                        class="
                            w-11
                            h-11
                            rounded-xl
                            bg-blue-500/15
                            border
                            border-blue-400/20
                            flex
                            items-center
                            justify-center
                            text-blue-400
                            font-bold
                            text-lg
                        "
                    >
                        &lt;/&gt;
                    </div>

                    <div>

                        <p
                            class="
                                text-sm
                                font-bold
                                text-white
                            "
                        >
                            Web Development
                        </p>

                        <p
                            class="
                                text-[10px]
                                text-slate-400
                                mt-1
                            "
                        >
                            Modern & Scalable
                        </p>

                    </div>

                </div>

            </div>


            <!-- CENTER CODE -->

            <div
                data-aos="zoom-in"
                data-aos-delay="400"
                class="
                    absolute
                    left-1/2
                    -translate-x-1/2
                    top-7
                    glass-card
                    rounded-2xl
                    px-6
                    py-4
                    w-72
                    border-blue-400/20
                    blue-glow
                "
            >

                <!-- CODE HEADER -->

                <div
                    class="
                        flex
                        items-center
                        gap-2
                        mb-3
                    "
                >

                    <span
                        class="
                            w-2
                            h-2
                            rounded-full
                            bg-red-400
                        "
                    ></span>

                    <span
                        class="
                            w-2
                            h-2
                            rounded-full
                            bg-yellow-400
                        "
                    ></span>

                    <span
                        class="
                            w-2
                            h-2
                            rounded-full
                            bg-green-400
                        "
                    ></span>

                    <span
                        class="
                            ml-2
                            text-[9px]
                            text-slate-500
                        "
                    >
                        digital-solution.js
                    </span>

                </div>


                <!-- CODE -->

                <div
                    class="
                        font-mono
                        text-[10px]
                        text-left
                        leading-5
                    "
                >

                    <span class="text-indigo-400">
                        const
                    </span>

                    <span class="text-blue-300">
                        solution
                    </span>

                    <span class="text-slate-500">
                        =
                    </span>

                    <span class="text-emerald-400">
                        "innovation"
                    </span>

                    <span class="text-slate-500">
                        ;
                    </span>

                    <br>

                    <span class="text-indigo-400">
                        return
                    </span>

                    <span class="text-blue-300">
                        success
                    </span>

                    <span class="text-slate-500">
                        ();
                    </span>

                </div>

            </div>


            <!-- RIGHT CARD -->

            <div
                data-aos="fade-left"
                data-aos-delay="300"
                class="
                    absolute
                    right-0
                    top-3
                    glass-card
                    rounded-2xl
                    px-5
                    py-4
                    w-60
                    animate-float
                "
                style="animation-delay: 1.5s;"
            >

                <div
                    class="
                        flex
                        items-center
                        gap-3
                    "
                >

                    <div
                        class="
                            w-11
                            h-11
                            rounded-xl
                            bg-indigo-500/15
                            border
                            border-indigo-400/20
                            flex
                            items-center
                            justify-center
                            text-indigo-400
                            font-bold
                            text-lg
                        "
                    >
                        ✦
                    </div>

                    <div>

                        <p
                            class="
                                text-sm
                                font-bold
                                text-white
                            "
                        >
                            Digital Solution
                        </p>

                        <p
                            class="
                                text-[10px]
                                text-slate-400
                                mt-1
                            "
                        >
                            Creative & Innovative
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- SCROLL INDICATOR -->

        <div
            data-aos="fade-up"
            data-aos-delay="600"
            class="
                mt-4
                flex
                flex-col
                items-center
                text-slate-500
            "
        >

            <span
                class="
                    text-[9px]
                    uppercase
                    tracking-[0.3em]
                "
            >
                Kenali Kami Lebih Dekat
            </span>

            <div
                class="
                    mt-2
                    w-6
                    h-9
                    rounded-full
                    border
                    border-white/20
                    flex
                    justify-center
                    pt-2
                "
            >

                <div
                    class="
                        w-1
                        h-2
                        rounded-full
                        bg-blue-400
                        animate-bounce
                    "
                ></div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     ABOUT CONTENT
===================================================== -->

<section
    id="about"
    class="
        relative
        bg-slate-950
        py-24
        overflow-hidden
    "
>

    <div
        class="
            absolute
            bottom-0
            left-0
            w-[400px]
            h-[400px]
            bg-blue-600/10
            rounded-full
            blur-[130px]
        "
    ></div>


    <div
        class="
            relative
            z-10
            max-w-7xl
            mx-auto
            px-6 md:px-12
        "
    >

        <div
            class="
                grid
                grid-cols-1
                lg:grid-cols-2
                gap-14
                items-center
            "
        >

            <!-- IMAGE -->

            <div
                data-aos="fade-right"
                class="relative"
            >

                <div
                    class="
                        absolute
                        -inset-4
                        rounded-[2rem]
                        bg-gradient-to-r
                        from-blue-600/30
                        to-indigo-600/20
                        blur-2xl
                    "
                ></div>


                @php
                    $imageSrc = !empty($about?->about_image)
                        ? asset('storage/' . $about->about_image)
                        : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1000&q=85';
                @endphp


                <div
                    class="
                        relative
                        overflow-hidden
                        rounded-[2rem]
                        p-2
                        bg-white/5
                        border
                        border-white/10
                        blue-glow
                    "
                >

                    <img
                        src="{{ $imageSrc }}"
                        alt="Tentang Kami"
                        class="
                            w-full
                            h-[360px]
                            md:h-[470px]
                            object-cover
                            rounded-[1.5rem]
                        "
                    >


                    <div
                        class="
                            absolute
                            inset-2
                            rounded-[1.5rem]
                            bg-gradient-to-t
                            from-slate-950/70
                            via-transparent
                            to-transparent
                        "
                    ></div>


                    <!-- FLOATING BADGE -->

                    <div
                        class="
                            absolute
                            bottom-7
                            left-7
                            glass-card
                            rounded-2xl
                            px-5
                            py-4
                            animate-float
                        "
                    >

                        <div
                            class="
                                text-blue-400
                                text-2xl
                                font-black
                            "
                        >
                            ✦
                        </div>

                        <p
                            class="
                                text-xs
                                text-slate-300
                                mt-1
                            "
                        >
                            Solusi digital
                            terpercaya
                        </p>

                    </div>

                </div>

            </div>


            <!-- CONTENT -->

            <div
                data-aos="fade-left"
                class="space-y-6"
            >

                <span
                    class="
                        inline-flex
                        rounded-full
                        bg-blue-500/10
                        border
                        border-blue-400/20
                        px-4
                        py-2
                        text-[11px]
                        font-bold
                        uppercase
                        tracking-widest
                        text-blue-400
                    "
                >
                    Tentang Perusahaan
                </span>


                <h2
                    class="
                        text-3xl
                        md:text-5xl
                        font-black
                        leading-tight
                    "
                >

                    {{ $about?->about_title
                        ?? $setting?->about_title
                        ?? 'Membangun Solusi Digital yang Berdampak'
                    }}

                </h2>


                <div
                    class="
                        text-slate-400
                        leading-8
                        text-sm md:text-base
                    "
                >

                    {!! $about?->about_desc
                        ?? $about?->description
                        ?? $setting?->about_description
                        ?? 'Kami adalah penyedia layanan solusi digital profesional yang siap membantu memajukan bisnis Anda.'
                    !!}

                </div>


                <!-- FEATURES -->

                <div
                    class="
                        grid
                        grid-cols-1
                        sm:grid-cols-2
                        gap-4
                        pt-4
                    "
                >

                    <div
                        class="
                            glass-light
                            rounded-2xl
                            p-5
                            hover:bg-white/10
                            hover:-translate-y-1
                            transition
                        "
                    >

                        <div
                            class="
                                w-10 h-10
                                rounded-xl
                                bg-blue-500/15
                                text-blue-400
                                flex
                                items-center
                                justify-center
                                mb-4
                            "
                        >
                            ✓
                        </div>

                        <h3
                            class="
                                font-bold
                                text-white
                            "
                        >
                            Layanan Profesional
                        </h3>

                        <p
                            class="
                                text-xs
                                text-slate-400
                                mt-2
                                leading-5
                            "
                        >
                            Memberikan solusi digital
                            yang sesuai dengan kebutuhan.
                        </p>

                    </div>


                    <div
                        class="
                            glass-light
                            rounded-2xl
                            p-5
                            hover:bg-white/10
                            hover:-translate-y-1
                            transition
                        "
                    >

                        <div
                            class="
                                w-10 h-10
                                rounded-xl
                                bg-indigo-500/15
                                text-indigo-400
                                flex
                                items-center
                                justify-center
                                mb-4
                            "
                        >
                            ★
                        </div>

                        <h3
                            class="
                                font-bold
                                text-white
                            "
                        >
                            Tim Terpercaya
                        </h3>

                        <p
                            class="
                                text-xs
                                text-slate-400
                                mt-2
                                leading-5
                            "
                        >
                            Dikerjakan dengan
                            profesional dan penuh tanggung jawab.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     STATS
===================================================== -->

<section
    class="
        relative
        bg-slate-900/70
        border-y
        border-white/5
        py-24
        overflow-hidden
    "
>

    <div
        class="
            absolute
            top-0
            left-1/2
            -translate-x-1/2
            w-[600px]
            h-[300px]
            bg-blue-600/10
            blur-[120px]
            rounded-full
        "
    ></div>


    <div
        class="
            relative
            z-10
            max-w-7xl
            mx-auto
            px-6 md:px-12
        "
    >

        <div
            data-aos="fade-up"
            class="
                max-w-2xl
                mx-auto
                text-center
            "
        >

            <span
                class="
                    inline-flex
                    rounded-full
                    bg-blue-500/10
                    border
                    border-blue-400/20
                    px-4
                    py-2
                    text-[11px]
                    font-bold
                    uppercase
                    tracking-widest
                    text-blue-400
                "
            >
                Pencapaian Kami
            </span>


            <h2
                class="
                    mt-5
                    text-3xl
                    md:text-4xl
                    font-black
                "
            >
                Mengapa Memilih Kami?
            </h2>


            <p
                class="
                    mt-4
                    text-sm
                    leading-6
                    text-slate-400
                "
            >
                Komitmen kami tercermin dari pengalaman,
                hasil, dan kepercayaan yang telah diberikan
                oleh berbagai klien.
            </p>

        </div>


        <!-- STAT CARDS -->

        <div
            class="
                mt-14
                grid
                grid-cols-1
                md:grid-cols-3
                gap-6
            "
        >

            <!-- =================================================
                 PERHITUNGAN TAHUN PENGALAMAN
            ================================================== -->

            @php
                $years = !empty($about?->about_date_founded)
                    ? (int) round(
                        \Carbon\Carbon::parse($about->about_date_founded)
                            ->diffInYears(now())
                    )
                    : null;
            @endphp


            <!-- EXPERIENCE -->

            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="
                    glass-card
                    rounded-3xl
                    p-8
                    text-center
                    hover:-translate-y-2
                    transition-all
                    duration-300
                    blue-glow
                "
            >

                <div
                    class="
                        text-5xl
                        font-black
                        text-blue-400
                    "
                >
                    {{ $years ? $years . '+' : '5+' }}
                </div>


                <h3
                    class="
                        mt-4
                        text-base
                        font-bold
                        text-white
                    "
                >
                    Tahun Pengalaman
                </h3>


                <p
                    class="
                        mt-2
                        text-xs
                        text-slate-400
                        leading-5
                    "
                >
                    Berdedikasi memberikan
                    hasil terbaik bagi setiap klien.
                </p>

            </div>


            <!-- PROJECT -->

            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="
                    glass-card
                    rounded-3xl
                    p-8
                    text-center
                    hover:-translate-y-2
                    transition-all
                    duration-300
                "
            >

                <div
                    class="
                        text-5xl
                        font-black
                        text-indigo-400
                    "
                >
                    100+
                </div>


                <h3
                    class="
                        mt-4
                        text-base
                        font-bold
                        text-white
                    "
                >
                    Proyek Selesai
                </h3>


                <p
                    class="
                        mt-2
                        text-xs
                        text-slate-400
                        leading-5
                    "
                >
                    Berbagai jenis proyek
                    digital berhasil direalisasikan.
                </p>

            </div>


            <!-- QUALITY -->

            <div
                data-aos="fade-up"
                data-aos-delay="300"
                class="
                    glass-card
                    rounded-3xl
                    p-8
                    text-center
                    hover:-translate-y-2
                    transition-all
                    duration-300
                "
            >

                <div
                    class="
                        text-5xl
                        font-black
                        text-emerald-400
                    "
                >
                    100%
                </div>


                <h3
                    class="
                        mt-4
                        text-base
                        font-bold
                        text-white
                    "
                >
                    Komitmen Kualitas
                </h3>


                <p
                    class="
                        mt-2
                        text-xs
                        text-slate-400
                        leading-5
                    "
                >
                    Prioritas utama kami adalah
                    kepuasan dan kepercayaan Anda.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     CTA
===================================================== -->

<section
    class="
        relative
        bg-slate-950
        py-24
        overflow-hidden
    "
>

    <div
        class="
            absolute
            inset-0
            bg-gradient-to-r
            from-blue-600/10
            via-indigo-600/10
            to-transparent
        "
    ></div>


    <div
        data-aos="zoom-in"
        class="
            relative
            z-10
            max-w-5xl
            mx-auto
            px-6
            text-center
        "
    >

        <div
            class="
                glass-card
                rounded-[2rem]
                p-10 md:p-14
                blue-glow
            "
        >

            <span
                class="
                    text-blue-400
                    text-3xl
                "
            >
                ✦
            </span>


            <h2
                class="
                    mt-4
                    text-3xl
                    md:text-4xl
                    font-black
                "
            >
                Siap Membangun Sesuatu

                <span class="text-blue-400">
                    Bersama Kami?
                </span>

            </h2>


            <p
                class="
                    mt-4
                    max-w-2xl
                    mx-auto
                    text-slate-400
                    text-sm
                    md:text-base
                    leading-7
                "
            >
                Mari diskusikan kebutuhan digital Anda
                dan temukan solusi terbaik untuk bisnis Anda.
            </p>


            <div
                class="
                    mt-8
                    flex
                    flex-wrap
                    justify-center
                    gap-4
                "
            >

                <a
                    href="{{ route('contact') }}"
                    class="
                        bg-blue-600
                        hover:bg-blue-500
                        text-white
                        font-bold
                        px-7
                        py-3.5
                        rounded-xl
                        transition
                        hover:scale-105
                        shadow-lg
                        shadow-blue-600/30
                    "
                >
                    Hubungi Kami
                </a>


                <a
                    href="{{ route('portfolio') }}"
                    class="
                        bg-white/5
                        hover:bg-white/10
                        border
                        border-white/10
                        text-white
                        font-bold
                        px-7
                        py-3.5
                        rounded-xl
                        transition
                    "
                >
                    Lihat Portfolio
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer
    class="
        bg-slate-900
        text-slate-400
        py-8
        px-6
        border-t
        border-white/5
    "
>

    <div
        class="
            max-w-7xl
            mx-auto
            flex
            flex-col
            md:flex-row
            justify-between
            items-center
            gap-4
            text-xs
        "
    >

        <p>

            &copy; {{ date('Y') }}

            {{ $setting?->company_name ?? 'Company Profile' }}.

            All rights reserved.

        </p>


        <div
            class="
                flex
                flex-wrap
                justify-center
                items-center
                gap-6
            "
        >

            <a
                href="{{ route('home') }}"
                class="hover:text-blue-400 transition"
            >
                Home
            </a>


            <a
                href="{{ route('about') }}"
                class="text-blue-400 font-bold"
            >
                Tentang Kami
            </a>


            <a
                href="{{ route('services') }}"
                class="hover:text-blue-400 transition"
            >
                Layanan
            </a>


            <a
                href="{{ route('portfolio') }}"
                class="hover:text-blue-400 transition"
            >
                Portfolio
            </a>


            <a
                href="{{ route('contact') }}"
                class="hover:text-blue-400 transition"
            >
                Kontak
            </a>

        </div>

    </div>

</footer>



<!-- =====================================================
     AOS
===================================================== -->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 80
    });
</script>


</body>

</html>