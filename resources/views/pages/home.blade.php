@extends('layout.app')

@section('title', 'Beranda - Website Desa')

@section('content')

<!-- Hero Section -->
<section 
    class="relative w-full h-screen bg-cover bg-center flex items-center justify-center text-white"
    style="background-image: url('{{ asset('img/bgdesapantuan.jpg') }}');">
    
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/60"></div>
    
    {{-- Konten --}}
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
            Website Desa Muara Pantuan
        </h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">
            Pusat informasi dan layanan digital masyarakat desa.
        </p>
    </div>
</section>


<!-- Berita Desa -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-bold text-center text-green-700 mb-10">Berita Desa</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($berita as $item)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                @if($item->gambar)
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="rounded-t-2xl w-full h-56 object-cover">
                @else
                <img src="{{ asset('img/default-berita.jpg') }}" alt="Default Berita" class="rounded-t-2xl w-full h-56 object-cover">
                @endif
                <div class="p-6">
                    <h5 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->judul }}</h5>
                    <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($item->isi ?? $item->deskripsi ?? ''), 120, '...') }}</p>
                    <a href="{{ route('frontend.berita.show', $item->id) }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition">Baca Selengkapnya</a>
                </div>
            </div>
            @empty
            <p class="col-span-full text-center text-gray-500">Belum ada berita terbaru.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Pengumuman -->
<section id="pengumuman" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6 text-center">Pengumuman Desa</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($pengumuman as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                @if($item->gambar)
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Pengumuman {{ $item->judul }}" class="w-full h-48 object-cover">
                @else
                <img src="{{ asset('img/default-pengumuman.jpg') }}" alt="Gambar Default Pengumuman" class="w-full h-48 object-cover">
                @endif
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                    <p class="text-gray-700 text-sm">{{ Str::limit($item->deskripsi, 120, '...') }}</p>
                    <a href="{{ route('frontend.pengumuman.show', $item->id) }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg transition">Baca Selengkapnya</a>
                </div>
            </div>
            @empty
            <p class="col-span-full text-center text-gray-500">Belum ada pengumuman tersedia.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Agenda Kegiatan -->
<section class="py-10">
    <div class="container mx-auto px-6">
        <h3 class="text-2xl font-bold mb-4">Agenda Kegiatan</h3>
        <table class="table-auto w-full border-collapse bg-white rounded-lg shadow">
            <thead class="bg-green-100">
                <tr>
                    <th class="px-4 py-2 text-center font-semibold">Kegiatan</th>
                    <th class="px-4 py-2 text-center font-semibold">Tanggal</th>
                    <th class="px-4 py-2 text-center font-semibold">Jam</th>
                    <th class="px-4 py-2 text-center font-semibold">Tempat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($agenda as $item)
                <tr class="text-gray-700 border-t">
                    <td class="px-4 py-2 text-center">{{ $item->judul }}</td>
                    <td class="px-4 py-2 text-center">{{ $item->tanggal ? $item->tanggal->translatedFormat('d F Y') : '-' }}</td>
                    <td class="px-4 py-2 text-center">
                        @if($item->jam_mulai && $item->jam_selesai)
                            {{ $item->jam_mulai }} - {{ $item->jam_selesai }}
                        @elseif($item->jam_mulai)
                            {{ $item->jam_mulai }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="px-4 py-2 text-center">{{ $item->lokasi ?? '-' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500">Belum ada agenda kegiatan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

<!-- Sejarah -->
<section id="sejarah" class="relative bg-cover bg-center bg-fixed text-[#f0e7dc] py-20" style="background-image: url('{{ asset('img/bg-sejarah.jpg') }}');">
    <div class="bg-black bg-opacity-60 absolute inset-0"></div>
    <div class="relative container mx-auto px-6 z-10">
        <h2 class="text-4xl font-bold mb-6 text-center">Sejarah Desa Muara Pantuan</h2>
        <div class="max-w-4xl mx-auto text-lg leading-relaxed space-y-4">
            <!-- Konten sejarah seperti sebelumnya -->
            <p><strong>Asal Usul:</strong> Desa Muara Pantuan berasal dari pertemuan dua aliran sungai ...</p>
            <!-- (Potong untuk ringkas, bisa kamu isi lengkap kembali) -->
        </div>
    </div>
</section>

<!-- Lokasi -->
<section id="lokasi" style="width: 100%; height: 80vh; padding: 0 1rem 3rem 1rem;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15936.510833567125!2d117.3953537745346!3d1.0580065276352345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3214786033039a47%3A0xe85de5aa09cc2f5f!2sMuara%20Pantuan!5e0!3m2!1sid!2sid!4v1628793793501!5m2!1sid!2sid"
        width="100%"
        height="100%"
        style="border: 0; border-radius: 16px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

@endsection
