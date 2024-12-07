@extends('admin.main')

@section('title', 'Dashboard')

@section('nama-halaman')
    Dashboard
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Pesan Masuk Card -->
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform transition duration-300 hover:scale-105">
            <div class="p-6 flex items-center justify-between">
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Pesan</h3>
                    </div>
                    <div class="text-3xl font-extrabold text-purple-600">
                        {{ $message }}
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Total pesan yang masuk</p>
                </div>
                <div class="ml-4">
                    <div class="w-16 h-16 bg-gradient-to-tr from-purple-700 to-pink-500 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-message text-white text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Projects Card -->
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform transition duration-300 hover:scale-105">
            <div class="p-6 flex items-center justify-between">
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Projects</h3>                    
                      </div>
                    <div class="text-3xl font-extrabold text-purple-600">
                        {{ $project }}
                    </div>
                    <p class="text-sm text-gray-500 mt-2">Total projects</p>
                </div>
                <div class="ml-4">
                    <div class="w-16 h-16 bg-gradient-to-tr from-purple-700 to-pink-500 rounded-full flex items-center justify-center">
                        <i class="fa-solid fa-clipboard text-white text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection