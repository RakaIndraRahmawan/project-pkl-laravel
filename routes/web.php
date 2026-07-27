<?php

use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Halaman Utama Company Profile
Route::get('/', [FrontController::class, 'index'])->name('home');

// Halaman Detail Service / Portfolio
Route::get('/page/{slug}', [FrontController::class, 'showPage'])->name('page.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Manage Single Row Homepage (Raka)
    Route::get('/homepage', [HomepageController::class, 'edit'])->name('homepage.edit');
    Route::put('/homepage', [HomepageController::class, 'update'])->name('homepage.update');

    // Manage Pages / Service & Portfolio (Magfi & Ajas)
    Route::resource('pages', PageController::class);

});

require __DIR__.'/auth.php';
