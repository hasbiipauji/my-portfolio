@extends('admin.main')

@section('title', 'Detail Message')

@section('nama-halaman')
    Detail Contact Message 
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
            {{-- contact Details --}}
            <div class="p-6">
                {{-- contact Title --}}
                <h1 class="text-xl font-bold text-gray-900 mb-4 text-center">
                    {{ $contact->name }}
                </h1>
                <h4 class="text-base text-gray-900 mb-4 text-center">
                    {{ $contact->email }}
                </h4>

                {{-- contact Description --}}
                <p class="text-gray-600 text-sm mb-6 text-center">
                    {{ $contact->message }}
                </p>
            </div>
        </div>

        {{-- Back Button --}}
        <div class="mt-6 text-center">
            <a href="{{ route('contact.index') }}" 
               class=" bg-green-500 text-white hover:bg-green-600 active:scale-90 font-bold py-2 px-4 rounded-lg transition duration-300 text-sm">

                Kembali
            </a>
        </div>
    </div>
</div>
@endsection