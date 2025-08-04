<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');

// ===== AUTH DEFAULT USER (JIKA DIPAKAI) =====
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ===== ADMIN AREA =====
Route::prefix('admin')->group(function () {

    // Halaman login admin - hanya jika belum login
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminAuthController::class, 'login']);
    });

    // Halaman setelah login - hanya jika sudah login
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/sejarah', function () {
            return view('admin.sejarah.index');
        });

        Route::get('/sejarah/create', function () {
            return view('admin.sejarah.create');
        });

        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});