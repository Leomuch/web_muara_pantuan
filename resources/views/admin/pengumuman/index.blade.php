@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 animate-fade-in">
    <!-- Judul Halaman -->
    <div class="flex justify-between items-center mb-6 border-b pb-3">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-wide flex items-center gap-2">
            📢 Daftar Pengumuman
        </h1>

        <a href="{{ route('pengumuman.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg 
                  shadow-md transform hover:scale-105 transition-all duration-300 inline-flex items-center gap-2">
            ➕ Tambah Pengumuman
        </a>
    </div>

    <!-- Alert sukses -->
    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel -->
    <div class="overflow-x-auto rounded-xl shadow-lg border border-gray-200">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-green-100 border-b border-gray-300">
                    <th class="px-6 py-3 text-left font-semibold text-gray-700">Judul</th>
                    <th class="px-6 py-3 text-center font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengumuman as $item)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-green-50 transition-colors duration-200">
                        <td class="px-6 py-4 border-b border-gray-200 font-medium text-gray-800">
                            {{ $item->judul }}
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200 text-center space-x-3">
                            <a href="{{ route('pengumuman.edit', $item->id) }}"
                               class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg shadow-sm transition duration-200">
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
                @empty
                    <tr>
                        <td colspan="2" class="px-6 py-4 text-center text-gray-500 italic">
                            📭 Belum ada pengumuman.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Animasi masuk -->
<style>
    .animate-fade-in {
        animation: fadeIn 0.6s ease-in-out both;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection
