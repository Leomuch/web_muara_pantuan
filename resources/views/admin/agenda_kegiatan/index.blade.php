@extends('layouts.admin')

@section('title', 'Daftar Agenda Kegiatan')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Daftar Agenda Kegiatan</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('agenda_kegiatan.create') }}" class="inline-block mb-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">➕ Tambah Agenda</a>

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-green-100">
                <th class="border border-gray-300 px-4 py-2">Judul</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal Mulai</th>
                <th class="border border-gray-300 px-4 py-2">Tanggal Selesai</th>
                <th class="border border-gray-300 px-4 py-2">Lokasi</th>
                <th class="border border-gray-300 px-4 py-2">Status</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($agenda as $item)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $item->judul }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->tanggal_mulai->format('d-m-Y') }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->tanggal_selesai ? $item->tanggal_selesai->format('d-m-Y') : '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->lokasi ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->status ?? '-' }}</td>
                <td class="border px-4 py-2 align-middle">
                        <div class="inline-flex gap-2">
                            <a href="{{ route('agenda_kegiatan.edit', $item->id) }}" 
                            class="bg-blue-500 text-white px-2 py-1 text-sm rounded hover:bg-blue-600">
                                ✏️ Edit
                            </a>
                            <form action="{{ route('agenda_kegiatan.destroy', $item->id) }}" 
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
            @empty
            <tr>
                <td colspan="6" class="text-center p-4">Belum ada data agenda.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection