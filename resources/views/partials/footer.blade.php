<footer class="bg-green-700 text-white py-10">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start animate-fadeInUp">

      <!-- Info Desa -->
      <div>
        <h3 class="text-2xl font-semibold mb-3">Desa Muara Pantuan</h3>
        <p class="text-sm leading-relaxed">
          Website resmi Desa Muara Pantuan sebagai pusat informasi, pelayanan digital, dan publikasi kegiatan masyarakat.
        </p>
      </div>

      <!-- Navigasi Cepat -->
      <div>
        <h3 class="text-xl font-semibold mb-3">Navigasi</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="{{ route('home') }}" class="hover:underline hover:ml-1 transition-all">Beranda</a></li>
          <li><a href="{{ route('profil') }}" class="hover:underline hover:ml-1 transition-all">Profil</a></li>
          <li><a href="{{ url('/struktur-desa') }}" class="hover:underline hover:ml-1 transition-all">Struktur Desa</a></li>
          <li><a href="{{ route('kontak') }}" class="hover:underline hover:ml-1 transition-all">Kontak</a></li>
        </ul>
      </div>

      <!-- Sosial Media -->
      <div>
        <h3 class="text-xl font-semibold mb-3">Ikuti Kami</h3>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-300 transition duration-300 transform hover:scale-110">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.993 9.993 0 006.837 9.5v-6.717h-2.06v-2.783h2.06V9.797c0-2.032 1.209-3.165 3.057-3.165.888 0 1.817.157 1.817.157v1.996h-1.025c-1.012 0-1.326.63-1.326 1.277v1.536h2.257l-.361 2.783h-1.896v6.717A9.993 9.993 0 0022 12z"/>
            </svg>
          </a>
          <a href="#" class="hover:text-gray-300 transition duration-300 transform hover:scale-110">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M21.35 11.1c0-5.86-4.76-10.61-10.63-10.61S.1 5.24.1 11.1c0 5.86 4.76 10.63 10.63 10.63S21.35 16.96 21.35 11.1zM9.58 16.45V9.74l6.08 3.35-6.08 3.36z"/>
            </svg>
          </a>
          <a href="#" class="hover:text-gray-300 transition duration-300 transform hover:scale-110">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.025-3.038-1.852-3.038-1.852 0-2.136 1.447-2.136 2.942v5.665H9.353V9h3.414v1.561h.049c.476-.898 1.637-1.852 3.367-1.852 3.6 0 4.267 2.368 4.267 5.451v6.292zM5.337 7.433a2.062 2.062 0 110-4.124 2.062 2.062 0 010 4.124zM7.123 20.452H3.552V9h3.571v11.452z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="border-t border-white mt-10 pt-6 text-center text-sm text-white">
      &copy; {{ date('Y') }} Desa Muara Pantuan. All rights reserved.
    </div>
  </div>
</footer>
