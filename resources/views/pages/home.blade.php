@extends('layouts.master')
@section('title')
Home
@endsection
@section('content')

<!-- Start of Hero-->
@include('layouts.hero')
<!-- End of Hero -->

<!-- Card -->
<section class="-mt-24">
  <div class="container mx-auto w-10/12 lg:w-8/12">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-1 sm:gap-0">
      <div class="flex relative flex-shrink-0 min-w-0 break-words sm:rounded-l-xl bg-white w-full mb-8 shadow-lg ">
        <div class="p-8 flex-auto">
          <div class="mb-4 md:mb-6 h-42 lg:h-48 xl:h-56 w-auto overflow-hidden">
            <img class="relative object-cover object-top w-full h-full" src="{{ Voyager::image($headlines->image) }}" alt="{{$headlines->title}}">
          </div>
          <a href="{{AppAlbum::getSlug('page', $headlines->slug)}}">
            <h2 class="mt-6 lg:mt-0 text-lg lg:text-xl text-pri-100 font-semibold">{{ $headlines->title }}</h2>
          </a>
          <p class="mt-2 mb-4 text-gray-700 text-sm truncate-3-lines">
            {{$headlines->excerpt}}
          </p>
          <a class="text-sm text-gray-700 hover:text-pri-200" href="{{AppAlbum::getSlug('page',$headlines->slug)}}">Read More</a>
        </div>
      </div>
      <div class="flex relative flex-shrink-0 min-w-0 break-words sm:rounded-r-xl bg-pri-100 w-full mb-8 shadow-xl">
        <div class="p-8 flex-auto text-white">
          <h6 class=" text-xl font-semibold">Acara yang Akan Datang</h6>
          <div class="flex">

            <ul class="mt-5">
              @foreach($last_event as $event)

              <li class="mt-6 mb-6">
                <a href="{{AppAlbum::getSlug('events', $event->slug)}}">
                  <h5 class="text-md font-semibold">{{$event->title}}</h5>
                </a>
                {{-- <h5 class="text-md font-semibold">Contoh Nama Event</h5> --}}
                <div class="mt-1 flex items-center text-sm opacity-75">
                  <span>
                    <i class="far fa-clock"></i>
                  </span>
                  <span class="ml-2">
                    <p>{{date('d F Y', strtotime($event->event_date))}}</p>
                    {{-- <p>22 November 2020</p> --}}
                  </span>
                </div>
                <div class="mt-1 flex items-start text-sm opacity-75">
                  <span>
                    <i class="fas fa-map-marker-alt"></i>
                  </span>
                  <span class="ml-3">
                    {!! $event->location !!}
                    {{-- Tempat Event --}}
                  </span>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <a href="{{URL::to('/events')}}" class="w-auto text-center text-sm bg-transparent hover:bg-pri-200 text-white font-semibold hover:text-white p-2 border border-white hover:border-transparent rounded inline-block mt-4 cursor-pointer">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Card -->

<!-- Start Icon -->
<section class="overflow-x-hidden mt-16 mx-auto container mb-24 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
  <div class="flex flex-row justify-center mb-6">
    <div>
      <h3 class="mb-4 text-pri-100 text-xl font-bold">Sekolah Kami Tetap EKSIS</h3>
      <hr class="pt-1 w-16 bg-pri-100 mx-auto">
    </div>
  </div>
  <div class="flex flex-col md:flex-row items-center justify-center text-lg font-semibold text-pri-100" data-aos="zoom-in">
    <div class="text-center lg:px-10 md:px-5">
      <a href="{{URL::to('/page/values#empati')}}">
        <svg class="icon w-20 md:w-16">
          <use xlink:href="{{asset("images/svg/sprite.svg#Empati")}}" />
        </svg>
        <h3 class="-mt-4">Empati</h3>
      </a>
    </div>
    <div class="text-center lg:px-10 md:px-5">
      <a href="{{URL::to('/page/values#komunikatif')}}">
        <svg class="icon w-20 md:w-16 mx-auto">
          <use xlink:href="{{asset("images/svg/sprite.svg#Komunikatif")}}" />
        </svg>
        <h3 class="-mt-4">Komunikatif</h3>
      </a>
    </div>
    <div class="text-center lg:px-10 md:px-5">
      <a href="{{URL::to('/page/values#sportif')}}">
        <svg class="icon w-20 md:w-16">
          <use xlink:href="{{asset("images/svg/sprite.svg#Sportif")}}" />
        </svg>
        <h3 class="-mt-4">Sportif</h3>
      </a>
    </div>
    <div class="text-center lg:px-10 md:px-5">
      <a href="{{URL::to('/page/values#inovatif')}}">
        <svg class="icon w-20 md:w-16">
          <use xlink:href="{{asset("images/svg/sprite.svg#Inovasi")}}" />
        </svg>
        <h3 class="-mt-4">Inovatif</h3>
      </a>
    </div>
    <div class="text-center lg:px-10 md:px-5">
      <a href="{{URL::to('/page/values#simpati')}}">
        <svg class="icon w-20 md:w-16">
          <use xlink:href="{{asset("images/svg/sprite.svg#Simpati")}}" />
        </svg>
        <h3 class="-mt-4">Simpati</h3>
      </a>
    </div>
  </div>
  </div>
