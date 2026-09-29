<!-- Top Header Navbar -->
<header class="bg-white border-b border-slate-200 h-20 px-6 md:px-10 flex items-center justify-between sticky top-0 z-10 shadow-sm">
    <div>
        <h1 class="text-xl md:text-2xl font-bold text-slate-900">@yield('title', 'Dashboard')</h1>
        <p class="text-xs text-slate-500">
            @hasSection('subtitle')
                @yield('subtitle')
            @else
                Selamat Datang, <span class="font-semibold text-slate-800">{{ Auth::user()->name ?? 'Admin' }}</span>!
            @endif
        </p>
    </div>

    <div class="flex items-center gap-4">
        <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-100 border border-blue-200 px-4 py-2.5 rounded-xl transition">
            <span>Lihat Website Utama</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
        </a>
    </div>
</header>