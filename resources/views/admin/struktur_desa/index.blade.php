@extends('layouts.admin') {{-- atau layout yang dipakai untuk admin --}}

@section('title', 'Struktur Desa')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Struktur Desa</h1>
        <a href="{{ route('struktur_desa.create') }}" 
           class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
           ➕ Tambah Jabatan
        </a>
    </div>

    @if($struktur->count())
        <table class="w-full border border-gray-200 text-center align-middle">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Jabatan</th>
                    <th class="border px-4 py-2">Foto</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($struktur as $item)
                <tr>
                    <td class="border px-4 py-2 align-middle">{{ $loop->iteration }}</td>
                    <td class="border px-4 py-2 align-middle">{{ $item->nama }}</td>
                    <td class="border px-4 py-2 align-middle">{{ $item->jabatan }}</td>
                    <td class="border px-4 py-2 align-middle">
                        @if($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" 
                                alt="Foto" 
                                class="h-12 w-12 object-cover mx-auto rounded">
                        @else
                            <span class="text-gray-500">Tidak ada</span>
                        @endif
                    </td>
                    <td class="border px-4 py-2 align-middle">
                        <div class="inline-flex gap-2">
                            <a href="{{ route('struktur_desa.edit', $item->id) }}" 
                            class="bg-blue-500 text-white px-2 py-1 text-sm rounded hover:bg-blue-600">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('struktur_desa.destroy', $item->id) }}" 
                                method="POST" 
                                onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 text-white px-2 py-1 text-sm rounded hover:bg-red-600">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-gray-500">Belum ada data struktur desa.</p>
    @endif
</div>
@endsection