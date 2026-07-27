<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'desc'  => 'nullable|string',
            'text'  => 'nullable|string',
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('pages', 'public');
        }

        Page::create($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page berhasil ditambahkan!');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'desc'  => 'nullable|string',
            'text'  => 'nullable|string',
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            if ($page->image) {
                Storage::delete('public/' . $page->image);
            }
            $data['image'] = $request->file('image')->store('pages', 'public');
        }

        $page->update($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page berhasil diperbarui!');
    }

    public function destroy(Page $page)
    {
        if ($page->image) {
            Storage::delete('public/' . $page->image);
        }
        $page->delete();

        return redirect()->route('admin.pages.index')->with('success', 'Page berhasil dihapus!');
    }
}
