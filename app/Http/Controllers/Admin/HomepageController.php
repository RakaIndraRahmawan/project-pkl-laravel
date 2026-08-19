<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    /**
     * Menampilkan form edit CMS Admin
     */
    public function edit()
    {
        // Gunakan firstOrNew untuk mengambil data pertama atau membuat instance baru jika kosong
        $homepage = Homepage::firstOrNew();

        return view('admin.homepage.edit', compact('homepage'));
    }

    /**
     * Memperbarui data dari form admin
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'hero_title'    => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'hero_image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'about_title'   => 'nullable|string|max:255',
            'about_desc'    => 'nullable|string',
            'about_image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'address'       => 'nullable|string',
            'facebook_url'  => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'twitter_url'   => 'nullable|url|max:255',
        ]);

        $homepage = Homepage::firstOrNew();

        // Handle upload Hero Image
        if ($request->hasFile('hero_image')) {
            if ($homepage->hero_image && Storage::disk('public')->exists($homepage->hero_image)) {
                Storage::disk('public')->delete($homepage->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('homepage', 'public');
        }

        // Handle upload About Image
        if ($request->hasFile('about_image')) {
            if ($homepage->about_image && Storage::disk('public')->exists($homepage->about_image)) {
                Storage::disk('public')->delete($homepage->about_image);
            }
            $data['about_image'] = $request->file('about_image')->store('homepage', 'public');
        }

        // Mengisi atribut dan menyimpan (otomatis CREATE jika baru, UPDATE jika sudah ada)
        $homepage->fill($data)->save();

        return redirect()->back()->with('success', 'Halaman Beranda berhasil diperbarui!');
    }

    /**
     * Menampilkan Landing Page untuk pengunjung umum
     */
    public function show()
    {
        $homepage = Homepage::first();

        return view('home', compact('homepage'));
    }
}