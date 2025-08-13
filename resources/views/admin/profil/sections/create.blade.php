@extends('layouts.admin')

@section('title', 'Tambah Section')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-xl font-bold mb-4">Tambah Section untuk {{ $profil->nama_desa }}</h1>

    <form action="{{ route('profil.sections.store', $profil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="block">Tipe</label>
            <select name="tipe" class="border rounded w-full p-2">
                <option value="">-- Pilih --</option>
                <option value="informasi_umum">Informasi Umum</option>
                <option value="kondisi_potensi">Kondisi & Potensi</option>
                <option value="visi_misi">Visi & Misi</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="block">Judul</label>
            <input type="text" name="judul" class="border rounded w-full p-2">
        </div>

        <div class="mb-3">
            <label class="block">Isi</label>
            <textarea name="isi" class="border rounded w-full p-2"></textarea>
        </div>

        <div class="mb-3">
            <label class="block">Gambar</label>
            <input type="file" name="gambar" class="border rounded w-full p-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection