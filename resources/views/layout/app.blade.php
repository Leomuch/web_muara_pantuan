<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Desa')</title>

    {{-- Vite CSS --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten Halaman --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Vite JS (jika kamu punya JS tambahan) --}}
    @vite('resources/js/app.js')
</body>
</html>
