<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Baru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Tambah Service / Portfolio</h1>
            <a href="{{ route('admin.pages.index') }}" class="text-gray-600 hover:underline">&larr; Kembali</a>
        </div>

        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium mb-1">Judul</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-medium mb-1">Deskripsi Singkat</label>
                <textarea name="desc" rows="2" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500" required>{{ old('desc') }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-1">Konten Lengkap</label>
                <textarea name="text" rows="5" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500" required>{{ old('text') }}</textarea>
            </div>
            <div>
                <label class="block font-medium mb-1">Gambar Banner / Portofolio</label>
                <input type="file" name="image" class="w-full border p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded font-bold hover:bg-blue-700">Simpan Data</button>
        </form>
    </div>
</body>
</html>