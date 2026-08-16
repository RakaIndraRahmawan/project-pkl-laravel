<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Page;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Menampilkan halaman utama (Landing Page).
     */
    public function index()
    {
        $setting = Homepage::firstOrCreate(['id' => 1]);
        $homepage = $setting;
        $about = null; 

        $pages = Page::latest()->get();
        $services = $pages;

        return view('welcome', compact('setting', 'homepage', 'about', 'services', 'pages'));
    }

    /**
     * Menampilkan halaman khusus Portofolio.
     */
    public function portfolio()
    {
        $setting = Homepage::firstOrCreate(['id' => 1]);
        
        // Mengambil data portofolio dari tabel pages
        // Jika tabel pages kamu memiliki kolom 'type', bisa difilter: Page::where('type', 'portfolio')->latest()->get();
        $portfolios = Page::latest()->get();

        return view('pages.portfolio', compact('setting', 'portfolios'));
    }

    /**
     * Menampilkan halaman khusus Kontak.
     */
    public function contact()
    {
        $setting = Homepage::firstOrCreate(['id' => 1]);

        return view('pages.contact', compact('setting'));
    }

    /**
     * Menampilkan detail halaman/layanan/portofolio berdasarkan slug.
     */

    public function servicesPortfolio()
    {
        $about = Homepage::firstOrCreate(['id' => 1]);
        $services = Page::latest()->get();

        return view('pages.index', ['page' => Page::first()], compact('about', 'services'));
    }
    
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('page'));
    }

    public function test()
    {
        return view('auth.login');
    }

    // /**
    //  * Memproses pengiriman pesan dari form "Hubungi Kami".
    //  */
    // public function sendMessage(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name'    => 'required|string|max:255',
    //         'email'   => 'required|email|max:255',
    //         'message' => 'required|string',
    //     ]);

    //     if (class_exists(ContactMessage::class)) {
    //         ContactMessage::create($validated);
    //     }

    //     return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    // }
}