<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    public function edit()
    {
        // Ambil data baris pertama, jika belum ada buat otomatis
        $homepage = Homepage::firstOrCreate(['id' => 1]);
        return view('admin.homepage.edit', compact('homepage'));
    }

    public function update(Request $request)
    {
        $homepage = Homepage::firstOrFail();

        $data = $request->validate([
            'hero_title'    => 'nullable|string',
            'hero_subtitle' => 'nullable|string',
            'hero_image'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'about_title'   => 'nullable|string',
            'about_desc'    => 'nullable|string',
            'about_image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'address'       => 'nullable|string',
            'facebook_url'  => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'twitter_url'   => 'nullable|url',
        ]);

        // Handle upload foto hero
        if ($request->hasFile('hero_image')) {
            if ($homepage->hero_image) {
                Storage::delete('public/' . $homepage->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('homepage', 'public');
        }

        // Handle upload foto about
        if ($request->hasFile('about_image')) {
            if ($homepage->about_image) {
                Storage::delete('public/' . $homepage->about_image);
            }
            $data['about_image'] = $request->file('about_image')->store('homepage', 'public');
        }

        $homepage->update($data);

        return redirect()->back()->with('success', 'Data Homepage berhasil diperbarui!');
    }
}
