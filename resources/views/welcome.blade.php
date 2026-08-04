<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $homepage->hero_title ?? 'Company Profile' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow-md fixed w-full z-10 top-0 left-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
            <a href="#" class="font-bold text-xl text-blue-600">CompanyProfile</a>
            <div class="space-x-6 hidden md:flex">
                <a href="#hero" class="hover:text-blue-600">Dashboard</a>
                <a href="#about" class="hover:text-blue-600">Tentang Kami</a>
                <a href="#services" class="hover:text-blue-600">Layanan & Portofolio</a>
                <a href="#contact" class="hover:text-blue-600">Kontak</a>
            </div>
            <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-blue-600">Login Admin</a>
        </div>
    </nav>

    <section id="hero" class="pt-28 pb-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white min-h-[80vh] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
                    {{ $homepage->hero_title ?? 'Selamat Datang di Perusahaan Kami' }}
                </h1>
                <p class="text-lg mb-8 text-blue-100">
                    {{ $homepage->hero_subtitle ?? 'Kami memberikan solusi inovatif dan terbaik untuk bisnis Anda.' }}
                </p>
                <div class="space-x-4">
                    <a href="#contact" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-bold shadow hover:bg-gray-100 transition">Hubungi Kami</a>
                    <a href="#services" class="bg-blue-800 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-900 transition">Lihat Layanan</a>
                </div>
            </div>
            <div class="text-center">
                @if(!empty($homepage->hero_image))
                    <img src="{{ asset('storage/' . $homepage->hero_image) }}" alt="Hero Image" class="rounded-lg shadow-2xl mx-auto max-h-96">
                @else
                    <div class="bg-blue-500/30 rounded-lg p-12 border-2 border-dashed border-white/50">
                        <p>Gambar Hero Belum Diunggah</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center">
            <div>
                @if(!empty($homepage->about_image))
                    <img src="{{ asset('storage/' . $homepage->about_image) }}" alt="About Image" class="rounded-lg shadow-lg mx-auto max-h-96">
                @else
                    <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                        <span class="text-gray-500">Gambar Tentang Kami</span>
                    </div>
                @endif
            </div>
            <div>
                <h2 class="text-3xl font-bold mb-4 text-gray-900">
                    {{ $homepage->about_title ?? 'Tentang Perusahaan Kami' }}
                </h2>
                <p class="text-gray-600 leading-relaxed whitespace-pre-line mb-6">
                    {{ $homepage->about_desc ?? 'Tuliskan deskripsi ringkas mengenai latar belakang, visi, serta komitmen perusahaan Anda di sini.' }}
                </p>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Layanan & Portofolio</h2>
                <p class="text-gray-600 mt-2">Daftar layanan unggulan dan proyek yang telah kami kerjakan.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @forelse($pages as $page)
                    <div class="bg-white rounded-xl shadow border overflow-hidden flex flex-col justify-between">
                        @if($page->image)
                            <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" class="h-48 w-full object-cover">
                        @else
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-400">Tidak ada gambar</span>
                            </div>
                        @endif
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2">{{ $page->title }}</h3>
                                <p class="text-gray-600 text-sm mb-4">
                                    {{ Str::limit($page->desc, 100) }}
                                </p>
                            </div>
                            <a href="{{ route('page.show', $page->slug) }}" class="text-blue-600 font-semibold hover:underline mt-auto">Baca Selengkapnya &rarr;</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500">Belum ada data Layanan atau Portofolio yang ditambahkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Hubungi Kami</h2>
                <p class="text-gray-600 mt-2">Jangan ragu untuk berkonsultasi atau bertanya mengenai layanan kami.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-blue-50 p-8 rounded-xl">
                    <h3 class="text-xl font-bold mb-6 text-gray-800">Informasi Kontak</h3>
                    <div class="space-y-4 text-gray-700">
                        <p><strong>Email:</strong> {{ $homepage->contact_email ?? 'info@company.com' }}</p>
                        <p><strong>Telepon/WA:</strong> {{ $homepage->contact_phone ?? '+62 812 3456 7890' }}</p>
                        <p><strong>Alamat:</strong> {{ $homepage->address ?? 'Jl. Contoh No. 123, Jakarta, Indonesia' }}</p>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-bold mb-3">Ikuti Kami:</h4>
                        <div class="flex space-x-4">
                            @if(!empty($homepage->facebook_url)) <a href="{{ $homepage->facebook_url }}" target="_blank" class="text-blue-600 hover:underline">Facebook</a> @endif
                            @if(!empty($homepage->instagram_url)) <a href="{{ $homepage->instagram_url }}" target="_blank" class="text-pink-600 hover:underline">Instagram</a> @endif
                            @if(!empty($homepage->twitter_url)) <a href="{{ $homepage->twitter_url }}" target="_blank" class="text-sky-500 hover:underline">Twitter/X</a> @endif
                        </div>
                    </div>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                        <input type="text" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Nama Anda" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="email@domain.com" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Pesan</label>
                        <textarea rows="4" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="Tuliskan pesan Anda..." required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-8 text-center text-sm">
        <p>&copy; {{ date('Y') }} {{ $homepage->hero_title ?? 'Company Profile' }}. All rights reserved.</p>
    </footer>

</body>
</html>

