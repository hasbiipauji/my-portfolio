<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/typewriter-effect@latest/dist/core.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pesan Masuk Baru</title>
</head>
<body class="bg-green-50 font-nunito min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="bg-green-600 text-white text-center py-4">
            <h2 class="text-2xl font-bold">Pesan Masuk Baru</h2>
        </div>
        
        <div class="p-6 space-y-4">
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Detail Pengirim</h3>
                <div class="bg-gray-100 p-3 rounded-lg">
                    <p class="text-gray-700"><strong>Nama:</strong> {{ $data['name'] }}</p>
                    <p class="text-gray-700"><strong>Email:</strong> {{ $data['email'] }}</p>
                </div>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pesan</h3>
                <div class="bg-gray-100 p-4 rounded-lg">
                    <p class="text-gray-700">{{ $data['message'] }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-200 text-center py-4 text-sm text-gray-600">
            <p>&copy; {{ date('Y') }} - My Portfolio</p>
        </div>
    </div>
</body>
</html>