<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Website Desa')</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  @include('layout.header')

  <main class="container py-4">
    @yield('content')
  </main>

<<div class="text-center text-2xl font-bold mt-5 mb-4">Lokasi Desa Muara Pantuan</div>





  @include('layout.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
