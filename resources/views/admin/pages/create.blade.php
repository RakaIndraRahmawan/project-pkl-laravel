@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <div class="flex items-center space-x-3">
            <a href="{{ route('admin.pages.index') }}"
               class="inline-flex items-center px-3 py-1.5 text-sm text-gray-600 hover:text-gray-800 bg-gray-100 hover:bg-gray-200 rounded-lg transition duration-150">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mt-2">Tambah Page Baru</h1>
        <p class="text-gray-500 mt-1">Buat halaman service atau portfolio baru.</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 bg-gradient-to-r from-blue-50 to-indigo-50 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Form Tambah Page
            </h2>
        </div>
        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-5">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('title') border-red-400 @enderror"
                       placeholder="Masukkan judul halaman" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                <input type="file" name="image" id="image"
                       class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('image') border-red-400 @enderror">
                <p class="mt-1 text-xs text-gray-400">Format: jpg, jpeg, png. Maks: 2MB.</p>
                @error('image')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="desc" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="desc" id="desc" rows="4"
                          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('desc') border-red-400 @enderror"
                          placeholder="Deskripsi singkat halaman (akan tampil di landing page)">{{ old('desc') }}</textarea>
                @error('desc')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="text" class="block text-sm font-medium text-gray-700 mb-1">Konten Lengkap</label>
                <textarea name="text" id="text" rows="8"
                          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('text') border-red-400 @enderror"
                          placeholder="Konten lengkap halaman (akan tampil di halaman detail)">{{ old('text') }}</textarea>
                @error('text')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                <a href="{{ route('admin.pages.index') }}"
                   class="inline-flex items-center px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-lg transition duration-150">
                    Batal
                </a>
                <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-sm transition duration-150">
                    <svg class="w-5 h-5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Simpan Page
                </button>
            </div>
        </form>
    </div>
@endsection

