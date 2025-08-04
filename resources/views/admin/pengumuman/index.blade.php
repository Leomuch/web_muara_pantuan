@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Pengumuman</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('pengumuman.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Pengumuman
    </a>

    <table class="table-auto w-full bg-white shadow rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumuman as $item)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $item->judul }}</td>
                <td class="px-4 py-2 space-x-2">
                    <a href="{{ route('pengumuman.edit', $item->id) }}" class="text-blue-600 hover:underline">Edit</a>

                    <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus pengumuman ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if ($pengumuman->isEmpty())
            <tr>
                <td colspan="2" class="text-center text-gray-500 py-4">Belum ada pengumuman.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection