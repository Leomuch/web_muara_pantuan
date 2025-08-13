@extends('layouts.admin')

@section('title', 'Tambah Profil Desa')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold">Nama Desa</label>
            <input type="text" name="nama_desa" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Foto Hero</label>
            <input type="file" name="foto_hero" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection