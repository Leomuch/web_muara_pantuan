@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6 animate-fade-in">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">📢 Daftar Pengumuman</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-6 shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('pengumuman.create') }}"
       class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-5 py-2 rounded-lg shadow-md transition duration-300 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4v16m8-8H4"/>
        </svg>
        Tambah Pengumuman
    </a>

    <div class="overflow-x-auto rounded-lg shadow-lg">
        <table class="min-w-full bg-white text-left text-sm">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                <tr>
                    <th class="px-6 py-3">Judul</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($pengumuman as $item)
                    <tr class="hover:bg-gray-50 transition duration-300">
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $item->judul }}</td>
                        <td class="px-6 py-4 text-center space-x-3">
                            <a href="{{ route('pengumuman.edit', $item->id) }}"
                               class="inline-flex items-center text-blue-600 hover:text-blue-800 transition duration-200">
                                ✏️ Edit
                            </a>

                            <form action="{{ route('pengumuman.destroy', $item->id) }}"
                                  method="POST"
                                  class="inline-block"
                                  onsubmit="return confirm('Yakin hapus pengumuman ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="inline-flex items-center text-red-600 hover:text-red-800 transition duration-200">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="px-6 py-4 text-center text-gray-500">
                            Belum ada pengumuman.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Tambahkan animasi masuk -->
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
