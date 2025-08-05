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
