@extends('layout.app')

@section('title', 'Profil Desa')

@section('content')

<section class="py-20 bg-gradient-to-b from-green-50 via-white to-green-100">
  <div class="container mx-auto px-6">
    <!-- Judul -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-green-800 mb-4 animate-fadeInDown">Profil Desa Muara Pantuan</h2>
      <p class="text-lg text-gray-600 animate-fadeIn delay-100">Mengenal lebih dekat tentang sejarah, visi, misi, dan struktur pemerintahan Desa Muara Pantuan.</p>
    </div>

    <!-- Sejarah -->
    <div class="mb-16 md:flex md:items-center gap-10 animate-fadeInUp delay-200">
      <img src="{{ asset('img/sejarah.jpg') }}" alt="Sejarah Desa" class="rounded-xl shadow-lg w-full md:w-1/2 mb-6 md:mb-0">
      <div class="md:w-1/2">
        <h3 class="text-2xl font-semibold text-green-700 mb-4">Sejarah Singkat</h3>
        <p class="text-gray-700 leading-relaxed">
          Desa Muara Pantuan telah ada sejak zaman penjajahan, dikenal sebagai pusat jalur transportasi sungai dan memiliki akar budaya pesisir yang kuat. Dahulu dikenal sebagai "Desa Murah Bantuan", desa ini telah berkembang menjadi desa mandiri berbasis kelautan dan pertanian tambak.
        </p>
      </div>
    </div>

    <!-- Visi dan Misi -->
    <div class="bg-white p-8 rounded-2xl shadow-xl mb-16 animate-fadeInUp delay-300">
      <h3 class="text-2xl font-semibold text-green-700 mb-4 text-center">Visi dan Misi</h3>
      <div class="grid md:grid-cols-2 gap-8 text-gray-700">
        <div>
          <h4 class="font-semibold text-green-600 mb-2">Visi</h4>
          <p>Mewujudkan Desa Muara Pantuan sebagai desa mandiri, sejahtera, dan berbasis kearifan lokal.</p>
        </div>
        <div>
          <h4 class="font-semibold text-green-600 mb-2">Misi</h4>
          <ul class="list-disc ml-5 space-y-2">
            <li>Meningkatkan kualitas pendidikan dan kesehatan masyarakat.</li>
            <li>Memajukan ekonomi berbasis tambak dan wisata mangrove.</li>
            <li>Menjaga nilai-nilai budaya dan tradisi desa.</li>
            <li>Memperkuat pelayanan publik berbasis digital.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Struktur Pemerintahan -->
    <div class="animate-fadeInUp delay-500">
      <h3 class="text-2xl font-semibold text-green-700 mb-6 text-center">Struktur Pemerintahan</h3>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
          <img src="{{ asset('img/kepala-desa.jpg') }}" alt="Kepala Desa" class="w-24 h-24 mx-auto rounded-full shadow-md mb-4 object-cover">
          <h4 class="font-bold text-lg text-green-800">H. Edy</h4>
          <p class="text-gray-600 text-sm">Kepala Desa</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
          <img src="{{ asset('img/sekdes.jpg') }}" alt="Sekretaris Desa" class="w-24 h-24 mx-auto rounded-full shadow-md mb-4 object-cover">
          <h4 class="font-bold text-lg text-green-800">Sardila</h4>
          <p class="text-gray-600 text-sm">Sekretaris Desa</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
          <img src="{{ asset('img/kadus.jpg') }}" alt="Kepala Dusun" class="w-24 h-24 mx-auto rounded-full shadow-md mb-4 object-cover">
          <h4 class="font-bold text-lg text-green-800">lorem</h4>
          <p class="text-gray-600 text-sm">ipsum</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