</section>
<!-- End Icon -->

<!-- Start Kegiatan -->
<section class="bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-24">
  <div class="mx-auto container max-w-screen-xl">
    <div class="flex flex-row justify-center">
      <div>
        <h3 class="mb-4 text-pri-100 text-xl font-bold">Galeri Sekolah</h3>
        <hr class="pt-1 w-16 bg-pri-100 mx-auto">
      </div>
    </div>
    <div class="flex py-12 flex-wrap justify-center -mx-2 overflow-x-hidden">
      @foreach ($albums as $album)
      <div class="max-w-sm lg:max-w-xl sm:w-1/2 lg:w-1/3 py-6 px-4" data-aos="flip-right">
        <div class=" bg-white max-w-full shadow-xl rounded-md overflow-hidden relative">
          <a href="{{AppAlbum::getSlug('gallery', $album->slug)}}">
            <span class="absolute inset-0 hover:opacity-0 opacity-50 bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 cursor-pointer"></span>
            <img class="object-cover lg:h-48 h-56 w-full bg-center" src="{{ Voyager::image($album->thumbnail_file) }}" alt="{{$album->nama_album}}">
          </a>
        </div>
        <div class="pt-6 text-center">
          <h5 class="text-lg text-gray-900 font-semibold capitalize">{{$album->nama_album}}</h5>
        </div>
      </div>

      @endforeach
    </div>
    <div class="text-center -mt-5">
      <a href="{{URL::to('/')}}/gallery" class="w-auto text-center text-sm bg-pri-100 hover:bg-pri-200 text-white font-semibold hover:text-pri-100 p-4 hover:border-transparent rounded inline-block cursor-pointer">Lihat Semua</a>
    </div>
  </div>
</section>
<!-- End Kegiatan -->

<!-- Pengumuman -->
<section class="container mx-auto w-10/12 lg:w-full lg:px-16 xl:px-40 2xl:px-64 py-24">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 overflow-x-hidden">
    @foreach($pengumuman as $x)
    <div class="bg-pri-100 md:col-span-2 shadow-xl text-white" data-aos="fade-down">
      <div class="flex flex-wrap lg:flex-no-wrap">
        <img class="h-56 lg:h-64 w-full lg:w-auto object-cover" src="{{ Voyager::image($x->image) }}" alt="">
        <div class="flex">
          <div class="p-8">
            <h1 class="font-semibold text-2xl lg:text-4xl">{{$x->title}}</h1>
            <div class="flex items-center text-sm opacity-75">
              <span>
                <i class="far fa-calendar-alt"></i>
              </span>
              <span class="ml-3">
                {{-- <p>22 November 2020</p> --}}
                <p>{{date('d F Y', strtotime($x->created_at))}}</p>
              </span>
            </div>
            <span>
              <p class="mt-2 truncate-3-lines text-sm text-white">{{$x->excerpt}}</p>
            </span>
            <a class="pt-5 inline-block hover:text-pri-200 text-sm" href="{{AppAlbum::getSlug('posts', $x->slug)}}">Read More</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @foreach($pages as $page)

    @if ($loop->odd)
    <div class="bg-white col-span-1 p-8 shadow-xl" data-aos="fade-right">
      @else
      <div class="bg-white col-span-1 p-8 shadow-xl" data-aos="fade-left">
        @endif
        <div>
          <h3 class="mb-4 text-pri-100 text-xl font-bold">{{$page->title}}</h3>
          <p class="truncate-3-lines text-gray-800 text-sm">{{$page->excerpt}}</p>
          <a class="pt-5 inline-block text-gray-800 hover:text-pri-200 text-sm" href="{{AppAlbum::getSlug('page', $page->slug)}}">Read More</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>
<!-- End Pengumuman -->
@endsection

@section('additional_scripts')
<script src="{{ asset('vendor/glide/glide.js') }}"></script>
<script>
  new Glide(".glide", {
    type: 'slider'
    , autoplay: 5000
    , hoverpause: true
    , gap: 0
    , perView: 1
    , bound: true
    , animationDuration: 1000
  , }).mount();




  AOS.init({
    delay: 100
    , duration: 1200
    , once: false
  , });

</script>
@endsection
