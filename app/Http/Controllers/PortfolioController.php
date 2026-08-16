<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman portofolio
        $portfolios = Page::where('tag', 'portfolio')->latest()->get();
        return view('portfolios.index', compact('portfolios'));
    }

    public function show($slug)
    {
        $portfolio = Page::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('portfolio'));
    }
}
