<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Page;
use App\Models\ContactMessage; // Impor model jika kamu buat tabel pesan kontak
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Menampilkan halaman utama (Landing Page).
     */
    public function index()
    {
        // Mengambil data homepage, jika belum ada akan dibuatkan data default kosong agar Blade tidak error
        $homepage = Homepage::firstOrCreate(['id' => 1]);

        // Ambil data semua pages/layanan & portofolio
        $pages = Page::latest()->get();

        return view('welcome', compact('homepage', 'pages'));
    }

    /**
     * Menampilkan detail halaman/layanan/portofolio berdasarkan slug.
     */
    public function showPage($slug)
    {
        // Untuk melihat detail layanan/portofolio secara spesifik
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('page'));
    }

    /**
     * Memproses pengiriman pesan dari form "Hubungi Kami" di landing page.
     */
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Jika kamu sudah membuat model & tabel ContactMessage:
        // ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}