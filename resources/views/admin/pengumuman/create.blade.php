@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4 max-w-3xl">
    <h1 class="text-2xl font-bold mb-4">Tambah Pengumuman</h1>

    <form action="{{ route('pengumuman.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf

        <div>
            <label class="block font-semibold mb-1">Judul</label>
            <input type="text" name="judul" class="w-full border rounded px-3 py-2" value="{{ old('judul') }}">
            @error('judul') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <div>
            <label class="block font-semibold mb-1">Isi</label>
            <textarea name="isi" rows="6" class="w-full border rounded px-3 py-2">{{ old('isi') }}</textarea>
            @error('isi') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-black px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('pengumuman.index') }}" class="ml-2 text-gray-600 hover:underline">Kembali</a>
    </form>
</div>
@endsection