<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home - {{ setting('site.title') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glide/glide.core.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glide/glide.theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">

</head>
<body class="antialiased font-body bg-gray-200">
  <!-- Navbar -->
  <header class="fixed bg-transparent top-0 z-50 w-full text-white" id="navbar">
    <div x-data="{ open: false }" class="flex flex-col max-w-screen-2xl px-4 mx-auto md:px-8 lg:mx-10 lg:items-center lg:justify-between lg:flex-row lg:px-12 xl:px-16">
      <div class="relative flex flex-row items-center justify-between">
        <div id="logo-nav" class="w-20 md:w-32 lg:w-24 xl:w-32 top-0 bg-white rounded-b-xl shadow-xl">
          <a href="#">
            <img id="img-logo" class="w-auto lg:p-3 p-2" src="{{ asset('storage/'.setting('site.logo')) }}">
          </a>
        </div>
        <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" id="nav" class="hidden flex-col flex-grow bg-pri-100 py-2 rounded-lg lg:shadow-none lg:bg-transparent lg:pb-0 lg:flex lg:justify-end lg:flex-row mt-2 lg:-mr-4 lg:mt-0 lg:mx-0 mx-1">
        {{-- <div @click.away="open = false" class="relative  hover:bg-pri-200 lg:hover:bg-transparent lg:focus:bg-transparent focus:bg-pri-200 my-auto" x-data="{ open: false }">


                        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 text-sm font-semibold text-left bg-transparent lg:w-auto lg:inline lg:mt-0 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 lg:focus:text-pri-200 focus:text-gray-900 focus:outline-none">
                            <span>Profil Sekolah</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-3"
                            class=" absolute right-0 w-full lg:mt-4 origin-top-right lg:w-48">
                            <div class="px-2 lg:px-0 py-2 bg-pri-100 rounded-md shadow-lg">
                                <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Sejarah</a>
                                <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Visi & Misi</a>
                                <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Mars Sekolah</a>
                                <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Guru & Karyawan</a>
                            </div>
                        </div>
                    </div>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold lg:hover:bg-transparent lg:mt-0 hover:bg-pri-200 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 focus:text-gray-900 lg:focus:text-pri-200 lg:focus:bg-transparent focus:bg-pri-200 focus:outline-none" href="#">Fasilitas</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold lg:hover:bg-transparent lg:mt-0 hover:bg-pri-200 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 focus:text-gray-900 lg:focus:text-pri-200 lg:focus:bg-transparent focus:bg-pri-200 focus:outline-none" href="#">Akademik</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold lg:hover:bg-transparent lg:mt-0 hover:bg-pri-200 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 focus:text-gray-900 lg:focus:text-pri-200 lg:focus:bg-transparent focus:bg-pri-200 focus:outline-none" href="#">Kegiatan</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold lg:hover:bg-transparent lg:mt-0 hover:bg-pri-200 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 focus:text-gray-900 lg:focus:text-pri-200 lg:focus:bg-transparent focus:bg-pri-200 focus:outline-none" href="#">PSB</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold lg:hover:bg-transparent lg:mt-0 hover:bg-pri-200 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 focus:text-gray-900 lg:focus:text-pri-200 lg:focus:bg-transparent focus:bg-pri-200 focus:outline-none" href="#">Alumni</a> --}}
                    @foreach($items as $item)
                    @if ($item->children->count())
                    <div @click.away="open = false" class="relative  hover:bg-pri-200 lg:hover:bg-transparent lg:focus:bg-transparent focus:bg-pri-200 my-auto" x-data="{ open: false }">
                      <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 text-sm font-semibold text-left bg-transparent lg:w-auto lg:inline lg:mt-0 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 lg:focus:text-pri-200 focus:text-gray-900 focus:outline-none">
                        <span>{{$item->title}}</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform lg:-mt-1">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                      </button>
                      <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-3" class=" absolute right-0 w-full lg:mt-4 origin-top-right lg:w-48">
                        <div class="px-2 lg:px-0 py-2 bg-pri-100 rounded-md shadow-lg">
                          @foreach($item->children as $submenu)
                          <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="{{$submenu->url}}">{{$submenu->title}}</a>
                          @endforeach
                          {{-- <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Visi & Misi</a>
                                              <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Mars Sekolah</a>
                                              <a class="flex justify-center lg:block px-4 py-2 mt-2 text-sm font-semibold text-white lg:mt-0 lg:rounded-none rounded-md hover:text-gray-900 focus:text-gray-900 hover:bg-pri-200 focus:bg-pri-200 focus:outline-none" href="#">Guru & Karyawan</a> --}}
                        </div>
                      </div>
                    </div>
                    @else
                    <a class="px-4 py-2 mt-2 text-sm font-semibold lg:hover:bg-transparent lg:mt-0 hover:bg-pri-200 lg:hover:text-pri-200 hover:text-gray-900 active:text-pri-200 focus:text-gray-900 lg:focus:text-pri-200 lg:focus:bg-transparent focus:bg-pri-200 focus:outline-none" href="{{$item->url}}">{{ $item->title }}</a>

                    @endif
                    @endforeach


      </nav>
    </div>
  </header>
  <!-- Main Area -->
  <main>
    <!-- Hero Section -->
    <section style="border-bottom-left-radius: 20% 30%;" class=" relative overflow-x-hidden bg-white flex overflow-hidden justify-center content-center items-center lg:h-screen hero">
      <div class="glide absolute top-0 bg-top bg-cover">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides w-screen h-screen">
            <li class="glide__slide">
              <img class="object-cover w-full h-full" src="{{asset('storage/carousel/Hero1.jpg')}}" alt="" />

            </li>
            <li class="glide__slide">
              <img class="object-cover w-full h-full" src="{{asset('storage/carousel/Hero2.jpg')}}" alt="" />

            </li>
            <li class="glide__slide">
              <img class="object-cover w-full h-full" src="{{asset('storage/carousel/Hero3.jpg')}}" alt="" />

            </li>
          </ul>
        </div>
      </div>
      <span class="absolute w-auto inset-0 bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-75"></span>
      <div class="container absolute mx-auto" data-aos="fade-up">
        <div class="items-center flex flex-wrap">
          <div class="w-full lg:w-9/12 px-4 md:px-2 lg:px-0 ml-auto mr-auto text-center">
            <div>
              <h1 class="text-white font-bold text-4xl md:text-5xl lg:text-6xl leading-tight">
                Learning from Nothing to <span class="text-pri-100">Something</span>
              </h1>
              <a href="#" class="bg-transparent hover:bg-pri-100 text-pri-100 font-semibold hover:text-white p-4 border border-pri-100 hover:border-transparent rounded inline-block mt-5 cursor-pointer">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Hero -->

    <!-- Card -->
    <section class="-mt-24">
      <div class="container mx-auto w-10/12 lg:w-8/12">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-1 sm:gap-0">
          <div class="flex relative flex-shrink-0 min-w-0 break-words bg-white w-full mb-8 shadow-lg ">
            <div class="p-8 flex-auto">
              <div class="mb-4 md:mb-6 h-42 lg:h-48 xl:h-56 w-auto overflow-hidden">
                <img class="relative object-cover object-top w-full h-full" src="Assets/img/Ketua_Yayasan.png" alt="">
              </div>
              <h6 class="mt-6 lg:mt-0 text-lg lg:text-xl text-pri-100 font-semibold">Selamat Datang di Sekolah Kami</h6>
              <p class="mt-2 mb-4 text-gray-700 text-sm truncate-3-lines">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati omnis quam quia consectetur. Nobis culpa error, in aperiam asperiores at quae. Perspiciatis numquam praesentium molestiae, a illo corrupti voluptate eum!
                Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious.
              </p>
              <a class="text-sm text-gray-700 hover:text-pri-200" href="#">Read More</a>
            </div>
          </div>
          <div class="flex relative flex-shrink-0 min-w-0 break-words bg-pri-100 w-full mb-8 shadow-xl">
            <div class="">
              <div class="p-8 flex-auto text-white">
                <h6 class="mb-6 text-xl font-semibold">Acara yang Akan Datang</h6>
                <div>
                  <ul class="mt-5">
                    <li class="mt-6">
                      <h5 class="text-md font-semibold">Perayaan HUT ke 150 Tahun</h5>
                      <div class="mt-1 flex items-center text-sm opacity-75">
                        <span>
                          <i class="far fa-clock"></i>
                        </span>
                        <span class="ml-3">
                          <p>22 November 2020</p>
                        </span>
                      </div>
                      <div class="mt-1 flex items-start text-sm opacity-75">
                        <span>
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span class="ml-3">
                          <p>SD Marsudirini Gedangan <br>Jl. Ronggowarsito No.08 Semarang </p>
                        </span>
                      </div>
                      <a href="#" class="w-auto text-center text-sm bg-transparent hover:bg-pri-200 text-white font-semibold hover:text-white p-2 border border-white hover:border-transparent rounded inline-block mt-4 cursor-pointer">Selengkapnya</a>
                    </li>
                    <li class="mt-6">
                      <h5 class="text-md font-semibold">Perayaan HUT ke 150 Tahun</h5>
                      <div class="mt-1 flex items-center text-sm opacity-75">
                        <span>
                          <i class="far fa-clock"></i>
                        </span>
                        <span class="ml-3">
                          <p>22 November 2020</p>
                        </span>
                      </div>
                      <div class="mt-1 flex items-start text-sm opacity-75">
                        <span>
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span class="ml-3">
                          <p>SD Marsudirini Gedangan <br>Jl. Ronggowarsito No.08 Semarang </p>
                        </span>
                      </div>
                      <a href="#" class="w-auto text-center text-sm bg-transparent hover:bg-pri-200 text-white font-semibold hover:text-white p-2 border border-white hover:border-transparent rounded inline-block mt-4 cursor-pointer">Selengkapnya</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Card -->

    <!-- Start Icon -->
    <section class="overflow-x-hidden mt-2 mx-auto container mb-24 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
      <div class="flex flex-col md:flex-row items-center justify-center text-lg font-semibold text-pri-100" data-aos="zoom-in">
        <div class="text-center lg:px-10 md:px-5">
          <svg class="icon w-20 md:w-16">
            <use xlink:href="Assets/img/sprite.svg#Empati" />
          </svg>
          <h3 class="-mt-4">Empati</h3>
        </div>
        <div class="text-center lg:px-10 md:px-5">
          <svg class="icon w-20 md:w-16 mx-auto">
            <use xlink:href="Assets/img/sprite.svg#Komunikatif" />
          </svg>
          <h3 class="-mt-4">Komunikatif</h3>
        </div>
        <div class="text-center lg:px-10 md:px-5">
          <svg class="icon w-20 md:w-16">
            <use xlink:href="Assets/img/sprite.svg#Sportif" />
          </svg>
          <h3 class="-mt-4">Sportif</h3>
        </div>
        <div class="text-center lg:px-10 md:px-5">
          <svg class="icon w-20 md:w-16">
            <use xlink:href="Assets/img/sprite.svg#Inovasi" />
          </svg>
          <h3 class="-mt-4">Inovatif</h3>
        </div>
        <div class="text-center lg:px-10 md:px-5">
          <svg class="icon w-20 md:w-16">
            <use xlink:href="Assets/img/sprite.svg#Simpati" />
          </svg>
          <h3 class="-mt-4">Simpati</h3>
        </div>
      </div>
      </div>
    </section>
    <!-- End Icon -->

    <!-- Start Kegiatan -->
    <section class="bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 py-24">
      <div class="max-w-6xl mx-auto">
        <div class="flex flex-row justify-center">
          <div class="">
            <h3 class="mb-4 text-pri-100 text-xl font-bold">Kegiatan Sekolah</h3>
            <hr class="pt-1 w-16 bg-pri-100 mx-auto">
          </div>
        </div>

        <div class="flex py-12 flex-wrap justify-center -mx-2 overflow-x-hidden">
          <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-4" data-aos="flip-right">
            <div class=" bg-white max-w-full shadow-xl rounded-md overflow-hidden relative">
              <a href="#">
                <span class="absolute inset-0 hover:opacity-0 opacity-50 bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 cursor-pointer"></span>
                <img class="object-cover lg:h-48 h-56 w-full bg-center" src="Assets/img/PraktekIPA.png" alt="">
              </a>
            </div>
            <div class="pt-6 text-center">
              <h5 class="text-lg text-gray-900 font-semibold">Praktek IPA</h5>
            </div>
          </div>
          <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-4" data-aos="flip-right">
            <div class=" bg-white max-w-full shadow-xl rounded-md overflow-hidden relative">
              <a href="#">
                <span class="absolute inset-0 hover:opacity-0 opacity-50 bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 cursor-pointer"></span>
                <img class="object-cover lg:h-48 h-56 w-full bg-center" src="Assets/img/Menjaga Lingkungan.png" alt="">
              </a>
            </div>
            <div class="pt-6 text-center">
              <h5 class="text-lg text-gray-900 font-semibold">Menanam Pohon</h5>
            </div>
          </div>
          <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-4" data-aos="flip-right">
            <div class=" bg-white max-w-full shadow-xl rounded-md overflow-hidden relative">
              <a href="#">
                <span class="absolute inset-0 hover:opacity-0 opacity-50 bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 cursor-pointer"></span>
                <img class="object-cover lg:h-48 h-56 w-full bg-center" src="Assets/img/LombaBacaKitab.png" alt="">
              </a>
            </div>
            <div class="pt-6 text-center">
              <h5 class="text-lg text-gray-900 font-semibold">Lomba Baca Al Kitab</h5>
            </div>
          </div>
        </div>

        <div class="text-center -mt-5">
          <a href="#" class="w-auto text-center text-sm bg-pri-100 hover:bg-pri-200 text-white font-semibold hover:text-pri-100 p-4 hover:border-transparent rounded inline-block cursor-pointer">Lihat Semua</a>
        </div>
      </div>
    </section>
    <!-- End Kegiatan -->

    <!-- Pengumuman -->
    <section class="container mx-auto w-10/12 lg:w-full lg:px-16 xl:px-40 2xl:px-64 py-24">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 overflow-x-hidden">
        <div class="bg-pri-100 md:col-span-2 shadow-xl text-white" data-aos="fade-down">
          <div class="flex flex-wrap lg:flex-no-wrap">
            <img class="h-56 lg:h-64 w-full lg:w-auto object-cover" src="https://img.freepik.com/free-vector/megaphone-announcement-with-paper-art-style_67590-497.jpg?size=626&ext=jpg" alt="">
            <div class="flex">
              <div class="p-8">
                <h1 class="font-semibold text-2xl lg:text-4xl">Pengumuman</h1>
                <div class="flex items-center text-sm opacity-75">
                  <span>
                    <i class="far fa-calendar-alt"></i>
                  </span>
                  <span class="ml-3">
                    <p>22 November 2020</p>
                  </span>
                </div>
                <span>
                  <p class="mt-2 truncate-3-lines text-sm text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem doloribus eveniet deserunt debitis, quos delectus inventore veniam voluptas eos, itaque, ut provident. Dolorum sit quibusdam, repellat impedit et cupiditate autem.</p>
                </span>
                <a class="pt-5 inline-block hover:text-pri-200 text-sm" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white col-span-1 p-8 shadow-xl" data-aos="fade-right">
          <div>
            <h3 class="mb-4 text-pri-100 text-xl font-bold">Colors of Marsudirini</h3>
            <p class="truncate-3-lines text-gray-800 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus dolorem ex veritatis omnis. Facere beatae at illum inventore omnis aliquam sed officia culpa laborum vitae, quae veritatis atque dolorum eos.</p>
            <a class="pt-5 inline-block text-gray-800 hover:text-pri-200 text-sm" href="#">Read More</a>
          </div>
        </div>
        <div class="bg-white col-span-1 p-8 shadow-xl" data-aos="fade-left">
          <div>
            <h3 class="mb-4 text-pri-100 text-xl font-bold">Tata Tertib Sekolah</h3>
            <p class="truncate-3-lines text-gray-800 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus dolorem ex veritatis omnis. Facere beatae at illum inventore omnis aliquam sed officia culpa laborum vitae, quae veritatis atque dolorum eos.</p>
            <a class="pt-5 inline-block text-gray-800 hover:text-pri-200 text-sm" href="#">Read More</a>
          </div>
        </div>
      </div>

    </section>
    <!-- End Pengumuman -->
  </main>

  <!-- Start Footer -->
  <footer class="relative bg-pri-100 text-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-16 pb-10">
    <div class="flex flex-col sm:flex-row sm:flex-wrap justify-between pl-4 lg:pl-0 lg:pr-0">
      <div class="sm:w-1/2 lg:w-1/5">
        <h5 class="uppercase text-sm tracking-wider font-semibold">Profil Sekolah</h5>
        <ul class="mt-4">
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Sejarah</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Visi & Misi</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Mars Lagu Sekolah</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Guru & Karyawan</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Fasilitas</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Kegiatan Sekolah</a></li>
        </ul>
      </div>

      <div class="w-full mt-8 sm:w-1/2 sm:mt-0 lg:w-1/5 lg:mt-0">
        <h5 class="uppercase text-sm tracking-wider font-semibold">Useful Link</h5>
        <ul class="mt-4">
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Pendaftaran Siswa Baru</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Kurikulum</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Kalender Kegiatan</a></li>
          <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Alumni</a></li>
        </ul>
      </div>

      <div class="w-full mt-8 sm:w-1/2 sm:mt-12 lg:w-1/5 lg:mt-0 lg:-ml-8">
        <h5 class="uppercase text-sm  tracking-wider font-semibold">Contact Details</h5>
        <ul class="mt-4">
          <li>
            <a href="#" title="" class="flex items-start opacity-75 hover:opacity-100">
              <span>
                <i class="fas fa-map-marker-alt text-lg"></i>
              </span>
              <span class="ml-3">
                Jl. Ronggowarsito No.08 Semarang
              </span>
            </a>
          </li>
          <li class="mt-4">
            <a href="#" title="" class="flex items-center opacity-75 hover:opacity-100">
              <span>
                <i class="fas fa-phone-alt text-lg"></i>
              </span>
              <span class="ml-3">
                (024) 356-3065
              </span>
            </a>
          </li>
          <li class="mt-4">
            <a href="#" title="" class="flex items-center opacity-75 hover:opacity-100">
              <span>
                <i class="fas fa-fax text-lg"></i>
              </span>
              <span class="ml-3">
                (024) 355-8695
              </span>
            </a>
          </li>
          <li class="mt-4">
            <a href="#" title="" class="flex items-center opacity-75 hover:opacity-100">
              <span>
                <i class="fas fa-envelope text-lg"></i>
              </span>
              <span class="ml-3">
                cs@sdmarsudirini.sch.id
              </span>
            </a>
          </li>
        </ul>
      </div>

      <div class="w-full mt-8 sm:w-1/2 sm:mt-12 lg:w-1/5 lg:mt-0 -ml-2 lg:ml-0">
        <div class="grid justify-center md:justify-start lg:justify-center grid-col-1 lg:-mr-8">
          <div class=""><img class="w-32" src="assets/img/logo.png" alt=""></div>
          <div class="flex justify-center px-0">
            <ul class="mt-8 flex">
              <li>
                <a href="#" target="_blank" title="">
                  <i class="flex fab fa-facebook text-2xl hover:text-pri-200"></i>
                </a>
              </li>

              <li class="ml-6">
                <a href="#" target="_blank" title="">
                  <i class="flex fab fa-instagram text-2xl hover:text-pri-200"></i>
                </a>
              </li>

              <li class="ml-6">
                <a href="https://www.youtube.com/channel/UCIPeGDRLls32PhqBGxfbHng" target="_blank" title="Official Youtube">
                  <i class="flex fab fa-youtube text-2xl hover:text-pri-200"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-16">
      <hr class="mb-8">
      <p class="text-center text-sm text-white opacity-50">2020 © Website by Team 5 BINUS. All rights reserved.</p>
    </div>
  </footer>
  <!-- end footer -->

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glide/glide.js') }}"></script>
  <script>
    new Glide(".glide", {
      type: 'slider'
      , autoplay: 3000
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    $(function() {


      var navigation = $("#navbar");
      var nav = $("#nav");
      var logoShape = $("#logo-nav");
      var imgLogo = $("#img-logo");

      $(window).scroll(function() {


        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
          navigation.addClass("bg-white shadow-md text-pri-100");
          navigation.removeClass("text-white");
          nav.removeClass("bg-pri-100 shadow-md")
          logoShape.removeClass("bg-white shadow-xl");
          imgLogo.addClass("w-16 py-2");
          imgLogo.removeClass("w-auto p-2 lg:p-3");
        } else {
          navigation.addClass("text-white");
          navigation.removeClass("bg-white xl:py-4 shadow-md text-pri-100");
          nav.addClass("bg-pri-100 shadow-md")
          imgLogo.removeClass("w-16 py-2");
          imgLogo.addClass("w-auto p-2 lg:p-3");
          logoShape.addClass("bg-white shadow-xl rounded-b-xl")
        }
      });
    });

  </script>
</body>
</html>
