<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $setting = Homepage::firstOrCreate(['id' => 1]);
        $about = $setting;

        return view('about', compact('setting', 'about'));
    }
}