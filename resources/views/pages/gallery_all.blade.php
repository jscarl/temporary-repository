@extends('layouts.master')
@section('title')
Gallery
@endsection

@section('content')
<!-- Breadcumb Section -->
<section style="background-image: url('https://www.teachforamerica.org/sites/default/files/styles/landscape_large/public/2020-06/200605_TopStory_FutureEd3.jpg'); transform: translateZ(-1px); overflow:hidden" class="breadcumb relative bg-blue-500 bg-center lg:bg-fixed bg-cover bg-no-repeat overflow-x-hidden flex justify-center items-center">
  <span class="absolute w-auto inset-0 shadow-inner bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-75"></span>
  <div class="container absolute my-auto flex flex-wrap justify-center">
    <div class="w-full mx-auto lg:px-16 xl:px-40 2xl:px-64" data-aos="fade-up">
      <h1 class="text-white font-bold text-center capitalize text-4xl lg:text-5xl lg:mt-10 leading-tight">
        Gallery
      </h1>
      <hr class="mt-2 pt-1 lg:mt-4 w-16 bg-white mx-auto">
    </div>
  </div>
</section>
<!-- End of Breadcumb -->
<nav class="py-3 flex justify-center text-sm md:text-lg items-center mx-auto -mb-3 md:mb-0 md:py-0 md:mt-6">
  <ul class="flex items-center flex-wrap">
    <li>
      <a href="{{URL::to('/')}}" class="text-pri-100 hover:text-pri-200 font-semibold md:font-bold">Home</a>
      <span class="px-2">
        <i style="font-size: 10px;" class="fas fa-chevron-right text-gray-500"></i>
      </span>
    </li>
    <li>
      <p class="text-gray-500 capitalize">{{$segment}}</p>
    </li>
  </ul>
</nav>

<section class="px-4 sm:px-8 lg:px-12 xl:px-40 mb-10 md:py-10">
  <div class="container mx-auto max-w-screen-xl">
    <div class="flex flex-wrap justify-center -mx-2" id="">
      @foreach ($albums as $album)
      <div class="max-w-sm lg:max-w-xl sm:w-1/2 lg:w-1/3">
        <div class="max-w-full shadow-xl rounded-md overflow-hidden relative m-2">
          <a class="" href="{{AppAlbum::getSlug('gallery' ,$album->slug)}}">
            <span class="absolute inset-0 hover:opacity-0 opacity-100 bg-gradient-to-t from-pri-100 cursor-pointer">
              <div class="absolute px-6 mt-40 lg:mt-32 pt-6 lg:py-6">
                <h5 class="text-lg lg:text-md text-white capitalize font-semibold">{{$album->nama_album}}</h5>
              </div>
            </span>
            <img class="object-cover lg:h-48 h-56 w-full bg-center" src="{{Voyager::image($album->thumbnail_file)}}" alt="">
          </a>
        </div>
      </div>
      @endforeach
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

  //   lightGallery(document.getElementById('lightgallery'));

</script>
@endsection
