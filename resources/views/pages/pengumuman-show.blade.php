@extends('layout.app')

@section('title', $pengumuman->judul)

@section('content')
<section class="py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">{{ $pengumuman->judul }}</h1>
        <p class="text-gray-500 text-sm mb-6">
            Dipublikasikan: {{ $pengumuman->created_at->format('d M Y') }}
        </p>
        @if($pengumuman->gambar)
            <img src="{{ asset('storage/' . $pengumuman->gambar) }}" 
                 alt="{{ $pengumuman->judul }}" 
                 class="w-full max-w-4xl mb-6 rounded-lg shadow">
        @endif
        <div class="prose max-w-none">
            {!! $pengumuman->isi !!}
        </div>
    </div>
</section>
@endsection