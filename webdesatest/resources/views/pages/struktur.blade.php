@extends('layout.app')

@section('title', 'Struktur Desa')

@section('content')
<section class="relative py-20 bg-gradient-to-b from-green-50 via-white to-green-100 overflow-hidden">
    <div class="container mx-auto px-6">
        
        <!-- Judul Halaman -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-green-700 mb-4 animate-fade-in-down">
                Struktur Pemerintahan Desa Muara Pantuan
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto animate-fade-in-up">
                Mengenal susunan perangkat desa yang bekerja untuk kemajuan Desa Muara Pantuan.
            </p>
        </div>

        <!-- Foto Kepala Desa -->
        <div class="text-center mb-16 animate-zoom-in">
            <div class="inline-block bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition transform hover:scale-105">
                <img src="{{ asset('img/kepala-desa.jpg') }}" 
                     alt="Kepala Desa" 
                     class="w-40 h-40 mx-auto rounded-full object-cover shadow-md mb-4">
                <h2 class="text-2xl font-bold text-green-800">H.Edy</h2>
                <p class="text-gray-600">Kepala Desa</p>
            </div>
        </div>

        <!-- Struktur Bawahan -->
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition animate-slide-in-left">
                <img src="{{ asset('img/sekdes.jpg') }}" alt="Sekretaris Desa" class="w-28 h-28 mx-auto rounded-full shadow mb-4 object-cover">
                <h3 class="font-bold text-lg text-green-800">Sardila</h3>
                <p class="text-gray-600">Sekretaris Desa</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition animate-fade-in-up delay-200">
                <img src="{{ asset('img/kadus.jpg') }}" alt="Kepala Dusun" class="w-28 h-28 mx-auto rounded-full shadow mb-4 object-cover">
                <h3 class="font-bold text-lg text-green-800">idk</h3>
                <p class="text-gray-600">Kepala Dusun</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:scale-105 hover:shadow-2xl transition animate-slide-in-right">
                <img src="{{ asset('img/bendahara.jpg') }}" alt="Bendahara Desa" class="w-28 h-28 mx-auto rounded-full shadow mb-4 object-cover">
                <h3 class="font-bold text-lg text-green-800">idk</h3>
                <p class="text-gray-600">Bendahara Desa</p>
            </div>
        </div>

        <!-- Hiasan garis -->
        <div class="mt-16 border-t border-green-300 w-3/4 mx-auto animate-fade-in"></div>

        <!-- Penjelasan -->
        <div class="mt-8 text-center animate-fade-in-up">
            <p class="text-gray-600 max-w-2xl mx-auto">
                Setiap perangkat desa memiliki peran penting dalam mengatur kebijakan, pelayanan publik, dan pembangunan desa. 
                Dengan koordinasi yang baik, mereka bekerja sama untuk kesejahteraan masyarakat.
            </p>
        </div>
    </div>
</section>
@endsection
