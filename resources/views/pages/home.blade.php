@extends('layout.app')

@section('title', 'Beranda - Website Desa')

@section('content')
<!-- Hero Section -->
<section class="relative w-full h-screen bg-no-repeat bg-center bg-cover flex items-center justify-center text-white" style="background-image: url('{{ asset('img/bgdesapantuan.jpg') }}');">
  <!-- Overlay gelap -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  
  <!-- Konten -->
  <div class="relative z-10 text-center px-6">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Website Desa Muara Pantuan</h1>
    <p class="text-base md:text-lg lg:text-xl max-w-2xl mx-auto">Media informasi dan layanan digital untuk masyarakat desa, menyampaikan pengumuman, berita terkini, serta agenda kegiatan.</p>
  </div>
</section>




  <h3>Berita Desa</h3>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="{{ asset('img/berita1.jpg') }}" class="card-img-top" alt="Berita 1">
        <div class="card-body">
          <h5 class="card-title">Gotong Royong Bersihkan Lingkungan</h5>
          <p class="card-text">Warga desa bergotong‑royong membersihkan parit dan jalan desa pada hari Minggu.</p>
          <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

  <section id="pengumuman" class="py-16 bg-gray-100">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold mb-6 text-center">Pengumuman Desa</h2>

    {{-- Contoh pengumuman --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="{{ asset('img/pengumuman1.jpg') }}" alt="Gambar Pengumuman 1" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Pemberitahuan Pemadaman Listrik</h3>
          <p class="text-gray-700 text-sm">Akan ada pemadaman listrik pada 25 Juli 2025 dari pukul 08.00 - 12.00 di wilayah RT 1 hingga RT 3.</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img src="{{ asset('img/pengumuman2.jpg') }}" alt="Gambar Pengumuman 2" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold mb-2">Vaksinasi Gratis</h3>
          <p class="text-gray-700 text-sm">Vaksinasi gratis akan diadakan pada tanggal 27 Juli 2025 di Balai Desa mulai pukul 09.00.</p>
        </div>
      </div>

      {{-- Tambahkan pengumuman lainnya di sini --}}
    </div>
  </div>
</section>


  <h3>Agenda Kegiatan</h3>
  <table class="table table-hover">
    <thead class="table-light">
      <tr>
        <th>Tanggal</th>
        <th>Kegiatan</th>
        <th>Tempat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>27 Juli 2025</td>
        <td>Pelatihan UMKM Digital</td>
        <td>Balai Desa</td>
      </tr>
      <tr>
        <td>30 Juli 2025</td>
        <td>Pertemuan RT se‑Desa</td>
        <td>Aula Serbaguna</td>
      </tr>
    </tbody>
  </table>

  <section id="sejarah" class="relative bg-cover bg-center bg-fixed text-[#5D3A00] py-20" style="background-image: url('{{ asset('img/bg-sejarah.jpg') }}');">
  <div class="bg-black bg-opacity-60 absolute inset-0"></div>
  <div class="relative container mx-auto px-6 z-10">
    <h2 class="text-4xl font-bold mb-6 text-center">Sejarah Desa Muara Pantuan</h2>
    <div class="max-w-4xl mx-auto text-lg leading-relaxed space-y-4">
      <p><strong>Asal Usul:</strong> Desa Muara Pantuan berasal dari pertemuan dua aliran sungai yang membentuk muara alami yang dimanfaatkan sebagai jalur transportasi sejak zaman dahulu.</p>
      <p><strong>Nama Desa:</strong> Nama "Muara Pantuan" diambil dari kata "muara" yang berarti pertemuan sungai, dan "pantuan" yang berarti pengamatan atau penjagaan, karena desa ini dahulu merupakan titik pantau masuknya pedagang dan pelaut lokal.</p>
      <p><strong>Tradisi:</strong> Tradisi utama desa ini adalah pesta laut setiap tahun untuk menghormati alam dan memohon keselamatan dalam mencari nafkah di perairan.</p>
      <p><strong>Luas dan Kependudukan:</strong> Desa Muara Pantuan terletak di Kecamatan Anggana, Kabupaten Kutai Kartanegara, dengan total luas wilayah mencapai 51.332 hektare. Luas konservasi darat sebesar 28.027 hektare, konservasi perairan/laut sebesar 13.851 hektare, dan wilayah pemukiman penduduk hanya seluas 119 hektare. Jumlah penduduk mencapai 5.478 jiwa yang terdiri dari 3.021 laki-laki dan 2.457 perempuan dengan 1.687 kepala keluarga, sebagian besar berprofesi sebagai nelayan (Arditiya et al., 2021).</p>
      <p>Hingga kini, desa ini terus menjaga kearifan lokal dan mengembangkan potensi wisata bahari serta ekowisata berbasis mangrove.</p>
    </div>
  </div>
</section>

<section id="lokasi" style="width: 100%; height: 80vh; padding: 0 1rem 3rem 1rem;">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15936.510833567125!2d117.3953537745346!3d1.0580065276352345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3214786033039a47%3A0xe85de5aa09cc2f5f!2sMuara%20Pantuan%2C%20Kec.%20Anggana%2C%20Kabupaten%20Kutai%20Kartanegara%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1628793793501!5m2!1sid!2sid"
    width="100%"
    height="100%"
    style="border: 0; border-radius: 16px;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>


  
@endsection
