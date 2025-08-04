<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="bg-green-700 text-white p-4">
        <div class="container mx-auto">
            <a href="{{ route('admin.dashboard') }}" class="font-bold">Admin Panel</a>
            <a href="{{ route('berita.index') }}" class="ml-4">Berita</a>
            <form action="{{ route('admin.logout') }}" method="POST" class="inline ml-4">
                @csrf
                <button class="underline">Logout</button>
            </form>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</body>
</html>