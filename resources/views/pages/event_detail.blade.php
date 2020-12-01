@extends('layouts.master')
@section('title')
{{$event->title}}
@endsection

@section('content')
<!-- Breadcumb Section -->
<section style="background-image: url('{{Voyager::image($event->image)}}'); overflow:hidden" class="breadcumb relative bg-blue-500 bg-bottom lg:bg-fixed bg-cover bg-no-repeat overflow-x-hidden flex justify-center items-center">
  <span class="absolute w-auto inset-0 shadow-inner bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-75"></span>
</section>
<!-- End of Breadcumb -->

<section class="bg-white lg:flex flex-wrap xl:py-20 md:py-12">
  <div class="container relative mx-auto max-w-screen-xl">
    <div class="flex justify-center mx-5 lg:hidden">
      <div class="bg-white w-full h-64 md:-mt-32 sm:-mt-32 -mt-20"></div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 text-base px-10 md:px-12 lg:px-12 xl:ml-16 -mt-56 lg:mt-0">
      <div class="w-full grid col-span-2 xl:-mt-56 xl:bg-white -mt-2">
        <div class="flex flex-col xl:pt-10 xl:px-10 w-full">
          <div class="md:bg-white flex flex-col justify-start">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 pb-4 capitalize">{{$event->title}}</h1>
            <div class="flex text-sm text-gray-700 pb-3">
              <span>
                <i class="far fa-calendar-alt"></i>
              </span>
              <span class="ml-3 capitalize">
                <p>{{date('M d, Y', strtotime($event->created_at))}}</p>
              </span>
            </div>
            <!-- <p href="#" class="text-sm pb-3  text-gray-800">
                                Published on April 25th, 2020
                            </p> -->
            <nav class="pb-5">
              <ul class="flex items-center text-sm flex-wrap">
                <li class="pb-1">
                  <a href="{{URL::to('/')}}" class="text-pri-100 hover:text-pri-200 font-semibold md:font-bold pb-4 capitalize">Home</a>
                  <span class="px-2">
                    <i style="font-size: 10px;" class="fas fa-chevron-right text-gray-500"></i>
                  </span>
                </li>
                {{-- <li class="pb-1">
                  <a href="{{AppAlbum::getSlug('category', $category->slug)}}" class="text-pri-100 hover:text-pri-200 font-semibold md:font-bold pb-4 capitalize">{{$category->name}}</a>
                <span class="px-2">
                  <i style="font-size: 10px;" class="fas fa-chevron-right text-sm text-gray-500"></i>
                </span>
                </li> --}}
                <li class="pb-1">
                  <p class="text-gray-500 capitalize">{{$event->title}}</p>
                </li>
              </ul>
            </nav>
            <img class="pb-8" src="{{Voyager::image($event->image)}}" alt="">
            {{-- <h1 class="text-2xl font-bold pb-3">Introduction</h1> --}}
            <article class="prose prose-sm sm:prose lg:prose-sm xl:prose-lg mx-auto md:max-w-none">
              {!! $event->body !!}
            </article>
          </div>
        </div>
        <div class="xl:pl-10 xl:pr-6">
          <div class="w-full flex pt-6 xl:pr-6">
            @foreach ($suggestions->take(2) as $item)
            @if ($loop->count == 1)
            <a href="{{$item->slug}}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
              <p class="text-lg text-pri-100 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
              <p class="pt-2 text-sm capitalize">{{$item->title}}</p>
            </a>
            @else
            @if ($loop->odd)
            <a href="{{$item->slug}}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
              <p class="text-lg text-pri-100 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
              <p class="pt-2 text-sm capitalize">{{$item->title }}</p>
            </a>
            @else
            <a href="{{$item->slug}}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
              <p class="text-lg text-pri-100 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
              <p class="pt-2 text-sm capitalize">{{$item->title}}</p>
            </a>

            @endif
            @endif

            @endforeach
            {{-- <a href="{{$suggestions[1]->slug}}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
            <p class="text-lg text-pri-100 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
            <p class="pt-2 text-sm capitalize">{{$suggestions[1]->title}}</p>
            </a> --}}
          </div>
        </div>
      </div>
      <div class="xl:mr-32 pb-16">
        <div class="w-full bg-white flex flex-col my-2 lg:my-10 xl:my-4 xl:pl-3 lg:pl-10">
          <hr class="border-1 my-10 lg:hidden">
          <div class="relative flex items-center mb-5">
            <input type="search" placeholder="Search" class="bg-white h-10 w-full px-5 pr-10 border-2 rounded-full text-sm focus:outline-none focus:shadow-sm">
            <button type="submit" class="absolute right-0 mr-6 focus:outline-none">
              <i class="fas fa-search opacity-25 text-sm"></i>
            </button>
          </div>
          @foreach($suggestions as $suggest)
          <div class="pt-5 flex flex-col justify-start">
            <h3 class="pb-2 text-sm font-semibold text-pri-100 capitalize">{{$suggest->title}}</h3>
            <p class="text-sm text-gray-600 truncate-3-lines">{{$suggest->excerpt}}</p>
            <hr class="border-1 mt-5 block">
          </div>
          @endforeach
          {{-- <div class="pt-5 flex flex-col justify-start">
                  <h3 class="pb-2 text-sm font-semibold text-pri-100 capitalize">Perayaan HUT ke 150 Tahun Marsudirini</h3>
                  <p class="text-sm text-gray-600 truncate-3-lines">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                  <hr class="border-1 mt-5 block">
                </div>
                <div class="pt-5 flex flex-col justify-start">
                  <h3 class="pb-2 text-sm font-semibold text-pri-100 capitalize">Perayaan HUT ke 150 Tahun Marsudirini</h3>
                  <p class="text-sm text-gray-600 truncate-3-lines">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                  <hr class="border-1 mt-5 block">
                </div> --}}

          {{-- <div class="pt-8 text-sm">
            <h2 class="font-semibold text-pri-100">Category</h2>
            <ul class="pt-3 text-gray-600 text-left">
              <li class="pt-2">
                <a class="hover:text-gray-800" href="{{AppAlbum::getSlug('category', $category->slug)}}">
          <span>
            <i class="fas fa-tag"></i>
          </span>
          <span class="ml-2 capitalize">{{$category->name}}</span>
          </a>
          </li>
          </ul>
        </div> --}}
      </div>
    </div>
  </div>
  </div>
</section>
@endsection
