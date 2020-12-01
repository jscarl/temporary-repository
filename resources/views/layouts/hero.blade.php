<section class="cover relative overflow-x-hidden bg-white flex overflow-hidden justify-center content-center items-center h-screen hero">
  <div class="glide absolute top-0 bg-top bg-cover">
    <div class="glide__track" data-glide-el="track">
      <div class="glide__slides">
        @foreach($post_highlight as $highlight)
        <div class="glide__slide relative">
          <a href="{{AppAlbum::getSlug('posts', $highlight->slug)}}">
            <div class="absolute w-full z-10 inset-y-0 bg-gradient-to-bl from-pri-100 via-pri-200 to-teal-500 opacity-50"></div>


            <div class="glide__inner w-full flex justify-center items-center overflow-x-hidden">
              <img class="object-cover w-full h-screen" src="{{Voyager::image($highlight->image)}}" alt="">
              <div class="glide__tittle max-w-sm absolute z-20 md:max-w-md lg:max-w-4xl xl:max-w-6xl -mt-12 md:-mt-16 lg:-mt-24 flex flex-wrap lg:px-0 mx-auto text-center" data-aos="fade-up">
                <h1 style="text-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)" class="capitalize hover:text-white font-bold text-pri-100 text-4xl md:text-5xl xl:text-6xl leading-tight">{{$highlight->title}}</h1>


              </div>
            </div>
          </a>
        </div>
        @endforeach

      </div>

    </div>

    <div class="flex justify-center items-center">
      <div class="mb-64 pb-64 xl:mb-64 xl:pb-6 mx-auto absolute z-20 block uppercase overflow-hidden" data-glide-el="controls">

        <button class="hover:bg-white text-white hover:text-pri-100 bg-pri-100 glide__arrow--left rounded-full mx-3 lg:mx-6  w-10 h-10 cursor-pointer focus:outline-none" data-glide-dir="<">
          <span>
            <i class="fas fa-chevron-left "></i>
          </span>
        </button>
        <button class="my-auto hover:bg-white text-white hover:text-pri-100 bg-pri-100 glide__arrow--right rounded-full mx-3 lg:mx-6  w-10 h-10 cursor-pointer focus:outline-none" data-glide-dir=">">
          <span>
            <i class="fas fa-chevron-right "></i>
          </span>
        </button>
      </div>
    </div>
  </div>
</section>
