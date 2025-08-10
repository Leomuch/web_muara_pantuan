@extends('layouts.admin')

@section('title', 'Tambah Agenda Kegiatan')

@section('content')
<div class="container mx-auto p-4 max-w-3xl">
    <h1 class="text-2xl font-bold mb-6">Tambah Agenda Kegiatan</h1>

    <form action="{{ route('agenda_kegiatan.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-semibold">Judul <span class="text-red-500">*</span></label>
            <input type="text" name="judul" value="{{ old('judul') }}" 
                   class="w-full border rounded px-3 py-2 @error('judul') border-red-500 @enderror" required>
            @error('judul')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Tanggal <span class="text-red-500">*</span></label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}" 
                   class="w-full border rounded px-3 py-2 @error('tanggal') border-red-500 @enderror" required>
            @error('tanggal')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Jam Mulai</label>
            <input type="time" name="jam_mulai" value="{{ old('jam_mulai') }}" step="60"
                   class="w-full border rounded px-3 py-2 @error('jam_mulai') border-red-500 @enderror">
            @error('jam_mulai')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Jam Selesai</label>
            <input type="time" name="jam_selesai" value="{{ old('jam_selesai') }}" step="60"
                   class="w-full border rounded px-3 py-2 @error('jam_selesai') border-red-500 @enderror">
            @error('jam_selesai')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Lokasi</label>
            <input type="text" name="lokasi" value="{{ old('lokasi') }}" 
                   class="w-full border rounded px-3 py-2 @error('lokasi') border-red-500 @enderror">
            @error('lokasi')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" rows="4" 
                      class="w-full border rounded px-3 py-2 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Status</label>
            <select name="status" 
                    class="w-full border rounded px-3 py-2 @error('status') border-red-500 @enderror">
                <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="Batal" {{ old('status') == 'Batal' ? 'selected' : '' }}>Batal</option>
            </select>
            @error('status')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">💾 Simpan</button>
            <a href="{{ route('agenda_kegiatan.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection