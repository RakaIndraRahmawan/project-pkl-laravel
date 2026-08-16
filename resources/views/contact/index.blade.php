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

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
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
    
    <!-- 5. SECTION KONTAK -->
    <section id="contact" class="w-full py-20 px-16 md:px-12 bg-white border-t border-slate-100">
        <div class="text-center space-y-3 mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-blue-600 bg-blue-50 px-3.5 py-1.5 rounded-full">Hubungi Kami</span>
            <h2 class="text-3xl font-extrabold text-slate-900">Mari Berdiskusi Dengan Kami</h2>
            <p class="text-slate-600 text-sm">Punya pertanyaan atau berminat menjalin kerja sama? Kirimkan pesan Anda melalui form berikut.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch max-w-7xl mx-auto">
            <!-- Info Kontak Kiri -->
            <div class="md:col-span-5 bg-gradient-to-br from-blue-600 via-indigo-600 to-indigo-800 text-white rounded-3xl p-8 md:p-10 shadow-xl flex flex-col justify-between space-y-8 relative overflow-hidden">
                <div class="space-y-6 relative z-10">
                    <h3 class="text-2xl font-bold">Mari Terhubung</h3>
                    <p class="text-blue-100 text-sm leading-relaxed">Tim profesional kami selalu siap memberikan solusi teknis terbaik untuk kebutuhan bisnis Anda.</p>

                    <div class="space-y-5 text-sm">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">
                                <i class="fab fa-facebook-f text-white-200"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-blue-200 uppercase font-semibold">Facebook</p>
                                <a href="https://{{ ltrim($setting->contact_facebook ?? 'facebook.com', 'https://') }}" target="_blank" class="font-bold text-white hover:text-blue-200 transition">
                                    {{ $setting->contact_facebook ?? 'facebook.com' }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">
                                <i class="fab fa-instagram text-white-200"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-blue-200 uppercase font-semibold">Instagram</p>
                                <a href="https://{{ ltrim($setting->contact_instagram ?? 'instagram.com', 'https://') }}" target="_blank" class="font-bold text-white hover:text-blue-200 transition">
                                    {{ $setting->contact_instagram ?? 'instagram.com' }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">
                                <i class="fab fa-twitter text-white-200"></i>
                            </div>
                            <div>
                                <p class="text-[11px] text-blue-200 uppercase font-semibold">Twitter</p>
                                <a href="https://{{ ltrim($setting->contact_twitter ?? 'twitter.com', 'https://') }}" target="_blank" class="font-bold text-white hover:text-blue-200 transition">
                                    {{ $setting->contact_twitter ?? 'twitter.com' }}
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">✉</div>
                            <div>
                                <p class="text-[11px] text-blue-200 uppercase font-semibold">Email</p>
                                <p class="font-bold text-white">{{ $setting->contact_email ?? 'info@company.com' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center">📍</div>
                            <div>
                                <p class="text-[11px] text-blue-200 uppercase font-semibold">Alamat</p>
                                <p class="font-bold text-white">{{ $setting->contact_address ?? 'Jakarta, Indonesia' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @if(isset($setting->contact_phone))
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $setting->contact_phone) }}" target="_blank" class="w-full inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-white font-extrabold py-4 rounded-2xl transition shadow-lg text-sm relative z-10">
                        WhatsApp: {{ $setting->contact_phone }}
                    </a>
                @endif
            </div>

            <!-- Form Kontak Kanan -->
            <div class="md:col-span-7 bg-slate-50 p-8 md:p-10 rounded-3xl border border-slate-200/80 flex flex-col justify-center">
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" placeholder="Masukkan nama Anda" class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600/40 text-sm transition" required>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Email</label>
                        <input type="email" name="email" placeholder="email@domain.com" class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600/40 text-sm transition" required>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Pesan</label>
                        <textarea name="message" rows="4" placeholder="Tuliskan detail kebutuhan proyek Anda..." class="w-full px-4 py-3.5 rounded-xl bg-white border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-600/40 text-sm transition" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-600/20 transition text-sm">
                        Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="w-full bg-slate-900 text-slate-400 py-6 text-center text-xs">
        <p>&copy; {{ date('Y') }} {{ $setting->company_name ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>

</body>
</html>
