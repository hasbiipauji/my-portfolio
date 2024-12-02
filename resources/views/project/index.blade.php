@extends('admin.main')
@section('title', 'Projects')
@section('nama-halaman')
    Projects
@endsection
@section('content')


<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
      <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <a href="" class="px-3 py-2 text-xs bg-blue-500 rounded-lg shadow-lg text-white hover:bg-blue-600 ease-in-out transition-all duration-300 mb-10">Tambah</a>
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
                          <h6 class="mb-0 text-sm leading-normal">{{ $item->image }}</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <h6 class="mb-0 text-sm leading-normal">{{ $item->title }}</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                                <p class="mb-0 text-xs leading-normal">{{ $item->description }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight text-slate-400">{{ $item->link_code }}</span>
                    </td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <span class="text-xs font-semibold leading-tight text-slate-400">{{ $item->link_demo}}</span>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                        {{-- <form action="{{ route('contact.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete') --}}
                            <button type="submit" class="bg-slate-600 text-xs px-3 py-2 rounded-lg shadow-lg text-white hover:bg-slate-800 ease-in-out transition-all duration-300">Hapus</button>
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