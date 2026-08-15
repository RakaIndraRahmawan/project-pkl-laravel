<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->company_name ?? 'Company Profile' }}</title>
    
    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }

        /* Smooth Gradient Background Hero */
        .hero-gradient {
            background: linear-gradient(115deg, #2563eb 0%, #3b82f6 35%, #4f46e5 70%, #6366f1 100%);
        }

        /* Glassmorphism Badge */
        .glass-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        /* Glassmorphism Button */
        .btn-glass {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.28);
        }

        /* Floating Badge Design */
        .floating-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased" x-data="{ mobileMenuOpen: false }">

    <!-- 1. NAVBAR -->
    <header class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto py-4 px-6 md:px-12 flex justify-between items-center">
            
            <!-- Logo -->
            <a href="#home" class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-blue-600 text-white font-extrabold text-sm flex items-center justify-center shadow-md shadow-blue-500/20">
                    CP
                </div>
                <span class="text-xl font-extrabold tracking-tight text-blue-600">CompanyProfile</span>
            </a>
            
            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-10 text-sm font-medium text-slate-600">
                <a href="#home" class="hover:text-blue-600 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600 transition">Tentang Kami</a>
                <a href="#services" class="hover:text-blue-600 transition">Layanan & Portofolio</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-600 transition">Kontak</a>
            </div>

            <!-- Login Admin -->
            <div class="hidden md:block">
                <a href="{{ route('login') }}" class="text-xs font-bold text-blue-600 bg-blue-50/80 hover:bg-blue-100 border border-blue-100 px-5 py-2.5 rounded-full transition">
                    Login Admin
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg text-slate-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </nav>

        <!-- Menu Mobile -->
        <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false" class="md:hidden bg-white border-b border-slate-200 px-6 py-4 space-y-3">
            <a href="#home" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Home</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Tentang Kami</a>
            <a href="#services" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Layanan & Portofolio</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Kontak</a>
            <div class="pt-2 border-t border-slate-100">
                <a href="{{ route('login') }}" class="block text-center text-xs font-bold text-blue-600 bg-blue-50 py-2.5 rounded-full border border-blue-100">
                    Login Admin
                </a>
            </div>
        </div>
    </header>

    <section id="about" class="w-full py-20 px-6 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto space-y-12">
            <div class="text-center space-y-3 text-slate-800 text-3xl font-extrabold">
                <h2>Tentang Kami</h2>
            </div>
            <div class="relative">
                <img 
                    src="{{ isset($about->about_image) ? asset('storage/' . $about->about_image) : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80' }}" 
                    alt="Tentang Kami" 
                    class="rounded-3xl shadow-lg w-full object-cover h-80 md:h-[380px] border border-slate-100"
                />
            </div>
            <div class="space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 px-3.5 py-1.5 rounded-full">Tentang Perusahaan</span>
                <h2 class="text-3xl font-extrabold text-slate-900 leading-snug">
                    {{ optional($about ?? null)->about_title ?? $setting->about_title ?? 'Mengenal Lebih Dekat Perusahaan Kami' }}
                </h2>
                <div class="text-slate-600 leading-relaxed text-sm">
                    {!! optional($about ?? null)->about_desc ?? optional($about ?? null)->description ?? $setting->about_description ?? 'Kami adalah penyedia layanan solusi digital...' !!}
                </div>
            </div>

            <!-- <div class="text-center space-y-3 text-slate-800 text-3xl font-extrabold">
                <h2>Mengapa Memilih Kami</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-lg transition">
                    @php
                        $years = optional($about)->about_date_founded 
                            ? \Carbon\Carbon::parse($about->about_date_founded)->diffInYears(now()) 
                            : null;
                    @endphp
                    <div class="text-slate-900 mb-4 text-4xl font-extrabold">
                        {{ $years ? $years . ' tahun' : '-' }}
                    </div>
                    <h3 class="text-lg font-semibold text-slate-800 mb-2">Pengalaman</h3>
                </div>
            </div> -->
    </section>

    <!-- FOOTER -->
    <footer class="w-full bg-slate-900 text-slate-400 py-6 text-center text-xs">
        <p>&copy; {{ date('Y') }} {{ $setting->company_name ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>
</body>