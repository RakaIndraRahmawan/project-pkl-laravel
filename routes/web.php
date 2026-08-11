<?php

use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Models\Page;
use Illuminate\Support\Facades\Route;

// --- FRONTEND ROUTES ---
// Halaman Utama (Landing Page)
Route::get('/', [FrontController::class, 'index'])->name('home');

// Halaman Khusus Portofolio (Opsional jika ingin halaman terpisah)
Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('portfolio');

// Halaman & Process Kontak
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'sendMessage'])->name('contact.send');

// Halaman Detail Service / Portfolio berdasarkan Slug
Route::get('/page/{slug}', [FrontController::class, 'showPage'])->name('page.show');


// --- DASHBOARD ROUTE ---
Route::get('/dashboard', function () {
    $totalPages = Page::count();
    $recentPages = Page::latest()->take(5)->get();

    return view('dashboard', compact('totalPages', 'recentPages'));
})->middleware(['auth'])->name('dashboard');


// --- USER PROFILE ROUTES ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// --- ADMIN PANEL ROUTES ---
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Manage Single Row Homepage (Raka)
    Route::get('/homepage', [HomepageController::class, 'edit'])->name('homepage.edit');
    Route::put('/homepage', [HomepageController::class, 'update'])->name('homepage.update');

    // Manage Pages / Service & Portfolio (Magfi & Ajas)
    Route::resource('pages', PageController::class);

});

require __DIR__.'/auth.php';