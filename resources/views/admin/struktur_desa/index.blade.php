@extends('layouts.admin')

@section('title', 'Struktur Desa')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6 border-b pb-3">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-wide flex items-center gap-2">
            👔 Struktur Desa
        </h1>
        <a href="{{ route('struktur_desa.create') }}" 
           class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg 
                  shadow-md transform hover:scale-105 transition-all duration-300">
           ➕ Tambah Jabatan
        </a>
    </div>

    <!-- Tabel -->
    @if($struktur->count())
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-green-100 border-b border-gray-300">
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">No</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Nama</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Jabatan</th>
                        <th class="px-4 py-3 text-center font-semibold text-gray-700">Foto</th>
                        <th class="px-4 py-3 text-center font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($struktur as $item)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-green-50 transition-colors duration-200">
                        <td class="px-4 py-3 border-b border-gray-200">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 border-b border-gray-200 font-medium text-gray-800">{{ $item->nama }}</td>
                        <td class="px-4 py-3 border-b border-gray-200 text-gray-700">{{ $item->jabatan }}</td>
                        <td class="px-4 py-3 border-b border-gray-200 text-center">
                            @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" 
                                     alt="Foto {{ $item->nama }}" 
                                     class="h-14 w-14 object-cover mx-auto rounded-full shadow-md border border-gray-300">
                            @else
                                <span class="text-gray-500 italic">Tidak ada</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 border-b border-gray-200 text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('struktur_desa.edit', $item->id) }}" 
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('struktur_desa.destroy', $item->id) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-10 text-gray-500">
            📭 Belum ada data struktur desa.
        </div>
    @endif
</div>
@endsection
