@extends('layouts.admin')

@section('page_title', 'Kelola Homepage')
@section('page_subtitle', 'Kelola tampilan utama, gambar hero, dan konten beranda.')

@section('content')
<form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data" class="max-w-5xl space-y-6">
    @csrf
    @method('PUT')

    <!-- Hero Section Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50">
            <h3 class="font-bold text-slate-800 text-base">Hero Section</h3>
        </div>
        <div class="p-6 space-y-5">
            <div>
                <label for="hero_title" class="block text-sm font-semibold text-slate-700 mb-2">Hero Title</label>
                <input type="text" name="hero_title" id="hero_title" 
                       value="{{ old('hero_title', $homepage->hero_title ?? '') }}"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-sm text-slate-800 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition">
                @error('hero_title')
                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="hero_subtitle" class="block text-sm font-semibold text-slate-700 mb-2">Hero Subtitle</label>
                <input type="text" name="hero_subtitle" id="hero_subtitle" 
                       value="{{ old('hero_subtitle', $homepage->hero_subtitle ?? '') }}"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-sm text-slate-800 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition">
                @error('hero_subtitle')
                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Hero Image</label>
                @if(!empty($homepage->hero_image))
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $homepage->hero_image) }}" alt="Preview Hero" class="h-32 rounded-xl object-cover border border-slate-200 shadow-sm">
                    </div>
                @endif
                <input type="file" name="hero_image" 
                       class="block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition">
                @error('hero_image')
                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- About Section Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50">
            <h3 class="font-bold text-slate-800 text-base">About Section</h3>
        </div>
        <div class="p-6 space-y-5">
            <div>
                <label for="about_title" class="block text-sm font-semibold text-slate-700 mb-2">About Title</label>
                <input type="text" name="about_title" id="about_title" 
                       value="{{ old('about_title', $homepage->about_title ?? '') }}"
                       class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-sm text-slate-800 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition">
                @error('about_title')
                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="about_desc" class="block text-sm font-semibold text-slate-700 mb-2">About Description</label>
                <textarea name="about_desc" id="about_desc" rows="4" 
                          class="w-full rounded-xl border border-slate-300 px-4 py-2.5 text-sm text-slate-800 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition">{{ old('about_desc', $homepage->about_desc ?? '') }}</textarea>
                @error('about_desc')
                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <!-- Field Upload Gambar About (Baru Ditambahkan) -->
            <div>
                <label for="about_image" class="block text-sm font-semibold text-slate-700 mb-2">About Image</label>
                @if(!empty($homepage->about_image))
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $homepage->about_image) }}" alt="Preview About" class="h-32 rounded-xl object-cover border border-slate-200 shadow-sm">
                    </div>
                @endif
                <input type="file" name="about_image" id="about_image"
                       class="block w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition">
                @error('about_image')
                    <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end pt-2">
        <button type="submit" 
                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm rounded-xl shadow-lg shadow-blue-600/30 transition duration-200 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            Simpan Perubahan
        </button>
    </div>
</form>
@endsection