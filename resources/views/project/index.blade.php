@extends('admin.main')
@section('title', 'Projects')
@section('nama-halaman')
    Projects
@endsection
@section('content')


<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
      <div class="flex-none w-full max-w-full px-3">
        @if(session()->has('success'))
          <div class="w-full text-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 relative" role="alert">
              <button id="close-success-alert" type="button" class="absolute top-4 right-2 text-green-500 hover:text-green-700 focus:outline-none">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                  <span class="sr-only">Close alert</span>
              </button>
              <span class="font-medium block pr-8">Project berhasil ditambahkan</span>
          </div>
          @endif

          @if(session()->has('update'))
          <div class="w-full text-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 relative" role="alert">
              <button id="close-success-alert" type="button" class="absolute top-4 right-2 text-green-500 hover:text-green-700 focus:outline-none">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                  <span class="sr-only">Close alert</span>
              </button>
              <span class="font-medium block pr-8">Project berhasil diperbaharui</span>
          </div>
          @endif

          @if(session()->has('delete'))
          <div class="w-full text-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 relative" role="alert">
              <button id="close-success-alert" type="button" class="absolute top-4 right-2 text-red-500 hover:text-red-700 focus:outline-none">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                  <span class="sr-only">Close alert</span>
              </button>
              <span class="font-medium block pr-8">Project berhasil dihapus</span>
          </div>
          @endif

        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            {{-- <a href="" class="px-3 py-2 text-xs bg-blue-500 rounded-lg shadow-lg text-white hover:bg-blue-600 ease-in-out transition-all duration-300 mb-10">Tambah</a> --}}
            @include('project.create')
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-300 transition-all ease-in-out" type="button">
              tambah
            </button>
            <h6 class="mt-6">Project table</h6>
          </div>
          <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
            @forelse ($project as $item)
            @if ($loop->first)
              <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                  <tr>
                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Gambar</th>
                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Judul</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Deskripsi</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Link Code</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Link Demo</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Aksi</th>
                  </tr>
                </thead>
                @endif
                <tbody>    
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">{{ $loop->iteration }}.</h6>
                          </div>
                        </div>
                      </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          {{-- <h6 class="mb-0 text-sm leading-normal">{{ $item->image }}</h6> --}}
                          <img src="{{ asset('img/'.$item->image) }}" alt="" class="w-24">
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal">{{ Str::limit($item->title, 20, '...')  }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <p class="mb-0 text-xs leading-normal">{{Str::limit($item->description, 40, '...')  }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight text-slate-400">{{ Str::limit($item->link_code, 20, '...') }}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight text-slate-400">{{ Str::limit($item->link_demo, 20, '...') }}</span>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      {{-- di bawah ini yaitu 'project' => $item untuk mengirimkan data dari loop di atas untuk bisa ditangkap di view edit dengan id sebagai parameter --}}
                      @include('project.edit', ['project' => $item])
                      <form action="{{ route('project.destroy', $item->id) }}" method="POST" id="popup-delete">

                        {{-- tombol edit  --}}
                        <button data-modal-target="crud-modal-{{ $item->id }}" data-modal-toggle="crud-modal-{{ $item->id }}" class="px-3 py-2 bg-slate-600 text-xs text-white rounded-lg hover:bg-slate-800 ease-in-out transition-all duration-300" type="button">
                          Edit
                        </button>

                        @csrf
                        @method('delete')
                        {{-- tombol hapus  --}}
                        {{-- jangan tambah id disini karena meski pakai modal tapi data akan langsung terhapus --}}
                        <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class=" bg-red-600 text-xs px-3 py-2 rounded-lg shadow-lg text-white hover:bg-red-700 ease-in-out transition-all duration-300">
                          hapus
                        </button>
                      
                        {{-- modal tombol hapus --}}
                        {{-- tambah id di tombol ya saya yakin agar tidak langsung dihapus datanya, jadi id disimpan di form dan ya saya yakin --}}
                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500">Yakin hapus pesan ini?</h3>
                                        <button id="confirm-delete" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                            Ya, saya sakin
                                        </button>
                                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak jadi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<script>
    // tombol untuk hapus
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("confirm-delete").addEventListener("click", function() {
     document.getElementById("popup-delete").submit(); // Submit form
    });
});
</script>

@endsection