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
        <h1 class="text-2xl font-bold text-gray-800 mt-2">Edit Page: {{ $page->title }}</h1>
        <p class="text-gray-500 mt-1">Perbarui konten halaman service atau portfolio.</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 bg-gradient-to-r from-indigo-50 to-purple-50 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Form Edit Page
            </h2>
        </div>
        <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title', $page->title) }}"
                       class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('title') border-red-400 @enderror"
                       placeholder="Masukkan judul halaman" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                @if($page->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $page->image) }}"
                             alt="{{ $page->title }}"
                             class="h-32 w-auto rounded-lg border border-gray-200 object-cover">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                       class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 @error('image') border-red-400 @enderror">
                <p class="mt-1 text-xs text-gray-400">Format: jpg, jpeg, png. Maks: 2MB. Kosongkan jika tidak ingin mengubah.</p>
                @error('image')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="desc" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="desc" id="desc" rows="4"
                          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('desc') border-red-400 @enderror"
                          placeholder="Deskripsi singkat halaman (akan tampil di landing page)">{{ old('desc', $page->desc) }}</textarea>
                @error('desc')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="text" class="block text-sm font-medium text-gray-700 mb-1">Konten Lengkap</label>
                <textarea name="text" id="text" rows="8"
                          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('text') border-red-400 @enderror"
                          placeholder="Konten lengkap halaman (akan tampil di halaman detail)">{{ old('text', $page->text) }}</textarea>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                    </svg>
                    Update Page
                </button>
            </div>
        </form>
    </div>
@endsection

