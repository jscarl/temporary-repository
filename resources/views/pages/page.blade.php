@extends('layouts.master')
@section('title')
{{$data->title}}
@endsection

@section('content')
<style>
  html {
    scroll-padding-top: 120px;
  }

</style>
<!-- Breadcumb Section -->
<section style="background-image: url('{{Voyager::image($data->image)}}'); transform: translateZ(-1px); overflow:hidden" class="breadcumb relative bg-blue-500 bg-center md:bg-bottom lg:bg-fixed bg-cover bg-no-repeat overflow-x-hidden flex justify-center items-center">
  <span class="absolute w-auto inset-0 shadow-inner bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-75"></span>
  <div class="container absolute my-auto flex flex-wrap justify-center">
    <div class="w-full mx-auto lg:px-16 xl:px-40 2xl:px-64" data-aos="fade-up">
      <h1 class="mx-2 text-white font-bold text-center capitalize text-4xl lg:text-5xl lg:mt-10 leading-tight">
        {{$data->title}}
      </h1>
      <hr class="mt-2 pt-1 lg:mt-4 w-16 bg-white mx-auto">
    </div>
  </div>
</section>
<!-- End of Breadcumb -->

<nav class="py-3 flex justify-center text-sm lg:text-lg items-center mx-auto lg:py-4">
  <ul class="flex items-center flex-wrap">
    <li class="pb-1">
      <a href="{{URL::to('/')}}" class="text-pri-100 hover:text-pri-200 font-semibold md:font-bold pb-4">Home</a>
      <span class="px-2">
        <i style="font-size: 10px;" class="fas fa-chevron-right text-gray-500"></i>
      </span>
    </li>
    <li class="pb-1">
      <p class="text-gray-500 capitalize">{{$data->title}}</p>
    </li>
  </ul>
</nav>

<section class="bg-white py-12 xl:pt-16 xl:pb-24 px-8 md:px-10 lg:px-12 xl:px-40">
  <div class="container mx-auto max-w-screen-xl">
    <div class="prose prose-sm sm:prose lg:prose-sm xl:prose-lg md:max-w-none">
      {{-- <img class="pb-8 w-full" src="{{Voyager::image($data->image)}}" alt="{{$data->title}}"> --}}
      {{-- <div class="pb-3">{!! $data->body !!}</div> --}}
      {!! $data->body !!}
    </div>
  </div>
</section>
@endsection
@section('additional_scripts')
<script>
  AOS.init({
    delay: 100
    , duration: 1200
    , once: false
  , });

  lightGallery(document.getElementById('lightgallery'));
</script>
@endsection
