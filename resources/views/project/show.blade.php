@extends('admin.main')

@section('title', 'Detail Projects')

@section('nama-halaman')
    Detail Projects 
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            {{-- Project Image --}}
            <div class="w-full">
                <img src="{{ asset('img/' . $project->image) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-64 object-cover">
            </div>

            {{-- Project Details --}}
            <div class="p-6">
                {{-- Project Title --}}
                <h1 class="text-xl font-bold text-gray-900 mb-4 text-center">
                    {{ $project->title }}
                </h1>

                {{-- Project Description --}}
                <p class="text-gray-600 text-base mb-6 text-center">
                    {{ $project->description }}
                </p>

                {{-- Project Links --}}
                <div class="space-y-4 mt-6">
                    <div class="flex items-center justify-center">
                        <span class="text-sm font-medium mr-2">Code:</span>
                        <a href="{{ $project->link_code }}" 
                           target="_blank" 
                           class="text-blue-600 text-sm hover:text-blue-800 underline truncate max-w-xs">
                            {{ $project->link_code }}
                        </a>
                    </div>

                    <div class="flex items-center justify-center">
                        <span class="text-sm font-medium mr-2">Demo:</span>
                        <a href="{{ $project->link_demo }}" 
                           target="_blank" 
                           class="text-blue-600 hover:text-green-800 text-sm underline truncate max-w-xs">
                            {{ $project->link_demo }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Back Button --}}
        <div class="mt-6 text-center">
            <a href="{{ route('project.index') }}" 
               class=" bg-green-500 text-white hover:bg-green-600 active:scale-90 font-bold py-2 px-4 rounded-lg transition duration-300 text-sm">

                Kembali
            </a>
        </div>
    </div>
</div>
@endsection