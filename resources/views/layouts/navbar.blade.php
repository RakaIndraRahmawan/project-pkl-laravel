@section('navbar')
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
@endsection