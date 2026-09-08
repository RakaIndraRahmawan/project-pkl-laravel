    <footer class="w-full bg-slate-900 text-slate-400 py-8 px-6 border-t border-slate-800">

        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4 text-xs">

            <p>
                &copy; {{ date('Y') }}
                {{ $setting->company_name ?? 'Company Profile' }}.
                All rights reserved.
            </p>


            <div class="flex items-center space-x-6 text-slate-300">

                <a
                    href="{{ route('home') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Tentang Kami
                </a>

                <a
                    href="{{ route('services') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Layanan
                </a>

                <a
                    href="{{ route('portfolio') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Portfolio
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="hover:text-blue-400 transition-colors"
                >
                    Kontak
                </a>

            </div>

        </div>

    </footer>
