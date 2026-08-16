<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman layanan
        $services = Page::where('tag', 'service')->latest()->get();
        return view('services.index', compact('services'));
    }

    public function show($slug)
    {
        $service = Page::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('service'));
    }
}
