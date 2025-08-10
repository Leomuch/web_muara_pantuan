@extends('layouts.admin')

@section('title', 'Edit Agenda Kegiatan')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
    <h1 class="text-2xl font-bold mb-6">Edit Agenda Kegiatan</h1>

    <form action="{{ route('agenda_kegiatan.update', $agenda->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-semibold">Judul <span class="text-red-500">*</span></label>
            <input type="text" name="judul" value="{{ old('judul', $agenda->judul) }}" 
                   class="w-full border rounded px-3 py-2 @error('judul') border-red-500 @enderror">
            @error('judul')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Tanggal Mulai <span class="text-red-500">*</span></label>
            <input type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai', $agenda->tanggal_mulai->format('Y-m-d')) }}" 
                   class="w-full border rounded px-3 py-2 @error('tanggal_mulai') border-red-500 @enderror">
            @error('tanggal_mulai')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai', optional($agenda->tanggal_selesai)->format('Y-m-d')) }}" 
                   class="w-full border rounded px-3 py-2 @error('tanggal_selesai') border-red-500 @enderror">
            @error('tanggal_selesai')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Lokasi</label>
            <input type="text" name="lokasi" value="{{ old('lokasi', $agenda->lokasi) }}" 
                   class="w-full border rounded px-3 py-2 @error('lokasi') border-red-500 @enderror">
            @error('lokasi')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" rows="4" 
                      class="w-full border rounded px-3 py-2 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi', $agenda->deskripsi) }}</textarea>
            @error('deskripsi')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block mb-1 font-semibold">Status</label>
            <input type="text" name="status" value="{{ old('status', $agenda->status) }}" 
                   class="w-full border rounded px-3 py-2 @error('status') border-red-500 @enderror">
            @error('status')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">💾 Update</button>
            <a href="{{ route('agenda_kegiatan.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">↩️ Kembali</a>
        </div>
    </form>
</div>
@endsection