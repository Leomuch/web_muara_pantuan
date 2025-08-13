@extends('layouts.admin')

@section('title', 'Edit Section')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h1 class="text-xl font-bold mb-4">Edit Section untuk {{ $profil->nama_desa }}</h1>

    <form action="{{ route('profil.sections.update', ['profil' => $profil->id, 'section' => $section->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block">Tipe</label>
            <select name="tipe" class="border rounded w-full p-2">
                <option value="informasi_umum" {{ $section->tipe == 'informasi_umum' ? 'selected' : '' }}>Informasi Umum</option>
                <option value="kondisi_potensi" {{ $section->tipe == 'kondisi_potensi' ? 'selected' : '' }}>Kondisi & Potensi</option>
                <option value="visi_misi" {{ $section->tipe == 'visi_misi' ? 'selected' : '' }}>Visi & Misi</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="block">Judul</label>
            <input type="text" name="judul" value="{{ $section->judul }}" class="border rounded w-full p-2">
        </div>

        <div class="mb-3">
            <label class="block">Isi</label>
            <textarea name="isi" class="border rounded w-full p-2">{{ $section->isi }}</textarea>
        </div>

        <div class="mb-3">
            <label class="block">Gambar</label>
            @if($section->gambar)
                <img src="{{ asset('storage/' . $section->gambar) }}" class="w-32 mb-2">
            @endif
            <input type="file" name="gambar" class="border rounded w-full p-2">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection