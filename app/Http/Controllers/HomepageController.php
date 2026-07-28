<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function edit()
    {
        return view('homepage-edit');
    }

    public function update(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'hero_image' => 'nullable|string|max:255',

            'about_title' => 'nullable|string|max:255',
            'about_desc' => 'nullable|string',
            'about_image' => 'nullable|string|max:255',

            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
        ]);

        // Update the homepage content in the database or perform any other necessary actions
        $homepage = Homepage::find(1);
        if ($homepage && $homepage->update($validatedData)) {
            // Handle successful update
            return redirect()->route('homepage')->with('success', 'Homepage content updated successfully.');
        } else {
            // Handle update failure
            return redirect()->back()->with('error', 'Failed to update homepage content.');
        }
    }
}
