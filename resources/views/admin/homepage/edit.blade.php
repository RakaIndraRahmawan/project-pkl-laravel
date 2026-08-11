<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Settings - Admin Panel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">

    <div class="min-h-screen flex">
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between shrink-0 hidden md:flex">
            <div>
                <div class="h-20 flex items-center px-6 border-b border-slate-800">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center shadow-lg shadow-blue-500/30">
                            AP
                        </div>
                        <span class="font-heading font-extrabold text-white text-lg tracking-wide">Admin Panel</span>
                    </a>
                </div>

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

        <div class="flex-1 flex flex-col min-w-0">
            <header class="bg-white border-b border-slate-200 h-20 px-6 md:px-10 flex items-center justify-between sticky top-0 z-10 shadow-sm">
                <div class="flex items-center gap-4">
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-slate-900">Homepage Settings</h1>
                        <p class="text-xs text-slate-500">Kelola konten halaman utama company profile.</p>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-100 border border-blue-200 px-4 py-2.5 rounded-xl transition">
                        <span>Lihat Website Utama</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </header>

            <main class="p-6 md:p-10 max-w-5xl space-y-6">
                <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <section class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                        <div class="bg-slate-50 px-6 py-4 border-b border-slate-200/80 flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <h2 class="text-base font-bold text-slate-800">Hero Section</h2>
                        </div>

                        <div class="p-6 md:p-8 space-y-6">
                            <div>
                                <label for="hero_title" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Hero Title</label>
                                <input type="text" name="hero_title" id="hero_title" value="{{ old('hero_title', $homepage->hero_title) }}" placeholder="Masukkan judul hero" class="w-full px-4 py-3 rounded-xl border @error('hero_title') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                @error('hero_title')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hero_subtitle" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Hero Subtitle</label>
                                <textarea name="hero_subtitle" id="hero_subtitle" rows="3" placeholder="Masukkan subtitle hero" class="w-full px-4 py-3 rounded-xl border @error('hero_subtitle') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">{{ old('hero_subtitle', $homepage->hero_subtitle) }}</textarea>
                                @error('hero_subtitle')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Hero Image</label>
                                @if($homepage->hero_image)
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $homepage->hero_image) }}" alt="Hero Image" class="h-44 w-full rounded-2xl border border-slate-200 object-cover shadow-sm">
                                    </div>
                                @endif
                                <div class="flex flex-col items-center justify-center border-2 border-dashed border-slate-200 hover:border-blue-500 rounded-2xl p-6 bg-slate-50/50 transition cursor-pointer relative group">
                                    <input type="file" name="hero_image" id="hero_image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="p-3 bg-blue-50 text-blue-600 rounded-xl mb-3 group-hover:scale-110 transition">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <p class="text-xs font-bold text-slate-700">Pilih file atau seret ke sini</p>
                                    <p class="text-[11px] text-slate-400 mt-1">PNG, JPG, WEBP hingga 2MB</p>
                                </div>
                                @error('hero_image')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                        <div class="bg-slate-50 px-6 py-4 border-b border-slate-200/80 flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h2 class="text-base font-bold text-slate-800">About Section</h2>
                        </div>

                        <div class="p-6 md:p-8 space-y-6">
                            <div>
                                <label for="about_title" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">About Title</label>
                                <input type="text" name="about_title" id="about_title" value="{{ old('about_title', $homepage->about_title) }}" placeholder="Masukkan judul about" class="w-full px-4 py-3 rounded-xl border @error('about_title') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                @error('about_title')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="about_desc" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">About Description</label>
                                <textarea name="about_desc" id="about_desc" rows="5" placeholder="Masukkan deskripsi about" class="w-full px-4 py-3 rounded-xl border @error('about_desc') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">{{ old('about_desc', $homepage->about_desc) }}</textarea>
                                @error('about_desc')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">About Image</label>
                                @if($homepage->about_image)
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $homepage->about_image) }}" alt="About Image" class="h-44 w-full rounded-2xl border border-slate-200 object-cover shadow-sm">
                                    </div>
                                @endif
                                <div class="flex flex-col items-center justify-center border-2 border-dashed border-slate-200 hover:border-blue-500 rounded-2xl p-6 bg-slate-50/50 transition cursor-pointer relative group">
                                    <input type="file" name="about_image" id="about_image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl mb-3 group-hover:scale-110 transition">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <p class="text-xs font-bold text-slate-700">Pilih file atau seret ke sini</p>
                                    <p class="text-[11px] text-slate-400 mt-1">PNG, JPG, WEBP hingga 2MB</p>
                                </div>
                                @error('about_image')
                                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </section>

                    <section class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                        <div class="bg-slate-50 px-6 py-4 border-b border-slate-200/80 flex items-center gap-2.5">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <h2 class="text-base font-bold text-slate-800">Contact & Social Media</h2>
                        </div>

                        <div class="p-6 md:p-8 space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label for="contact_email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email</label>
                                    <input type="email" name="contact_email" id="contact_email" value="{{ old('contact_email', $homepage->contact_email) }}" placeholder="admin@example.com" class="w-full px-4 py-3 rounded-xl border @error('contact_email') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                    @error('contact_email')
                                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="contact_phone" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Phone</label>
                                    <input type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone', $homepage->contact_phone) }}" placeholder="+62 812-3456-7890" class="w-full px-4 py-3 rounded-xl border @error('contact_phone') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                    @error('contact_phone')
                                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="md:col-span-2">
                                    <label for="address" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Address</label>
                                    <textarea name="address" id="address" rows="2" placeholder="Alamat lengkap perusahaan" class="w-full px-4 py-3 rounded-xl border @error('address') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">{{ old('address', $homepage->address) }}</textarea>
                                    @error('address')
                                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="border-t border-slate-200 pt-4">
                                <p class="text-xs font-bold uppercase tracking-wider text-slate-500 mb-3">Social Media Links</p>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div>
                                        <label for="facebook_url" class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1">Facebook URL</label>
                                        <input type="url" name="facebook_url" id="facebook_url" value="{{ old('facebook_url', $homepage->facebook_url) }}" placeholder="https://facebook.com/..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                    </div>
                                    <div>
                                        <label for="instagram_url" class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1">Instagram URL</label>
                                        <input type="url" name="instagram_url" id="instagram_url" value="{{ old('instagram_url', $homepage->instagram_url) }}" placeholder="https://instagram.com/..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                    </div>
                                    <div>
                                        <label for="twitter_url" class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1">Twitter URL</label>
                                        <input type="url" name="twitter_url" id="twitter_url" value="{{ old('twitter_url', $homepage->twitter_url) }}" placeholder="https://twitter.com/..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="flex items-center justify-end gap-3 pt-2">
                        <a href="{{ route('admin.pages.index') }}" class="px-6 py-3.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-100 font-bold text-sm transition">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-xl shadow-md hover:shadow-lg transition duration-200 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Simpan Perubahan</span>
                        </button>
                    </div>
                </form>
            </main>

            <footer class="bg-white border-t border-slate-200 py-4 px-6 md:px-10 text-xs text-slate-400 text-center mt-auto">
                <p>&copy; {{ date('Y') }} Admin Panel Company Profile. All rights reserved.</p>
            </footer>
        </div>
    </div>
</body>
</html>

