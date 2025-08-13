<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ShowBeritaController;
use App\Http\Controllers\ShowPengumumanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Admin\StrukturDesaController as AdminStrukturDesaController;
use App\Http\Controllers\StrukturDesaController as FrontendStrukturDesaController;
use App\Http\Controllers\Admin\AgendaKegiatanController;
use App\Http\Controllers\Admin\ProfilDesaController;
use App\Http\Controllers\Admin\ProfilDesaSectionController;

// ===== HALAMAN UTAMA USER =====
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::get('/struktur-desa', [FrontendStrukturDesaController::class, 'index'])->name('pages.struktur');

Route ::get('/berita/{id}', [ShowBeritaController::class, 'show'])->name('frontend.berita.show');
Route ::get('/pengumuman/{id}', [ShowPengumumanController::class, 'show'])->name('frontend.pengumuman.show');

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

        // Halaman Sejarah
        Route::get('/sejarah', function () {
            return view('admin.sejarah.index');
        });

        Route::get('/sejarah/create', function () {
            return view('admin.sejarah.create');
        });

        // ✅ CRUD Profil Desa
        Route::resource('profil-desa', ProfilDesaController::class)
        ->parameters(['profil-desa' => 'profil'])
        ->names([
            'index' => 'profil.index',
            'create' => 'profil.create',
            'store' => 'profil.store',
            'edit' => 'profil.edit',
            'update' => 'profil.update',
            'destroy' => 'profil.destroy',
            'show' => 'profil.show',
        ]);

        // ✅ Nested CRUD untuk Section di dalam Profil Desa
        Route::resource('profil-desa.section', ProfilDesaSectionController::class)
        ->parameters([
            'profil-desa' => 'profil',
            'section' => 'section'
        ])
        ->names([
            'index' => 'profil.sections.index',
            'create' => 'profil.sections.create',
            'store' => 'profil.sections.store',
            'edit' => 'profil.sections.edit',
            'update' => 'profil.sections.update',
            'destroy' => 'profil.sections.destroy',
            'show' => 'profil.sections.show',
        ]);

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


