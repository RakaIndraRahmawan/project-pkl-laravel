@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Homepage Settings</h1>
        <p class="text-gray-500 mt-1">Kelola konten halaman utama company profile.</p>
    </div>

    <form action="{{ route('admin.homepage.update') }}" method="POST" enctype="multipart/form-data"
          class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Hero Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 bg-gradient-to-r from-blue-50 to-indigo-50 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Hero Section
                </h2>
            </div>
            <div class="p-6 space-y-5">
                <div>
                    <label for="hero_title" class="block text-sm font-medium text-gray-700 mb-1">Hero Title</label>
                    <input type="text" name="hero_title" id="hero_title" value="{{ old('hero_title', $homepage->hero_title) }}"
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('hero_title') border-red-400 @enderror"
                           placeholder="Masukkan judul hero">
                    @error('hero_title')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="hero_subtitle" class="block text-sm font-medium text-gray-700 mb-1">Hero Subtitle</label>
                    <textarea name="hero_subtitle" id="hero_subtitle" rows="3"
                              class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('hero_subtitle') border-red-400 @enderror"
                              placeholder="Masukkan subtitle hero">{{ old('hero_subtitle', $homepage->hero_subtitle) }}</textarea>
                    @error('hero_subtitle')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="hero_image" class="block text-sm font-medium text-gray-700 mb-1">Hero Image</label>
                    @if($homepage->hero_image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $homepage->hero_image) }}"
                                 alt="Hero Image"
                                 class="h-40 w-auto rounded-lg border border-gray-200 object-cover">
                        </div>
                    @endif
                    <input type="file" name="hero_image" id="hero_image"
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('hero_image') border-red-400 @enderror">
                    <p class="mt-1 text-xs text-gray-400">Format: jpg, jpeg, png. Maks: 2MB.</p>
                    @error('hero_image')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 bg-gradient-to-r from-emerald-50 to-teal-50 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    About Section
                </h2>
            </div>
            <div class="p-6 space-y-5">
                <div>
                    <label for="about_title" class="block text-sm font-medium text-gray-700 mb-1">About Title</label>
                    <input type="text" name="about_title" id="about_title" value="{{ old('about_title', $homepage->about_title) }}"
                           class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('about_title') border-red-400 @enderror"
                           placeholder="Masukkan judul about">
                    @error('about_title')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="about_desc" class="block text-sm font-medium text-gray-700 mb-1">About Description</label>
                    <textarea name="about_desc" id="about_desc" rows="5"
                              class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('about_desc') border-red-400 @enderror"
                              placeholder="Masukkan deskripsi about">{{ old('about_desc', $homepage->about_desc) }}</textarea>
                    @error('about_desc')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="about_image" class="block text-sm font-medium text-gray-700 mb-1">About Image</label>
                    @if($homepage->about_image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $homepage->about_image) }}"
                                 alt="About Image"
                                 class="h-40 w-auto rounded-lg border border-gray-200 object-cover">
                        </div>
                    @endif
                    <input type="file" name="about_image" id="about_image"
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 @error('about_image') border-red-400 @enderror">
                    <p class="mt-1 text-xs text-gray-400">Format: jpg, jpeg, png. Maks: 2MB.</p>
                    @error('about_image')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 bg-gradient-to-r from-amber-50 to-orange-50 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-800 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact & Social Media
                </h2>
            </div>
            <div class="p-6 space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="contact_email" id="contact_email" value="{{ old('contact_email', $homepage->contact_email) }}"
                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('contact_email') border-red-400 @enderror"
                               placeholder="admin@example.com">
                        @error('contact_email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                        <input type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone', $homepage->contact_phone) }}"
                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('contact_phone') border-red-400 @enderror"
                               placeholder="+62 812-3456-7890">
                        @error('contact_phone')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <textarea name="address" id="address" rows="2"
                                  class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('address') border-red-400 @enderror"
                                  placeholder="Alamat lengkap perusahaan">{{ old('address', $homepage->address) }}</textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <hr class="border-gray-200">

                <div>
                    <p class="text-sm font-medium text-gray-700 mb-3">Social Media Links</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="facebook_url" class="block text-xs font-medium text-gray-500 mb-1">Facebook URL</label>
                            <input type="url" name="facebook_url" id="facebook_url" value="{{ old('facebook_url', $homepage->facebook_url) }}"
                                   class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="https://facebook.com/...">
                        </div>
                        <div>
                            <label for="instagram_url" class="block text-xs font-medium text-gray-500 mb-1">Instagram URL</label>
                            <input type="url" name="instagram_url" id="instagram_url" value="{{ old('instagram_url', $homepage->instagram_url) }}"
                                   class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="https://instagram.com/...">
                        </div>
                        <div>
                            <label for="twitter_url" class="block text-xs font-medium text-gray-500 mb-1">Twitter URL</label>
                            <input type="url" name="twitter_url" id="twitter_url" value="{{ old('twitter_url', $homepage->twitter_url) }}"
                                   class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="https://twitter.com/...">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit"
                    class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-sm transition duration-150 ease-in-out">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                </svg>
                Simpan Perubahan
            </button>
        </div>
    </form>
@endsection

