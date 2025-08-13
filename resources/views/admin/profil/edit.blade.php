@extends('layouts.admin')

@section('title', 'Edit Profil Desa')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold">Nama Desa</label>
            <input type="text" name="nama_desa" value="{{ $profil->nama_desa }}" class="border p-2 w-full" required>
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Foto Hero</label>
            @if($profil->foto_hero)
                <img src="{{ asset('storage/'.$profil->foto_hero) }}" class="w-64 mb-2 rounded">
            @endif
            <input type="file" name="foto_hero" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection