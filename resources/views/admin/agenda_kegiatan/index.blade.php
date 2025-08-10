@extends('layouts.admin')

@section('title', 'Daftar Agenda Kegiatan')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6 border-b pb-3">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-wide flex items-center gap-2">
            📅 Daftar Agenda Kegiatan
        </h1>
        <a href="{{ route('agenda_kegiatan.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg 
                  shadow-md transform hover:scale-105 transition-all duration-300">
           ➕ Tambah Agenda
        </a>
    </div>

    <!-- Tabel -->
    @if($agenda->count())
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-green-100 border-b border-gray-300">
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Judul</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Tanggal</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Jam Mulai</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Jam Selesai</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Lokasi</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700">Status</th>
                        <th class="px-4 py-3 text-center font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agenda as $item)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-green-50 transition-colors duration-200">
                        <td class="px-4 py-3 border-b border-gray-200">{{ $item->judul }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $item->tanggal ? $item->tanggal->format('d-m-Y') : '-' }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $item->jam_mulai ?? '-' }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $item->jam_selesai ?? '-' }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $item->lokasi ?? '-' }}</td>
                        <td class="px-4 py-3 border-b border-gray-200">{{ $item->status ?? '-' }}</td>
                        <td class="px-4 py-3 border-b border-gray-200 text-center align-middle">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('agenda_kegiatan.edit', $item->id) }}" 
                                   class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200">
                                    ✏️ Edit
                                </a>
                                <form action="{{ route('agenda_kegiatan.destroy', $item->id) }}" 
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
            📭 Belum ada data agenda.
        </div>
    @endif
</div>
@endsection