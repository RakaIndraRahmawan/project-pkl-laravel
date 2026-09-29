@php
    $active = 'bg-blue-600 text-white font-semibold shadow-md shadow-blue-600/20';
    $inactive = 'hover:bg-slate-800 hover:text-white';
@endphp

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

            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl {{ request()->routeIs('dashboard') ? $active : $inactive }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.homepage.edit') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl {{ request()->routeIs('admin.homepage.edit') ? $active : $inactive }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20.586 7.828a2 2 0 010 2.828L11.828 19.172a2 2 0 01-1.414.586H7v-3.414a2 2 0 01.586-1.414l8.586-8.586z"></path></svg>
                <span>Kelola Homepage</span>
            </a>

            <a href="{{ route('admin.pages.index') }}" class="flex items-center gap-3 px-3.5 py-3 rounded-xl {{ request()->routeIs('admin.pages.*') ? $active : $inactive }}">
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