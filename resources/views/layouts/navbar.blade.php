
    <header class="site-header fixed top-0 left-0 w-full z-50">

        <nav class="max-w-7xl mx-auto py-4 px-6 md:px-12 flex justify-between items-center">

            <!-- Logo -->
            <a
                href="{{ route('home') }}"
                class="flex items-center gap-2.5 group"
            >
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 text-white font-extrabold text-sm flex items-center justify-center shadow-md shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                    CP
                </div>

                <span class="text-xl font-extrabold tracking-tight text-white">
                    {{ $setting->company_name ?? 'Company Profile' }}
                </span>
            </a>


            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-10 text-sm font-semibold text-slate-300">

                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Tentang Kami
                </a>

                <a
                    href="{{ route('services') }}"
                    class="{{ request()->routeIs('services') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Layanan
                </a>

                <!-- PORTFOLIO -->
                <a
                    href="{{ route('portfolio') }}"
                    class="{{ request()->routeIs('portfolio') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Portfolio
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'text-blue-400 font-bold' : 'hover:text-blue-400' }} transition-colors"
                >
                    Kontak
                </a>

            </div>


            <!-- Login Admin -->
            <div class="hidden md:block">

                <a
                    href="{{ Route::has('login') ? route('login') : '#' }}"
                    class="text-xs font-bold text-white bg-white/10 hover:bg-white/20 border border-white/20 px-5 py-2.5 rounded-full transition hover:scale-105 backdrop-blur-md inline-block"
                >
                    Login Admin
                </a>

            </div>


            <!-- Mobile Hamburger -->
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden p-2 rounded-lg text-white hover:text-blue-400 focus:outline-none"
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
                    ></path>

                    <path
                        x-show="mobileMenuOpen"
                        x-cloak
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    ></path>

                </svg>

            </button>

        </nav>


        <!-- Menu Mobile -->
        <div
            x-show="mobileMenuOpen"
            x-cloak
            @click.away="mobileMenuOpen = false"
            class="md:hidden bg-slate-900 border-b border-slate-800 px-6 py-4 space-y-3"
        >

            <a
                href="{{ route('home') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Tentang Kami
            </a>

            <a
                href="{{ route('services') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Layanan
            </a>

            <!-- PORTFOLIO MOBILE -->
            <a
                href="{{ route('portfolio') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Portfolio
            </a>

            <a
                href="{{ route('contact') }}"
                class="block text-slate-200 hover:text-blue-400 font-medium text-sm py-1"
            >
                Kontak
            </a>

            <div class="pt-2 border-t border-slate-800">

                <a
                    href="{{ Route::has('login') ? route('login') : '#' }}"
                    class="block text-center text-xs font-bold text-white bg-blue-600 py-2.5 rounded-xl"
                >
                    Login Admin
                </a>

            </div>

        </div>

    </header>
