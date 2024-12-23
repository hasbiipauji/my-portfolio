@vite(['resources/css/app.css','resources/js/app.js'])
<!-- Modal toggle -->

  <!-- Main modal -->
  <div id="crud-modal-{{ $project->id }}" id="crud-modal-{{ $project->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                  <h3 class="text-lg font-semibold text-gray-900">
                      Edit Projects
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="crud-modal-{{ $project->id }}">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="p-4 md:p-5" method="POST" enctype="multipart/form-data" action="{{ route('project.update', $project) }}">
                @csrf
                @method('PUT')
                  <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                        <input type="file" name="image" id="image" class="text-xs">
                    </div>
                      <div class="col-span-2">
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                          <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Judul Projectnya" required value="{{ $project->title }}">
                      </div>
                      <div class="col-span-2">
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                          <textarea name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Deskripsi projectnya">{{ $project->description }}</textarea>                    
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="link_code" class="block mb-2 text-sm font-medium text-gray-900">Link Code</label>
                          <input type="text" name="link_code" id="link_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="link code" required value="{{ $project->link_code }}">
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="link_demo" class="block mb-2 text-sm font-medium text-gray-900">Link Demo</label>
                          <input type="text" name="link_demo" id="link_demo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="link demo" required value="{{ $project->link_demo }}">
                      </div>
                  </div>
                  <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300 ease-in-out active:scale-90">
                      <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                      Edit Project
                  </button>
              </form>
          </div>
      </div>
  </div> 
  