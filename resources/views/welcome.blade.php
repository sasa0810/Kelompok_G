<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- Tambahkan Tailwind (opsional jika sudah terinstall via Laravel Mix/Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Selamat Datang di Laravel!</h1>
        <p class="text-gray-700 mb-6">Ini adalah halaman <b>welcome.blade.php</b> sederhana.</p>
        <a href="{{ url('/home') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
            Masuk ke Home
        </a>
    </div>
</body>
</html>

