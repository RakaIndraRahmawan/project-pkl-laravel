@extends('layouts.admin-layout')

@section('style')
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-heading { font-family: 'Montserrat', sans-serif; }
    </style>
@endsection

@section('content')
            <!-- Main Body Wrapper -->
            <main class="p-6 md:p-10 space-y-8 flex-1">

                <!-- SECTION 1: RINGKASAN KONTEN (STAT CARDS) -->
                <div>
                    <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Ringkasan Konten</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Card 1: Total Service / Portfolio -->
                        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-5">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-500">Total Service / Portfolio</p>
                                <h3 class="text-2xl font-black text-slate-900 mt-1">{{ $totalPages ?? 0 }} <span class="text-sm font-normal text-slate-500">Halaman</span></h3>
                            </div>
                        </div>

                        <!-- Card 2: Status Akun -->
                        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-5">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-500">Status Akun</p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                    <h3 class="text-base font-bold text-slate-900">Active <span class="text-xs font-normal text-slate-500">(Administrator)</span></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- SECTION 2: AKSES CEPAT -->
                <div>
                    <h2 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Akses Cepat</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <a href="{{ route('admin.homepage.edit') }}" class="group bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm hover:border-blue-500 hover:shadow-md transition flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20.586 7.828a2 2 0 010 2.828L11.828 19.172a2 2 0 01-1.414.586H7v-3.414a2 2 0 01.586-1.414l8.586-8.586z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm text-slate-900 group-hover:text-blue-600 transition">Edit Tampilan Homepage</h4>
                                    <p class="text-xs text-slate-500">Ubah judul, gambar, dan deskripsi hero section</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-slate-400 group-hover:text-blue-600 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>

                        <a href="{{ route('admin.pages.create') }}" class="group bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm hover:border-blue-500 hover:shadow-md transition flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm text-slate-900 group-hover:text-emerald-600 transition">Tambah Service / Portfolio Baru</h4>
                                    <p class="text-xs text-slate-500">Buat postingan halaman atau konten layanan baru</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-slate-400 group-hover:text-emerald-600 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>

                    </div>
                </div>

                <!-- SECTION 3: HALAMAN TERAKHIR DIPERBARUI (TABEL) -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <div>
                            <h2 class="text-base font-bold text-slate-900">Halaman Terakhir Diperbarui</h2>
                            <p class="text-xs text-slate-500">Daftar halaman layanan atau portofolio terbaru yang telah dipublikasikan</p>
                        </div>
                        <a href="{{ route('admin.pages.index') }}" class="text-xs font-bold text-blue-600 hover:underline">Kelola Semua &rarr;</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-slate-500 uppercase text-[11px] font-bold tracking-wider border-b border-slate-100">
                                <tr>
                                    <th class="py-3.5 px-6">No</th>
                                    <th class="py-3.5 px-6">Judul Halaman</th>
                                    <th class="py-3.5 px-6">Slug</th>
                                    <th class="py-3.5 px-6">Tanggal Dibuat</th>
                                    <th class="py-3.5 px-6 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-slate-700">
                                @forelse($recentPages ?? [] as $index => $page)
                                    <tr class="hover:bg-slate-50/80 transition">
                                        <td class="py-4 px-6 font-semibold text-slate-400 text-xs">{{ $index + 1 }}</td>
                                        <td class="py-4 px-6 font-bold text-slate-900">{{ $page->title }}</td>
                                        <td class="py-4 px-6">
                                            <span class="bg-slate-100 text-slate-600 text-xs px-2.5 py-1 rounded-md font-mono">{{ $page->slug }}</span>
                                        </td>
                                        <td class="py-4 px-6 text-xs text-slate-500">{{ $page->created_at ? $page->created_at->format('d M Y') : '-' }}</td>
                                        <td class="py-4 px-6 text-right">
                                            <div class="inline-flex items-center gap-2">
                                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="p-2 text-slate-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Edit">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 012.828 0L20.586 7.828a2 2 0 010 2.828L11.828 19.172a2 2 0 01-1.414.586H7v-3.414a2 2 0 01.586-1.414l8.586-8.586z"></path></svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-12 text-center text-slate-400 text-sm">
                                            <div class="flex flex-col items-center justify-center space-y-2">
                                                <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                                <p>Belum ada data halaman / service.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
@endsection