@extends('layouts.admin')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 mx-auto max-w-7xl">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6 border-b pb-3">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-wide flex items-center gap-2">
            📢 Daftar Pengumuman
        </h1>
        <a href="{{ route('pengumuman.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg 
                  shadow-md transform hover:scale-105 transition-all duration-300">
           ➕ Tambah Pengumuman
        </a>
    </div>

    <!-- Alert sukses -->
    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 shadow-sm border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel -->
    @if($pengumuman->count())
        <div class="overflow-x-auto rounded-xl shadow-lg border border-gray-200 bg-white">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-green-100 border-b border-gray-300">
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">Judul</th>
                        <th class="px-6 py-3 text-left font-semibold text-gray-700">Gambar</th>
                        <th class="px-6 py-3 text-center font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumuman as $item)
                        <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-green-50 transition-colors duration-200">
                            <td class="px-6 py-4 border-b border-gray-200 font-medium text-gray-800">
                                {{ $item->judul }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200">
                                @if ($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                         alt="Gambar"
                                         class="w-24 h-16 object-cover rounded shadow-sm transition-transform duration-300 hover:scale-105">
                                @else
                                    <span class="text-gray-400 italic">Tidak ada</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 text-center space-x-3">
                                <a href="{{ route('pengumuman.edit', $item->id) }}"
                                   class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200 inline-block">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('pengumuman.destroy', $item->id) }}"
                                      method="POST"
                                      class="inline-block"
                                      onsubmit="return confirm('Yakin hapus pengumuman ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200">
                                        🗑️ Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center py-10 text-gray-500 italic">
            📭 Belum ada pengumuman.
        </div>
    @endif
</div>
@endsection