@extends('layouts.admin')

@section('title', 'Edit Struktur Desa')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">✏️ Edit Jabatan Desa</h1>

    <form action="{{ route('struktur_desa.update', $struktur->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Nama Jabatan -->
        <div>
            <label class="block font-semibold mb-1">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" value="{{ old('nama_jabatan', $struktur->nama_jabatan) }}" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500" required>
        </div>

        <!-- Nama Pejabat -->
        <div>
            <label class="block font-semibold mb-1">Nama Pejabat</label>
            <input type="text" name="nama_pejabat" value="{{ old('nama_pejabat', $struktur->nama_pejabat) }}" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500">
        </div>

        <!-- Foto -->
        <div>
            <label class="block font-semibold mb-1">Foto</label>
            @if($struktur->foto)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $struktur->foto) }}" alt="Foto" class="h-16">
                </div>
            @endif
            <input type="file" name="foto" 
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block font-semibold mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" 
                      class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-green-500">{{ old('deskripsi', $struktur->deskripsi) }}</textarea>
        </div>

        <!-- Tombol -->
        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">💾 Update</button>
            <a href="{{ route('struktur_desa.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection