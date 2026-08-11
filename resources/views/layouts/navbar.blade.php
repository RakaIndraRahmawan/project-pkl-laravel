@section('navbar')
    <nav class="bg-white shadow-md fixed w-full z-10 top-0 left-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <a href="#" class="font-bold text-xl text-blue-600">CompanyProfile</a>
            <div class="space-x-6 hidden md:flex">
                <a href="{{ route('home') }}#hero" class="hover:text-blue-600">Home</a>
                <a href="{{ route('home') }}#about" class="hover:text-blue-600">Tentang Kami</a>
                <a href="{{ route('home') }}#services" class="hover:text-blue-600">Layanan & Portofolio</a>
                <a href="{{ route('home') }}#contact" class="hover:text-blue-600">Kontak</a>
            </div>
            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-blue-600">Login Admin</a>
        </div>
    </nav>
@endsection