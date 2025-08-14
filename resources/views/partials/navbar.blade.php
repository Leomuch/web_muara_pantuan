<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<nav class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20 items-center">

      <!-- Logo digeser sedikit ke kiri -->
      <div class="flex-shrink-0 -ml-3">
        <a href="{{ url('/') }}">
          <img src="{{ asset('img/logodesa2.png') }}" 
               alt="Logo Desa" 
               class="h-16 w-auto">
        </a>
      </div>

      <!-- Menu navigasi -->
      <div class="hidden md:flex space-x-8 items-center">
        @php
            $navItems = [
                ['label' => 'Beranda', 'url' => '/'],
                ['label' => 'Profil', 'url' => '/profil'],
                ['label' => 'Struktur Desa', 'url' => '/struktur-desa'],
                ['label' => 'Kontak', 'url' => '/kontak'],
            ];
        @endphp

        @foreach ($navItems as $item)
          <a href="{{ url($item['url']) }}" 
             class="nav-link relative group text-gray-700 hover:text-blue-600 transition-colors duration-300 px-3">
            {{ $item['label'] }}
            <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
          </a>
        @endforeach

        <!-- Tombol Login -->
        <a href="{{ url('/admin/login') }}" 
   class="text-gray-700 hover:text-blue-600 transition-colors duration-300" 
   title="Login">
    <i class="fa-solid fa-right-to-bracket text-xl"></i>
</a>
      </div>

    </div>
  </div>
</nav>
