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
        // Memastikan data selalu ada (menghindari error 404 jika DB kosong)
        $homepage = Homepage::firstOrCreate(['id' => 1]);

        $data = $request->validate([
            'hero_title'    => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string',
            'hero_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'about_title'   => 'nullable|string|max:255',
            'about_desc'    => 'nullable|string',
            'about_image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:50',
            'address'       => 'nullable|string',
            'facebook_url'  => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'twitter_url'   => 'nullable|url',
        ]);

        
        if ($request->hasFile('hero_image')) {
            
            if ($homepage->hero_image && Storage::disk('public')->exists($homepage->hero_image)) {
                Storage::disk('public')->delete($homepage->hero_image);
            }
           
            $data['hero_image'] = $request->file('hero_image')->store('homepage', 'public');
        }

        
        if ($request->hasFile('about_image')) {
           
            if ($homepage->about_image && Storage::disk('public')->exists($homepage->about_image)) {
                Storage::disk('public')->delete($homepage->about_image);
            }
            
            $data['about_image'] = $request->file('about_image')->store('homepage', 'public');
        }

        $homepage->update($data);

        return redirect()->back()->with('success', 'Data Homepage berhasil diperbarui!');
    }
}
