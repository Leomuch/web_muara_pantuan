<nav class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20 items-center"> {{-- h-20 untuk navbar lebih tinggi --}}
      <div class="flex-shrink-0">
        <a href="{{ url('/') }}">
          <img src="{{ asset('img/logodesa2.png') }}" 
               alt="Logo Desa" 
               class="h-16 w-auto"> {{-- h-16 = tinggi sekitar 64px --}}
        </a>
      </div>

      <div class="hidden md:flex space-x-8">
        @php
            $navItems = [
                ['label' => 'Beranda', 'url' => '/'],
                ['label' => 'Profil', 'url' => '/profil'],
                ['label' => 'Struktur Desa', 'url' => '/struktur-desa'],
                ['label' => 'Kontak', 'url' => '/kontak'],
            ];
        @endphp

        @foreach ($navItems as $item)
          <a href="{{ url($item['url']) }}" class="nav-link relative group text-gray-700 hover:text-blue-600 transition-colors duration-300 px-3">
            {{ $item['label'] }}
            <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</nav>
