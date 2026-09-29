@extends('layouts.admin-layout')

@section('title')
    Edit Page: {{ $page->title }}
@endsection
@section('subtitle', 'Perbarui konten halaman service atau portfolio')

@section('style')
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }
    </style>
@endsection

@section('content')
    <main class="p-6 md:p-10 max-w-5xl space-y-6">
        <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')

            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                <div class="bg-slate-50 px-6 py-4 border-b border-slate-200/80 flex items-center gap-2.5">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    <h2 class="text-base font-bold text-slate-800">Form Edit Page</h2>
                </div>

                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <label for="title" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Title <span class="text-red-500">*</span></label>
                        <input type="text"
                                id="title"
                                name="title"
                                value="{{ old('title', $page->title) }}"
                                required
                                placeholder="Masukkan judul halaman..."
                                class="w-full px-4 py-3 rounded-xl border @error('title') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Image</label>
                        @if($page->image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->title }}" class="h-32 w-auto rounded-xl border border-slate-200 object-cover shadow-sm">
                            </div>
                        @endif
                        <div class="flex flex-col items-center justify-center border-2 border-dashed border-slate-200 hover:border-blue-500 rounded-2xl p-6 bg-slate-50/50 transition cursor-pointer relative group">
                            <input type="file" name="image" id="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                            <div class="p-3 bg-blue-50 text-blue-600 rounded-xl mb-3 group-hover:scale-110 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <p class="text-xs font-bold text-slate-700">Pilih file gambar atau seret ke sini</p>
                            <p class="text-[11px] text-slate-400 mt-1">Format: JPG, JPEG, PNG. Maksimal 2MB</p>
                        </div>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="tag" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                            Tag <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select
                                id="tag"
                                name="tag"
                                required
                                class="appearance-none w-full px-4 py-3 rounded-xl border @error('tag') border-red-500 @else border-slate-200 @enderror focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition"
                            >
                                <option value="" disabled {{ old('tag') ? '' : 'selected' }}>
                                    Pilih tag halaman...
                                </option>

                                <option value="service" {{ old('tag') === 'service' ? 'selected' : '' }}>
                                    Service
                                </option>

                                <option value="portfolio" {{ old('tag') === 'portfolio' ? 'selected' : '' }}>
                                    Portfolio
                                </option>
                            </select>
                            <svg
                                class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m6 9 6 6 6-6"
                                />
                            </svg>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Description (Singkat)</label>
                        <textarea id="description"
                                    name="description"
                                    rows="3"
                                    placeholder="Deskripsi singkat halaman (akan tampil di landing page)..."
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">{{ old('description', $page->desc) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Konten Lengkap</label>
                        <textarea id="content"
                                    name="content"
                                    rows="8"
                                    placeholder="Tuliskan isi konten lengkap halaman..."
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-50/50 text-slate-800 text-sm transition">{{ old('content', $page->content) }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <a href="{{ route('admin.pages.index') }}" class="px-6 py-3.5 rounded-xl border border-slate-200 text-slate-600 hover:bg-slate-100 font-bold text-sm transition">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 px-8 rounded-xl shadow-md hover:shadow-lg transition duration-200 text-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>Update Page</span>
                </button>
            </div>
        </form>
    </main>
@endsection
