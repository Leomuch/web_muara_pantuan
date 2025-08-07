<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/admin/sejarah', 'admin.sejarah.index');
Route::view('/admin/sejarah/create', 'admin.sejarah.create');
Route::get('/struktur', function () {
    return view('pages.struktur'); // pastikan file ini ada
})->name('struktur');
<<<<<<< HEAD

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ===== ADMIN AREA =====
Route::prefix('admin')->group(function () {

    // Halaman login admin - hanya jika belum login
    Route::middleware('guest:admin')->group(function () {
        Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/admin/login', [AdminAuthController::class, 'admin.login.submit']);
    });

    // Halaman setelah login - hanya jika sudah login
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        // Halaman Sejarah (statis)
        Route::get('/sejarah', function () {
            return view('admin.sejarah.index');
        });
        Route::get('/sejarah/create', function () {
            return view('admin.sejarah.create');
        });

        // ✅ CRUD PENGUMUMAN
        Route::resource('pengumuman', PengumumanController::class)
            ->parameters([
                'pengumuman' => 'pengumuman'
            ])
            ->names([
                'index'   => 'pengumuman.index',
                'create'  => 'pengumuman.create',
                'store'   => 'pengumuman.store',
                'edit'    => 'pengumuman.edit',
                'update'  => 'pengumuman.update',
                'destroy' => 'pengumuman.destroy',
                'show'    => 'pengumuman.show',
            ]);

        // ✅ CRUD BERITA
        Route::resource('berita', BeritaController::class)
            ->parameters([
                'berita' => 'berita'
            ])
            ->names([
                'index'   => 'berita.index',
                'create'  => 'berita.create',
                'store'   => 'berita.store',
                'edit'    => 'berita.edit',
                'update'  => 'berita.update',
                'destroy' => 'berita.destroy',
                'show'    => 'berita.show',
            ]);

        // Logout Admin
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});
=======
>>>>>>> 8d4f7b3ef0378cefa33bdc40c6dd4c9486e180f9
