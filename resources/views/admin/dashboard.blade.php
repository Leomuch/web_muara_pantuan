<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out both;
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
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col items-center justify-center px-4">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-xl animate-fade-in text-center">
        <h1 class="text-3xl font-bold text-green-700 mb-4">🎉 Selamat Datang Admin!</h1>
        <p class="text-gray-600 mb-6">Anda berhasil login sebagai admin. Silakan pilih menu di bawah ini:</p>

        <div class="flex flex-col md:flex-row gap-4 justify-center mb-6">
            <a href="{{ route('berita.index') }}"
               class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-md shadow transition duration-300">
                📄 Kelola Berita
            </a>

            <a href="{{ route('pengumuman.index') }}"
               class="bg-green-500 hover:bg-green-600 text-black px-5 py-3 rounded-md shadow transition duration-300">
                📢 Kelola Pengumuman
            </a>
        </div>

        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit"
                class="text-red-600 hover:underline text-sm font-semibold transition duration-200">
                🔓 Logout
            </button>
        </form>
    </div>

</body>
</html>
