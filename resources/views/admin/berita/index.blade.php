@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Berita</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('berita.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Berita
    </a>

    <table class="table-auto w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Gambar</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $berita)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $berita->judul }}</td>
                <td class="px-4 py-2">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="" class="w-24 h-16 object-cover rounded">
                    @else
                        <span class="text-gray-500 italic">Tidak ada</span>
                    @endif
                </td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('berita.edit', $berita->id) }}" class="text-blue-600 hover:underline">Edit</a>

                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if ($beritas->isEmpty())
            <tr>
                <td colspan="3" class="text-center text-gray-500 py-4">Belum ada berita.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
