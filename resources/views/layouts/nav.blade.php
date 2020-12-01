<header class="fixed bg-transparent top-0 z-50 w-full text-white" id="navbar">
  <div class="container mx-auto max-w-screen-xl">
    <div x-data="{ open: false }" class="flex flex-col px-4 md:px-8 xl:mx-10 lg:px-12 xl:px-16 lg:items-center lg:justify-between lg:flex-row">
      <div class="relative flex flex-row items-center justify-between">
        <div id="logo-nav" class="w-24 md:w-32 top-0">

          <a href="{{URL::to('/')}}">
            <img id="img-logo" class="w-auto lg:p-3 p-2" src="{{ asset('storage/'.setting('site.logo')) }}">
          </a>
        </div>
        <div id="nama-sekolah" class="hidden lg:relative xl:-ml-10 lg:-ml-2 text-left leading-tight absolute ml-20">
          <h1 class="tracking-wider lg:tracking-wider text-md font-bold uppercase">SD Marsudirini</h1>
          <span class="text-sm lg:text-md font-semibold">Gedangan Semarang</span>
        </div>
        <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" id="nav" class="hidden flex-col flex-grow bg-pri-100 py-2 lg:py-0 rounded-lg lg:shadow-none lg:bg-transparent lg:pb-0 lg:flex lg:justify-end lg:flex-row mt-2 lg:-mr-4 lg:m-0 mb-4 mx-1">
        @foreach($items as $item)
        @if($item->children->count())
        <div @click.away="open = false" class="relative my-auto" x-data="{ open: false }">
          <button @click="open = !open" class="flex flex-row items-center mt-2 w-full px-4 py-2 text-sm lg:text-base font-semibold text-left bg-transparent lg:mt-0 lg:w-auto lg:inline hover:text-pri-200 active:text-pri-200 focus:text-pri-200 focus:outline-none">
            <span>{{$item->title}}</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-in-out duration-100" x-transition:enter-start="transform lg:scale-95 -translate-y-5 opacity-0" x-transition:enter-end="transform opacity-100 lg:scale-100" x-transition:leave="transition ease-out duration-100" x-transition:leave-end="opacity-0 transform -translate-y-3" class=" block lg:absolute right-0 w-full lg:mt-5 origin-top-right lg:w-48">
            <ul class="px-2 lg:px-0 py-2 text-white lg:text-white bg-blue-800 lg:bg-pri-100 lg:rounded-md lg:shadow-md" id="sub-menu">
              @foreach($item->children as $submenu)
              <li class="ml-4 lg:m-0 py-2 lg:p-0"><a class="lg:block px-4 py-2 mt-2 text-sm lg:text-base font-semibold lg:mt-0 hover:text-pri-200 lg:hover:text-gray-900 lg:focus:text-gray-900 lg:hover:bg-pri-200 lg:focus:bg-pri-200 focus:text-pri-200 focus:outline-none" href="{{ URL::to($submenu->url) }}">{{ $submenu->title }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        @else
        <a class="px-4 py-2 mt-2 text-sm lg:text-base font-semibold lg:mt-0 hover:text-pri-200 active:text-pri-200 focus:text-pri-200 focus:outline-none" href="{{ URL::to($item->url) }}">{{$item->title}}</a>
        @endif
        @endforeach
      </nav>
    </div>
  </div>
</header>
