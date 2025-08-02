<header class="site-header">
  <div class="container">
    <h2>Desa Muara Pantuan</h2>
    <nav class="nav-menu">
      <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('profil') }}" class="nav-item {{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a>
      <a href="{{ route('kontak') }}" class="nav-item {{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
    </nav>
  </div>
</header>

