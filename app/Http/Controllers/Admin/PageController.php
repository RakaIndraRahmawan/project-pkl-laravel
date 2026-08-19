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
        $pages = Page::latest()->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'content'     => 'nullable|string',
        ]);

        $slug = Str::slug($request->title);
        $count = Page::where('slug', 'LIKE', "{$slug}%")->count();

        $data = [
            'title'   => $request->title,
            'slug'    => $count ? "{$slug}-{$count}" : $slug,
            'desc'    => $request->description,
            'content' => $request->content,
        ];

        // Handle Upload Gambar
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
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable|string',
            'content'     => 'nullable|string',
        ]);

        $data = [
            'title'   => $request->title,
            'desc'    => $request->description,
            'content' => $request->content,
        ];

        // Update Slug jika Judul Berubah
        if ($page->title !== $request->title) {
            $slug = Str::slug($request->title);
            $count = Page::where('slug', 'LIKE', "{$slug}%")->where('id', '!=', $page->id)->count();
            $data['slug'] = $count ? "{$slug}-{$count}" : $slug;
        }

        // Handle upload gambar baru dan hapus gambar lama
        if ($request->hasFile('image')) {
            if ($page->image && Storage::disk('public')->exists($page->image)) {
                Storage::disk('public')->delete($page->image);
            }
            $data['image'] = $request->file('image')->store('pages', 'public');
        }

        $page->update($data);

        return redirect()->route('admin.pages.index')->with('success', 'Page berhasil diperbarui!');
    }

    public function destroy(Page $page)
    {
        if ($page->image && Storage::disk('public')->exists($page->image)) {
            Storage::disk('public')->delete($page->image);
        }
        
        $page->delete();

        return redirect()->route('admin.pages.index')->with('success', 'Page berhasil dihapus!');
    }
}