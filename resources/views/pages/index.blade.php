<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Service & Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Service & Portfolio</h1>
            <a href="{{ route('admin.pages.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Data</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-50 text-left">
                    <th class="p-3 border">Gambar</th>
                    <th class="p-3 border">Judul</th>
                    <th class="p-3 border">Deskripsi Ringkas</th>
                    <th class="p-3 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                    <tr class="border-b">
                        <td class="p-3 border w-24">
                            @if($page->image)
                                <img src="{{ asset('storage/' . $page->image) }}" class="h-16 w-16 object-cover rounded">
                            @else
                                <span class="text-xs text-gray-400">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="p-3 border font-semibold">{{ $page->title }}</td>
                        <td class="p-3 border text-sm text-gray-600">{{ Str::limit($page->desc, 60) }}</td>
                        <td class="p-3 border text-center space-x-2">
                            <a href="{{ route('admin.pages.edit', $page->id) }}" class="text-blue-600 font-semibold hover:underline">Edit</a>
                            <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-semibold hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-4 text-center text-gray-500">Belum ada data Service atau Portfolio.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $pages->links() }}
        </div>
    </div>
</body>
</html>