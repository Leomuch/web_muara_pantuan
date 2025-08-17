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
use App\Http\Controllers\KontakController;


// ===== HALAMAN UTAMA USER (MASYARAKAT, TANPA LOGIN) =====
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak', fn() => view('pages.kontak'))->name('kontak');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/struktur-desa', [FrontendStrukturDesaController::class, 'index'])->name('pages.struktur');
Route::get('/berita/{id}', [ShowBeritaController::class, 'show'])->name('frontend.berita.show');
Route::get('/pengumuman/{id}', [ShowPengumumanController::class, 'show'])->name('frontend.pengumuman.show');
Route::post('/kirim-pesan', [KontakController::class, 'kirim'])->name('kirim.pesan');

// ===== ADMIN AREA =====
Route::prefix('admin')->group(function () {
    // Login Admin
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Dashboard & Menu Admin (butuh login)
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');

        // Halaman Sejarah (contoh static view)
        Route::view('/sejarah', 'admin.sejarah.index');
        Route::view('/sejarah/create', 'admin.sejarah.create');

        // CRUD Profil Desa
        Route::resource('profil-desa', ProfilDesaController::class)
            ->parameters(['profil-desa' => 'profil'])
            ->names('profil');

        // CRUD Section Profil Desa
        Route::resource('profil-desa.section', ProfilDesaSectionController::class)
            ->parameters(['profil-desa' => 'profil', 'section' => 'section'])
            ->names('profil.sections');

        // CRUD Pengumuman
        Route::resource('pengumuman', PengumumanController::class)->names('pengumuman');

        // CRUD Berita
        Route::resource('berita', BeritaController::class)->names('berita');

        // CRUD Struktur Desa
        Route::resource('struktur-desa', AdminStrukturDesaController::class)->names('struktur_desa');

        // CRUD Agenda Kegiatan
        Route::resource('agenda-kegiatan', AgendaKegiatanController::class)->names('agenda_kegiatan');
    });
});