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
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600 transition">Tentang Kami</a>
                <a href="{{ route('services') }}" class="hover:text-blue-600 transition">Layanan</a>
                <a href="{{ route('portfolio') }}" class="hover:text-blue-600 transition">Portfolio</a>
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
            <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Home</a>
            <a href="{{ route('about') }}" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Tentang Kami</a>
            <a href="{{ route('services') }}" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Layanan</a>
            <a href="{{ route('portfolio') }}" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Portfolio</a>
            <a href="{{ route('contact') }}" @click="mobileMenuOpen = false" class="block text-slate-600 hover:text-blue-600 font-medium text-sm py-1">Kontak</a>
            <div class="pt-2 border-t border-slate-100">
                <a href="{{ route('login') }}" class="block text-center text-xs font-bold text-blue-600 bg-blue-50 py-2.5 rounded-full border border-blue-100">
                    Login Admin
                </a>
            </div>
        </div>
    </header>

    <section id="about" class="w-full pt-12 bg-white">
        <div class="max-w-7xl mx-auto space-y-12 mb-12">
            <div class="text-center space-y-3 text-slate-800 text-3xl font-extrabold">
                <h2>Portfolio</h2>
                <p class="text-slate-500 text-sm font-medium tracking-wide">Discover our range of professional portfolio projects. We provide high-quality solutions to meet your business needs.</p>
            </div>
        </div>
        <div class="w-full bg-slate-50 py-12 border-y border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($portfolios as $item)
                        <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 hover:shadow-md transition flex flex-col justify-between">
                            <div>
                                @if(!empty($item->image))
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover rounded-xl mb-4">
                                @endif
                                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $item->title }}</h3>
                                <p class="text-slate-600 text-sm line-clamp-3 mb-4">
                                    {{ Str::limit(strip_tags($item->content), 120) }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('page.show', $item->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700">
                                    <span>Baca Selengkapnya</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-12 bg-white rounded-2xl border border-dashed border-slate-300">
                            <p class="text-slate-500 text-sm">Belum ada data layanan yang ditambahkan.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="text-center py-16 px-4">
            <h3 class="text-lg font-medium text-slate-800 mb-2">Let’s build something great</h3>
            <p class="text-slate-500 text-sm font-medium tracking-wide mb-5">Have a project in mind? We’d love to hear about it.</p>
            <a href="{{ route('contact') }}" class="text-sm font-medium text-slate-900 underline underline-offset-4 hover:text-slate-600">
                Contact our team →
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-full bg-slate-900 text-slate-400 py-6 text-center text-xs">
        <p>&copy; {{ date('Y') }} {{ $setting->company_name ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>
</body>