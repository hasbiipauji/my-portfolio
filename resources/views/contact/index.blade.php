@extends('admin.main')
@section('title', 'contact message')
@section('nama-halaman')
    contact message
@endsection
@section('content')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->

    <div class="flex flex-wrap -mx-3">
      <div class="flex-none w-full max-w-full px-3">

        @if(session()->has('delete'))
          <div class="w-full text-center p-4 mb-4 text-sm text-green-800 border border-red-300 rounded-lg bg-red-50 relative" role="alert">
              <button id="close-success-alert" type="button" class="absolute top-4 right-2 text-red-500 hover:text-red-700 focus:outline-none">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                  <span class="sr-only">Close alert</span>
              </button>
              <span class="font-medium block pr-8">Pesan berhasil dihapus</span>
          </div>
          @endif

        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>Message table</h6>
          </div>
          <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
            @forelse ($message as $item)
            @if ($loop->first)
              <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                  <tr>
                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama</th>
                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Email</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Message</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tanggal Masuk Pesan</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Aksi</th>
                  </tr>
                </thead>
                @endif
                <tbody>    
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">{{ $loop->iteration }}</h6>
                          </div>
                        </div>
                      </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 text-sm leading-normal">{{ $item->name }}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal">{{ $item->email }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <p class="mb-0 text-xs leading-normal">{{ $item->message }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight text-slate-400">{{ $item->created_at }}</span>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <form action="{{ route('contact.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            {{-- <button type="submit" class="bg-slate-600 px-3 py-2 rounded-lg shadow-lg text-white text-xs hover:bg-slate-800 ease-in-out transition-all duration-300">Hapus</button> --}}
                            <button type="submit" class="bg-slate-600 !important text-xs px-3 py-2 rounded-lg shadow-lg text-white hover:bg-slate-800 ease-in-out transition-all duration-300">Hapus</button>
                        </form>
                    </td>
                  </tr>
                </tbody>
            @if ($loop->last)  
            </table>
            @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty
  <h5 class="text-center p-8">Data Masih Kosong</h5>
  @endforelse


@endsection