<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- NAVIGATION -->
    <nav class="bg-green-700 sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <!-- Kiri: Logo & Menu -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('admin.dashboard') }}"
                   class="text-xl font-bold text-white hover:text-green-200 transition duration-200">
                    🛠️ Admin Panel
                </a>

                <a href="{{ route('berita.index') }}"
                   class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded-md shadow-sm text-sm font-semibold transition duration-300">
                    📄 Berita
                </a>

                <a href="{{ route('pengumuman.index') }}"
                   class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded-md shadow-sm text-sm font-semibold transition duration-300">
                    📢 Pengumuman
                </a>
            </div>

            <!-- Kanan: Logout -->
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="bg-white text-green-700 hover:bg-gray-100 border border-green-300 px-4 py-2 rounded-md shadow-sm text-sm font-semibold transition duration-300">
                    🔒 Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-1 container mx-auto px-4 py-8 animate-fade-in">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="text-center text-sm text-gray-500 py-4">
        &copy; {{ date('Y') }} Admin Desa. All rights reserved.
    </footer>

    <!-- ANIMASI -->
    <style>
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</body>
</html>
