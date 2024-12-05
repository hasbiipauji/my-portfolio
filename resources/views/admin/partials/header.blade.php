    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-10 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
          <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
          <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
            <img src="./assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Soft UI Dashboard</span>
          </a>
        </div>
  
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
  
        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
          <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full  }}">
              <a class="{{ Route::is('dashboard') ? 'bg-slate-300' : 'bg-white text-slate-500 hover:bg-slate-300 transition-all duration-300 ease-in-out' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="{{ route('dashboard') }}">
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
              </a>
            </li>
            
            <li class="mt-0.5 w-full  }}">
              <a class="{{ Route::is('contact.index') ? 'bg-slate-300' : 'bg-white text-slate-500 hover:bg-slate-300 transition-all duration-300 ease-in-out' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="{{ route('contact.index') }}">
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Contact Message</span>
              </a>
            </li>
            
            <li class="mt-0.5 w-full  }}">
              <a class="{{ Route::is('project.index') ? 'bg-slate-300' : 'bg-white text-slate-500 hover:bg-slate-300 transition-all duration-300 ease-in-out' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center rounded-lg px-4 font-semibold text-slate-700 transition-colors" href="{{ route('project.index') }}">
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Projects</span>
              </a>
            </li>
 
          </ul>
      </aside>
  
      <!-- end sidenav -->
  
      <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
          <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
              <!-- breadcrumb -->
              <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                  <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">@yield('nama-halaman')</li>
              </ol>
            </nav>
  
            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
              <div class="flex items-center md:ml-auto md:pr-4">
                {{-- ini untuk usernya --}}
                <!-- Settings Dropdown -->
                <div class="sm:flex sm:items-center sm:ms-6">
                  <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                          <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                              <div>{{ Auth::user()->name }}</div>

                              <div class="ms-1">
                                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                              </div>
                          </button>
                      </x-slot>

                      <x-slot name="content">
                          <x-dropdown-link :href="route('profile.edit')">
                              {{ __('Profile') }}
                          </x-dropdown-link>

                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf

                              <x-dropdown-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </x-dropdown-link>
                          </form>
                      </x-slot>
                  </x-dropdown>
                </div>
              </div>

            </div>
          </div>
        </nav>
  
        <!-- end Navbar -->