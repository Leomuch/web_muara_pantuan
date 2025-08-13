@extends('layouts.admin')

@section('title', 'Profil Desa')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">🏛 Profil Desa</h1>
        <a href="{{ route('profil.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah</a>
    </div>

    @if($profil)
        <div class="mb-4">
            <h2 class="text-lg font-semibold">{{ $profil->nama_desa }}</h2>
            @if($profil->foto_hero)
                <img src="{{ asset('storage/'.$profil->foto_hero) }}" class="w-64 mt-2 rounded">
            @endif
        </div>

        <div class="flex gap-2 mt-4">
            <a href="{{ route('profil.edit', $profil->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                Edit Profil
            </a>
            <a href="{{ route('profil.sections.index', $profil->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-green-600">
                Kelola Section
            </a>
        </div>
    @else
        <p>Belum ada data profil desa.</p>
    @endif
</div>
@endsection