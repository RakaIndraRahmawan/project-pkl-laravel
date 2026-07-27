<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // Ambil data settingan homepage (1 row)
        $homepage = Homepage::first();

        // Ambil data semua pages/layanan & portofolio
        $pages = Page::latest()->get();

        return view('welcome', compact('homepage', 'pages'));
    }

    public function showPage($slug)
    {
        // Untuk melihat detail layanan/portofolio secara spesifik
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('pages.show', compact('page'));
    }
}

