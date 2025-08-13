@extends('layouts.admin')

@section('title', 'Kelola Section Profil')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">🏛 Section Profil: {{ $profil->nama_desa }}</h1>
        <div class="flex gap-2">
            <a href="{{ route('profil.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">← Kembali</a>
            <a href="{{ route('profil.sections.create', ['profil' => $profil->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah Section</a>
        </div>
    </div>

    @if($sections->count())
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-2 border">Tipe</th>
                    <th class="p-2 border">Judul</th>
                    <th class="p-2 border">Gambar</th>
                    <th class="p-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sections as $section)
                    <tr>
                        <td class="p-2 border">{{ $section->tipe }}</td>
                        <td class="p-2 border">{{ $section->judul }}</td>
                        <td class="p-2 border">
                            @if($section->gambar)
                                <img src="{{ asset('storage/' . $section->gambar) }}" class="w-24">
                            @endif
                        </td>
                        <td class="p-2 border">
                            <a href="{{ route('profil.sections.edit', ['profil' => $profil->id, 'section' => $section->id]) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('profil.sections.destroy', ['profil' => $profil->id, 'section' => $section->id]) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada section.</p>
    @endif
</div>
@endsection