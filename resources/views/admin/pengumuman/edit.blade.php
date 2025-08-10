@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4 max-w-3xl animate-fade-in">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">📝 Tambah Berita Baru</h1>

    <form 
        action="{{ route('berita.store') }}" 
        method="POST" 
        enctype="multipart/form-data" 
        class="space-y-6 bg-white p-8 rounded-2xl shadow-xl border border-gray-200 transition-all duration-300 transform hover:scale-[1.01]"
    >
        @csrf

        <!-- Judul -->
        <div class="transition-opacity duration-300">
            <label class="block font-semibold text-gray-700 mb-1">Judul</label>
            <input 
                type="text" 
                name="judul" 
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                value="{{ old('judul') }}"
                placeholder="Masukkan judul berita..."
            >
            @error('judul') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <!-- Konten -->
        <div class="transition-opacity duration-300 delay-75">
            <label class="block font-semibold text-gray-700 mb-1">Konten</label>
            <textarea 
                name="isi" 
                rows="6" 
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                placeholder="Tulis isi berita di sini..."
            >{{ old('isi') }}</textarea>
            @error('isi') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <!-- Gambar -->
        <div class="transition-opacity duration-300 delay-100">
            <label class="block font-semibold text-gray-700 mb-1">Gambar (opsional)</label>
            <input 
                type="file" 
                name="gambar" 
                class="w-full text-gray-600 file:bg-blue-600 file:text-white file:rounded-lg file:px-4 file:py-2 file:cursor-pointer file:hover:bg-blue-700 transition"
            >
            @error('gambar') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <!-- Tombol -->
        <div class="pt-2 flex items-center gap-4">
            <button 
                type="submit" 
                class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300"
            >
                💾 Simpan
            </button>

            <a 
                href="{{ route('berita.index') }}" 
                class="text-gray-500 hover:text-blue-600 hover:underline transition"
            >
                ← Kembali
            </a>
        </div>
    </form>
</div>
@endsection
