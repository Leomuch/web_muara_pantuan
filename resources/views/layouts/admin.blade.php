{{-- resources/views/layouts/admin.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Sidebar slide-in animation */
        @keyframes slideIn {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        .animate-slide-in {
            animation: slideIn 0.6s ease-out both;
        }

        /* Fade-in main content */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-in-out both;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white flex flex-col shadow-lg animate-slide-in">
        <div class="px-6 py-5 text-2xl font-bold border-b border-blue-700 tracking-wide">
            🌾 Admin Desa
        </div>
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="{{ route('berita.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">📄 Kelola Berita</a>
            <a href="{{ route('pengumuman.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">📢 Kelola Pengumuman</a>
            <a href="{{ route('profil.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">🏛 Profil Desa</a>
            <a href="{{ route('struktur_desa.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">👔 Jabatan Desa</a>
            <a href="{{ route('agenda_kegiatan.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">📅 Agenda Kegiatan</a>
        </nav>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="px-4 py-4 border-t border-blue-700">
            @csrf
            <button type="submit"
                    class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 px-4 py-2 rounded-lg shadow-md transform hover:scale-105 transition duration-300">
                🔓 Logout
            </button>
        </form>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 animate-fade-in">
        @yield('content')
    </main>

    <!-- SweetAlert Notification -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session("success") }}',
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session("error") }}',
                showConfirmButton: true
            });
        </script>
    @endif

</body>
</html>
