@extends('layouts.master')
@section('title')
Our Value
@endsection

@section('content')
<!-- Breadcumb Section -->
<section style="background-image: url('https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'); transform: translateZ(-1px); overflow:hidden" class="breadcumb relative bg-blue-500 bg-center lg:bg-fixed bg-cover bg-no-repeat overflow-x-hidden flex justify-center items-center">
  <span class="absolute w-auto inset-0 shadow-inner bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-75"></span>
  <div class="container absolute my-auto flex flex-wrap justify-center">
    <div class="w-full mx-auto lg:px-16 xl:px-40 2xl:px-64" data-aos="fade-up">
      <h1 class="text-white font-bold text-center capitalize text-4xl lg:text-5xl lg:mt-10 leading-tight">
        Sekolah Kita tetap EKSIS
      </h1>
      <hr class="mt-2 pt-1 lg:mt-4 w-16 bg-white mx-auto">
    </div>
  </div>
</section>

<nav class="py-3 flex justify-center text-sm lg:text-lg items-center mx-auto lg:py-4">
  <ul class="flex items-center flex-wrap">
    <li>
      <a href="index.html" class="text-pri-100 hover:text-pri-200 font-semibold md:font-bold">Home</a>
      <span class="px-2">
        <i style="font-size: 10px;" class="fas fa-chevron-right text-gray-500"></i>
      </span>
    </li>
    <li>
      <p class="text-gray-500 capitalize">Sekolah Kita tetap Eksis</p>
    </li>
  </ul>
</nav>
<!-- End of Breadcumb -->

<section class="bg-white py-12 xl:pt-16 xl:pb-24 px-8 md:px-10 lg:px-12 xl:px-40">
  <div class="container mx-auto max-w-screen-xl">
    <div id="empati" class="flex flex-col">
      <div class="relative bg-white w-32 h-12">
        <h1 class="absollute text-2xl font-bold pb-3">Empati</h1>
      </div>
      <hr class="-mt-8">
      <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
      </p>
    </div>
    <div id="komunikatif" class="flex flex-col">
      <div class="relative bg-white w-48 h-12">
        <h1 class="absollute text-2xl font-bold pb-3">Komunikatif</h1>
      </div>
      <hr class="-mt-8">
      <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
      </p>
    </div>
    <div id="sportif" class="flex flex-col">
      <div class="relative bg-white w-32 h-12">
        <h1 class="absollute text-2xl font-bold pb-3">Sportif</h1>
      </div>
      <hr class="-mt-8">
      <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
      </p>
    </div>
    <div id="inovatif" class="flex flex-col">
      <div class="relative bg-white w-32 h-12">
        <h1 class="absollute text-2xl font-bold pb-3">Inovatif</h1>
      </div>
      <hr class="-mt-8">
      <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
      </p>
    </div>
    <div id="simpati" class="flex flex-col">
      <div class="relative bg-white w-32 h-12">
        <h1 class="absollute text-2xl font-bold pb-3">Simpati</h1>
      </div>
      <hr class="-mt-8">
      <p class="my-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nisi numquam quo officiis neque accusamus dignissimos quos, nulla vel voluptates, doloribus necessitatibus sed, cupiditate ipsam. Possimus nostrum ea hic eius!
      </p>
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

</script>
@endsection
