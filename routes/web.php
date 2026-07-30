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

// Dashboard Utama
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Kelola Profile User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Panel Kelola Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Manage Single Row Homepage
    Route::get('/homepage', [HomepageController::class, 'edit'])->name('homepage.edit');
    Route::put('/homepage', [HomepageController::class, 'update'])->name('homepage.update');

    // Manage Pages / Service & Portfolio
    Route::resource('pages', PageController::class);

});

// Memanggil route autentikasi (login, logout, dll)
require __DIR__.'/auth.php';
