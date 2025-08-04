@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4 max-w-3xl">
    <h1 class="text-2xl font-bold mb-4">Edit Berita</h1>

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold mb-1">Judul</label>
            <input type="text" name="judul" class="w-full border rounded px-3 py-2" value="{{ old('judul', $berita->judul) }}">
            @error('judul') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <div>
            <label class="block font-semibold mb-1">Isi</label>
            <textarea name="isi" rows="6" class="w-full border rounded px-3 py-2">{{ old('isi', $berita->isi) }}</textarea>
            @error('isi') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <div>
            <label class="block font-semibold mb-1">Gambar Saat Ini</label>
            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="" class="w-32 h-24 object-cover rounded mb-2">
            @else
                <p class="italic text-gray-500">Tidak ada gambar.</p>
            @endif

            <input type="file" name="gambar" class="w-full">
            @error('gambar') <small class="text-red-600">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-black px-4 py-2 rounded">Update</button>
        <a href="{{ route('berita.index') }}" class="ml-2 text-gray-600 hover:underline">Kembali</a>
    </form>
</div>
@endsection