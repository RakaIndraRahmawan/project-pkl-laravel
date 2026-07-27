<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="max-w-4xl mx-auto px-4 py-12">
        <a href="{{ route('home') }}" class="text-blue-600 font-semibold mb-6 inline-block">&larr; Kembali ke Beranda</a>

        <h1 class="text-4xl font-extrabold mb-4">{{ $page->title }}</h1>
        <p class="text-gray-500 italic mb-6">{{ $page->desc }}</p>

        @if($page->image)
            <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" class="w-full h-80 object-cover rounded-xl shadow mb-8">
        @endif

        <div class="prose max-w-none text-gray-700 leading-relaxed whitespace-pre-line">
            {!! $page->text !!}
        </div>
    </div>

</body>
</html>

