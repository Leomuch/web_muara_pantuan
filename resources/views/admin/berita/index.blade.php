@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6 border-b pb-2 flex items-center gap-2">
        📢 Daftar Berita
    </h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded-md mb-4 shadow-sm border border-green-300 transition duration-500 ease-out">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-end mb-4">
        <a href="{{ route('berita.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
            + Tambah Berita
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="w-full table-auto border-collapse">
            <thead class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
                <tr>
                    <th class="px-6 py-3 text-left">Judul</th>
                    <th class="px-6 py-3 text-left">Gambar</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-800 text-sm font-medium">
                @forelse ($beritas as $berita)
                    <tr class="border-b hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4">{{ $berita->judul }}</td>
                        <td class="px-6 py-4">
                            @if ($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}"
                                     alt="Gambar"
                                     class="w-24 h-16 object-cover rounded shadow-sm transition-transform duration-300 hover:scale-105">
                            @else
                                <span class="text-gray-400 italic">Tidak ada</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-4 items-center">
                                <a href="{{ route('berita.edit', $berita->id) }}"
                                   class="text-blue-600 hover:text-blue-800 font-semibold transition duration-200 hover:underline">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('berita.destroy', $berita->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin hapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-800 font-semibold transition duration-200 hover:underline">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-gray-500 py-6 italic">
                            Belum ada berita yang tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection