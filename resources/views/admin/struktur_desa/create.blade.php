@extends('layouts.admin')

@section('title', 'Tambah Struktur Desa')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">➕ Tambah Jabatan Desa</h1>

    <form action="{{ route('struktur_desa.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- Nama -->
        <div>
            <label class="block font-semibold mb-1">Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500" required>
        </div>

        <!-- Jabatan -->
        <div>
            <label class="block font-semibold mb-1">Jabatan</label>
            <input type="text" name="jabatan" value="{{ old('jabatan') }}" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500">
        </div>

        <!-- Foto -->
        <div>
            <label class="block font-semibold mb-1">Foto</label>
            <input type="file" name="foto" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500">
        </div>

        <!-- Tombol -->
        <div class="flex space-x-2">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">💾 Simpan</button>
            <a href="{{ route('struktur_desa.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection