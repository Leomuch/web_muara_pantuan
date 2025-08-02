@extends('layout.app')

@section('title', 'Kontak - Website Desa')

@section('content')
<section class="relative py-20 bg-gradient-to-b from-green-50 to-white overflow-hidden">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-green-700 mb-4 animate-fade-in">Hubungi Kami</h2>
      <p class="text-gray-600 text-lg max-w-xl mx-auto animate-fade-in-up">
        Silakan hubungi kami untuk informasi lebih lanjut, saran, atau keperluan lainnya terkait desa Muara Pantuan.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-10 items-center">
      <!-- Form Kontak -->
      <form class="bg-white shadow-xl rounded-2xl p-8 space-y-6 animate-slide-in-left">
        <div>
          <label class="block text-sm font-semibold text-gray-700">Nama</label>
          <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-400" placeholder="Nama lengkap" />
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Email</label>
          <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-400" placeholder="Alamat Email" />
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700">Pesan</label>
          <textarea rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-400" placeholder="Tuliskan pesan..."></textarea>
        </div>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg transition duration-300 shadow-md">
          Kirim Pesan
        </button>
      </form>

      <!-- Informasi Kontak -->
      <div class="animate-slide-in-right">
        <div class="bg-white shadow-lg rounded-2xl p-8">
          <h3 class="text-2xl font-semibold text-green-700 mb-4">Informasi Kontak</h3>
          <ul class="space-y-3 text-gray-700">
            <li><strong>Alamat:</strong> Jl. Desa Muara Pantuan, Kec. Anggana, Kutai Kartanegara</li>
            <li><strong>Telepon:</strong> 0812-3456-7890</li>
            <li><strong>Email:</strong> info@desamuara.id</li>
            <li><strong>Jam Layanan:</strong> Senin - Jumat, 08.00 - 16.00</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Google Maps -->
<section class="pt-10">
  <div class="container mx-auto px-4">
    <div class="rounded-2xl overflow-hidden shadow-lg animate-zoom-in">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15936.510833567125!2d117.3953537745346!3d1.0580065276352345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3214786033039a47%3A0xe85de5aa09cc2f5f!2sMuara%20Pantuan!5e0!3m2!1sid!2sid!4v1628793793501!5m2!1sid!2sid"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
@endsection
