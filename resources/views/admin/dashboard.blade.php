{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="animate-fade-in">
    <!-- Judul Dashboard -->
    <h1 class="text-4xl font-extrabold mb-4 text-blue-500 flex items-center gap-3">
        📊 Dashboard Admin
    </h1>
    <p class="text-gray-600 mb-8">
        Selamat datang di panel admin desa. Gunakan menu di sidebar untuk mengelola berita, pengumuman, profil desa, dan struktur organisasi.
    </p>

    <!-- Grid Card Informasi Statis -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Card Berita -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <div class="flex items-center gap-4">
                <div class="bg-blue-100 p-4 rounded-full text-2xl">
                    📄
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Kelola Berita</h3>
                    <p class="text-sm text-gray-500">Tambah, edit, atau hapus berita desa dengan mudah.</p>
                </div>
            </div>
        </div>

        <!-- Card Pengumuman -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <div class="flex items-center gap-4">
                <div class="bg-green-100 p-4 rounded-full text-2xl">
                    📢
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Kelola Pengumuman</h3>
                    <p class="text-sm text-gray-500">Sampaikan informasi penting kepada warga desa.</p>
                </div>
            </div>
        </div>

        <!-- Card Profil Desa -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <div class="flex items-center gap-4">
                <div class="bg-yellow-100 p-4 rounded-full text-2xl">
                    🏛
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Profil Desa</h3>
                    <p class="text-sm text-gray-500">Perbarui profil desa agar tetap informatif.</p>
                </div>
            </div>
        </div>

        <!-- Card Struktur Desa -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <div class="flex items-center gap-4">
                <div class="bg-purple-100 p-4 rounded-full text-2xl">
                    👔
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Struktur Desa</h3>
                    <p class="text-sm text-gray-500">Atur dan perbarui jabatan aparat desa.</p>
                </div>
            </div>
        </div>

        <!-- Card Keamanan -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <div class="flex items-center gap-4">
                <div class="bg-red-100 p-4 rounded-full text-2xl">
                    🔒
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Keamanan</h3>
                    <p class="text-sm text-gray-500">Selalu logout setelah selesai menggunakan sistem.</p>
                </div>
            </div>
        </div>

        <!-- Card Panduan -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <div class="flex items-center gap-4">
                <div class="bg-indigo-100 p-4 rounded-full text-2xl">
                    📘
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Panduan</h3>
                    <p class="text-sm text-gray-500">Pelajari cara mengelola website desa dengan efektif.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Tips -->
    <div class="mt-10 bg-gradient-to-r from-blue-50 to-blue-100 p-8 rounded-xl shadow-inner">
        <h2 class="text-2xl font-bold text-blue-500 mb-3">📌 Tips Penggunaan</h2>
        <ul class="list-disc pl-5 text-gray-700 space-y-2">
            <li>Gunakan menu di kiri untuk mengelola konten desa dengan cepat.</li>
            <li>Selalu periksa kembali konten sebelum dipublikasikan.</li>
            <li>Logout setiap selesai bekerja demi keamanan data.</li>
        </ul>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
        animation: fadeIn 0.5s ease-in-out both;
    }
</style>
@endsection
