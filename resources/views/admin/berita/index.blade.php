@extends('layouts.admin')

@section('content')
<div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200 mx-auto max-w-7xl">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6 border-b pb-3">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-wide flex items-center gap-2">
            📄 Daftar Berita
        </h1>
        <a href="{{ route('berita.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg 
                  shadow-md transform hover:scale-105 transition-all duration-300">
           ➕ Tambah Berita
        </a>
    </div>

    <!-- Alert sukses -->
    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 shadow-sm border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel -->
    @if($beritas->count())
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
                    @foreach ($beritas as $berita)
                        <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-green-50 transition-colors duration-200">
                            <td class="px-6 py-4 border-b border-gray-200 font-medium text-gray-800">
                                {{ $berita->judul }}
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200">
                                @if ($berita->gambar)
                                    <img src="{{ asset('storage/' . $berita->gambar) }}"
                                         alt="Gambar"
                                         class="w-24 h-16 object-cover rounded shadow-sm transition-transform duration-300 hover:scale-105">
                                @else
                                    <span class="text-gray-400 italic">Tidak ada</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 border-b border-gray-200 text-center space-x-3">
                                <a href="{{ route('berita.edit', $berita->id) }}"
                                   class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200 inline-block">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('berita.destroy', $berita->id) }}"
                                      method="POST"
                                      class="inline-block"
                                      onsubmit="return confirm('Yakin hapus berita ini?')">
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
            📭 Belum ada berita.
        </div>
    @endif
</div>
@endsection