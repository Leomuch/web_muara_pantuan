<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StrukturDesaController as AdminStrukturDesaController;
use App\Http\Controllers\StrukturDesaController as FrontendStrukturDesaController;
use App\Http\Controllers\Admin\AgendaKegiatanController;

// ===== HALAMAN UTAMA USER =====
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

// Route::get('/struktur', function () {
//     return view('pages.struktur'); // pastikan file ini ada
// })->name('struktur');

Route::get('/struktur-desa', [FrontendStrukturDesaController::class, 'index'])->name('pages.struktur');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// ===== ADMIN STATIC VIEW (Optional if not using controller) =====
Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/admin/sejarah', 'admin.sejarah.index');
Route::view('/admin/sejarah/create', 'admin.sejarah.create');

// ===== ADMIN AREA =====
Route::prefix('admin')->group(function () {

    // Login Admin - hanya jika belum login
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    });

    // Halaman admin - hanya jika sudah login
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/admin/profil', function () {
            return 'Halaman Profil Desa';
        })->name('profil.index');

        // Halaman Sejarah
        Route::get('/sejarah', function () {
            return view('admin.sejarah.index');
        });

        Route::get('/sejarah/create', function () {
            return view('admin.sejarah.create');
        });

        // ✅ CRUD PENGUMUMAN
        Route::resource('pengumuman', PengumumanController::class)
            ->parameters(['pengumuman' => 'pengumuman'])
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
        ->parameters(['berita' => 'berita'])
        ->names([
            'index'   => 'berita.index',
            'create'  => 'berita.create',
            'store'   => 'berita.store',
                'edit'    => 'berita.edit',
                'update'  => 'berita.update',
                'destroy' => 'berita.destroy',
                'show'    => 'berita.show',
            ]);
            
        // ✅ CRUD Struktur Desa
        Route::resource('struktur-desa', AdminStrukturDesaController::class)->names([
            'index' => 'struktur_desa.index',
            'create' => 'struktur_desa.create',
            'store' => 'struktur_desa.store',
            'edit' => 'struktur_desa.edit',
            'update' => 'struktur_desa.update',
            'destroy' => 'struktur_desa.destroy',
        ]);

        Route::resource('agenda-kegiatan', AgendaKegiatanController::class)->names([
            'index' => 'agenda_kegiatan.index',
            'create' => 'agenda_kegiatan.create',
            'store' => 'agenda_kegiatan.store',
            'edit' => 'agenda_kegiatan.edit',
            'update' => 'agenda_kegiatan.update',
            'destroy' => 'agenda_kegiatan.destroy',
        ]);

        // Logout Admin
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});
