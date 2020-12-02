@extends('layouts.master')
@section('title')
Daftar Semua Event
@endsection

@section('content')
<!-- Breadcumb Section -->
<section style="background-image: url('https://www.teachforamerica.org/sites/default/files/styles/landscape_large/public/2020-06/200605_TopStory_FutureEd3.jpg'); transform: translateZ(-1px); overflow:hidden" class="breadcumb relative bg-blue-500 bg-center md:bg-bottom lg:bg-fixed bg-cover bg-no-repeat overflow-x-hidden flex justify-center items-center">
  <span class="absolute w-auto inset-0 shadow-inner bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-75"></span>
  <div class="container absolute my-auto flex flex-wrap justify-center">
    <div class="w-full mx-auto lg:px-16 xl:px-40 2xl:px-64" data-aos="fade-up">
      <h1 class="text-white font-bold text-center capitalize text-4xl lg:text-5xl lg:mt-10 leading-tight">
        {{$segment}}
      </h1>
      <hr class="mt-2 pt-1 lg:mt-4 w-16 bg-white mx-auto">
    </div>
  </div>
</section>
<!-- End of Breadcumb -->
<nav class="py-3 lg:py-0 flex justify-center text-sm lg:text-lg items-center mx-auto bg-gray-200 lg:bg-transparent lg:mt-6">
  <ul class="flex items-center flex-wrap">
    <li>
      <a href="{{URL::to('/')}}" class="text-pri-100 hover:text-pri-200 font-semibold md:font-bold">Home</a>
      <span class="px-2">
        <i style="font-size: 10px;" class="fas fa-chevron-right text-gray-500"></i>
      </span>
    </li>
    <li>
      <p class="text-gray-500 capitalize">{{ $segment }}</p>
    </li>
  </ul>
</nav>
{{-- ISINYA --}}
<section class="bg-white py-12 xl:pt-16 xl:pb-24 px-8 md:px-10 lg:px-12 xl:px-40">
  <div class="container mx-auto max-w-screen-xl">
    <div class="flex flex-wrap justify-center lg:justify-start -mx-2">
      @foreach($events as $event)
      <div class="max-w-sm lg:max-w-xl sm:w-1/2 lg:w-1/3 p-3">
        <div class="bg-white max-w-full shadow-xl rounded-md overflow-hidden relative">
          <a href="{{AppAlbum::getSlug('events', $event->slug)}}">
            <img class="object-cover lg:h-48 h-56 w-full bg-center" src="{{Voyager::image($event->image)}}" alt="{{$event->title}}">
          </a>
          <div class="flex flex-wrap p-5">
            <a href="{{AppAlbum::getSlug('events', $event->slug)}}">
              <h1 class="text-pri-100 font-semibold pb-3 capitalize">{{$event->title}}</h1>
            </a>
            <p class="truncate-5-lines text-sm text-gray-700">{{ $event->excerpt }}</p>
          </div>
          <hr>
          <div class="flex items-center justify-between">
            <a class="float-left p-5 text-sm text-gray-700 hover:text-pri-200" href="{{AppAlbum::getSlug('events', $event->slug)}}">Read More</a>
            <span style="font-size: 12px;" class="p-5 float-right text-gray-700 ">{{date('d M, Y', strtotime($event->created_at))}}</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
{{-- SELESAI --}}
@endsection
@section('additional_scripts')
<script>
  AOS.init({
    delay: 100
    , duration: 1200
    , once: false
  , });

</script>
@endsection
