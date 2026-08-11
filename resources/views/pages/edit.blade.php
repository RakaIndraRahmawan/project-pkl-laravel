<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Homepage - Admin Panel</title>

    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">

    <div class="min-h-screen flex">

        <!-- 1. SIDEBAR -->
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between shrink-0 hidden md:flex">
            <div>
                <!-- Brand / Logo -->
                <div class="h-20 flex items-center px-6 border-b border-slate-800">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center shadow-lg shadow-blue-500/30">
                            AP
                        </div>
                        <span class="font-heading font-extrabold text-white text-lg tracking-wide">Admin Panel</span>
                    </a>
                </div>

                <!-- Nav Links -->
                <nav class="p-4 space-y-1.5 text-sm font-medium">
                    <div class="text-[11px] font-bold uppercase tracking-wider text-slate-500 px-3 my-2">Menu Utama</div>

                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.homepage.edit') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl bg-blue-600 text-white font-semibold transition shadow-md shadow-blue-600/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20.586 7.828a2 2 0 010 2.828L11.828 19.172a2 2 0 01-1.414.586H7v-3.414a2 2 0 01.586-1.414l8.586-8.586z"></path></svg>
                        <span>Kelola Homepage</span>
                    </a>

                    <a href="{{ route('admin.pages.index') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl hover:bg-slate-800 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        <span>Kelola Pages / Service</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Button -->
            <div class="p-4 border-t border-slate-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-red-400 hover:bg-red-500/10 hover:text-red-300 transition text-sm font-semibold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- 2. MAIN CONTENT AREA -->
        <div class="flex-1 flex flex-col min-w-0">

            <!-- Top Header Navbar -->
            <header class="bg-white border-b border-slate-200 h-20 px-6 md:px-10 flex items-center justify-between sticky top-0 z-10 shadow-sm">
                <div>
                    <h1 class="text-xl md:text-2xl font-bold text-slate-900">Kelola Homepage</h1>
                    <p class="text-xs text-slate-500">Kelola konten halaman utama company profile</p>
                </div>

                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-100 border border-blue-200 px-4 py-2.5 rounded-xl transition">
                        <span>Lihat Website Utama</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </header>

            <!-- Main Body Wrapper -->
            <main class="p-6 md:p-10 max-w-5xl space-y-6">

                <!-- Alert Feedback (Success / Error) -->
                @if(session('success'))
                    <div class="p-4 text-sm text-emerald-800 bg-emerald-50 rounded-2xl border border-emerald-200 flex items-center gap-3">
                        <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <!-- CARD: HERO SECTION -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                        
                        <!-- Section Header -->
                        <div class="bg-slate-50 px-6 py-4 border-b border-slate-200/80 flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <h2 class="text-base font-bold text-slate-800">Hero Section</h2>
                        </div>

                        <!-- Form Body -->
                        <div class="p-6 md:p-8 space-y-6">
                            
                            <!-- Input Title -->
                            <div>
                                <label for="hero_title" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Hero Title</label>
                                <input type="text" 
                                       id="hero_title" 
                                       name="hero_title" 
                                       value="{{ old('hero_title', $setting->hero_title ?? '') }}" 
                                       placeholder="Masukkan judul hero..." 
                                       class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                @error('hero_title')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Input Subtitle -->
                            <div>
                                <label for="hero_subtitle" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Hero Subtitle</label>
                                <textarea id="hero_subtitle" 
                                          name="hero_subtitle" 
                                          rows="3" 
                                          placeholder="Masukkan subtitle hero..." 
                                          class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">{{ old('hero_subtitle', $setting->hero_subtitle ?? '') }}</textarea>
                                @error('hero_subtitle')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Input Image Upload & Preview -->
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Hero Image</label>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                                    <!-- Upload Field -->
                                    <div class="flex flex-col items-center justify-center border-2 border-dashed border-slate-200 hover:border-blue-500 rounded-2xl p-6 bg-slate-50/50 transition cursor-pointer relative group">
                                        <input type="file" name="hero_image" id="hero_image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                        <div class="p-3 bg-blue-50 text-blue-600 rounded-xl mb-3 group-hover:scale-110 transition">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 0115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        </div>
                                        <p class="text-xs font-bold text-slate-700">Pilih file atau seret ke sini</p>
                                        <p class="text-[11px] text-slate-400 mt-1">PNG, JPG, WEBP hingga 2MB</p>
                                    </div>

                                    <!-- Preview Gambar Terpasang -->
                                    <div>
                                        <p class="text-[11px] font-semibold text-slate-400 mb-2">Gambar Saat Ini:</p>
                                        <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-sm max-h-48 bg-slate-100">
                                            <img src="{{ isset($setting->hero_image) ? asset('storage/' . $setting->hero_image) : 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=800&q=80' }}" 
                                                 alt="Hero Image Preview" 
                                                 class="w-full h-44 object-cover">
                                        </div>
                                    </div>
                                </div>
                                @error('hero_image')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <div class="flex justify-end pt-2">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-xl shadow-md hover:shadow-lg transition duration-200 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Simpan Perubahan</span>
                        </button>
                    </div>

                </form>

            </main>

            <!-- FOOTER -->
            <footer class="bg-white border-t border-slate-200 py-4 px-6 md:px-10 text-xs text-slate-400 text-center mt-auto">
                <p>&copy; {{ date('Y') }} Admin Panel Company Profile. All rights reserved.</p>
            </footer>

        </div>

    </div>

</body>
</html>