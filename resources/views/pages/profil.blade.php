@extends('layout.app')

@section('title', 'Profil Desa')

@section('content')
<section class="py-20 bg-gradient-to-b from-green-50 via-white to-green-100">
  <div class="container mx-auto px-6">
    <!-- Judul -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-green-800 mb-4">{{ $profil->nama_desa }}</h2>
      @if($profil->foto_hero)
        <img src="{{ asset('storage/'.$profil->foto_hero) }}" class="mx-auto rounded-lg shadow mb-6" alt="Foto Profil Desa">
      @endif
    </div>

    <!-- Tab Navigation -->
    <div class="mb-8 border-b">
      <ul class="flex justify-center space-x-4">
        <li><button class="tab-btn py-2 px-4 border-b-2 border-green-600 font-semibold text-green-700" data-tab="umum">Informasi Umum</button></li>
        <li><button class="tab-btn py-2 px-4 border-b-2 border-transparent hover:border-green-600" data-tab="kondisi">Kondisi dan Potensi </button></li>
        <li><button class="tab-btn py-2 px-4 border-b-2 border-transparent hover:border-green-600" data-tab="visi">Visi & Misi</button></li>
      </ul>
    </div>

    <!-- Tab Contents -->
    <div id="tab-umum" class="tab-content">
      @foreach($profil->sections->where('tipe', 'informasi_umum') as $section)
        <div class="mb-6">
          <h3 class="text-2xl font-semibold text-green-700 mb-2">{{ $section->judul }}</h3>
          @if($section->gambar)
            <img src="{{ asset('storage/'.$section->gambar) }}" class="w-full md:w-1/2 rounded-lg shadow mb-4">
          @endif
          <div class="text-gray-700">{!! nl2br(e($section->isi)) !!}</div>
        </div>
      @endforeach
    </div>

    <div id="tab-kondisi" class="tab-content hidden">
      @foreach($profil->sections->where('tipe', 'kondisi_potensi') as $section)
        <div class="mb-6">
          <h3 class="text-2xl font-semibold text-green-700 mb-2">{{ $section->judul }}</h3>
          @if($section->gambar)
            <img src="{{ asset('storage/'.$section->gambar) }}" class="w-full md:w-1/2 rounded-lg shadow mb-4">
          @endif
          <div class="text-gray-700">{!! nl2br(e($section->isi)) !!}</div>
        </div>
      @endforeach
    </div>

    <div id="tab-visi" class="tab-content hidden">
      @foreach($profil->sections->where('tipe', 'visi_misi') as $section)
        <div class="mb-6">
          <h3 class="text-2xl font-semibold text-green-700 mb-2">{{ $section->judul }}</h3>
          @if($section->gambar)
            <img src="{{ asset('storage/'.$section->gambar) }}" class="w-full md:w-1/2 rounded-lg shadow mb-4">
          @endif
          <div class="text-gray-700">{!! nl2br(e($section->isi)) !!}</div>
        </div>
      @endforeach
    </div>

  </div>
</section>

<script>
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('border-green-600', 'text-green-700', 'font-semibold'));
      btn.classList.add('border-green-600', 'text-green-700', 'font-semibold');

      document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
      document.getElementById('tab-' + btn.dataset.tab).classList.remove('hidden');
    });
  });
</script>
@endsection