<footer class="relative bg-pri-100 text-white text-md lg:text-sm px-4 sm:px-8 lg:px-12 xl:px-40 pt-16 pb-10">
  <div class="container mx-auto max-screen-xl flex flex-col sm:flex-row sm:flex-wrap justify-between pl-4 lg:px-0">
    <div class="sm:w-1/2 lg:w-1/5">
      <h5 class="uppercase tracking-wider font-semibold">Profil Sekolah</h5>
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
      <h5 class="uppercase tracking-wider font-semibold">Useful Link</h5>
      <ul class="mt-4">
        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Pendaftaran Siswa Baru</a></li>
        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Kurikulum</a></li>
        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Kalender Kegiatan</a></li>
        <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Alumni</a></li>
      </ul>
    </div>

    <div class="w-full mt-8 sm:w-1/2 sm:mt-12 lg:w-1/5 lg:mt-0 lg:-ml-8">
      <h5 class="uppercase tracking-wider font-semibold">Contact Details</h5>
      <ul class="mt-4">
        <li>
          <a href="https://goo.gl/maps/oCCLtZLgGA2zbm5G8" title="Alamat" target="_blank" class="flex items-start opacity-75 hover:opacity-100">
            <span>
              <i class="fas fa-map-marker-alt text-lg"></i>
            </span>
            <span class="ml-3">
              {{setting('site.address_location')}}
            </span>
          </a>
        </li>
        <li class="mt-4">
          <a href="tel:{{setting('site.primary_phone')}}" title="Phone" class="flex items-center opacity-75 hover:opacity-100">
            <span>
              <i class="fas fa-phone-alt text-lg"></i>
            </span>
            <span class="ml-3">
              {{setting('site.primary_phone')}}
            </span>
          </a>
        </li>
        <li class="mt-4">
          <div class="flex items-center opacity-75 hover:opacity-100">
            <span>
              <i class="fas fa-fax text-lg"></i>
            </span>
            <span class="ml-3">
              {{setting('site.secondary_phone')}}
            </span>
          </div>
        </li>
        <li class="mt-4">
          <a href="mailto:cs@sdmarsudirinigedangan.sch.id" title="email" target="_blank" class="flex items-center opacity-75 hover:opacity-100">
            <span>
              <i class="fas fa-envelope text-lg"></i>
            </span>
            <span class="ml-3">
              {{setting('site.email_address')}}
            </span>
          </a>
        </li>
      </ul>
    </div>

    <div class="w-full mt-8 sm:w-1/2 sm:mt-12 lg:w-1/5 lg:mt-0 -ml-2 lg:ml-0">
      <div class="grid justify-center md:justify-start lg:justify-center grid-col-1 lg:-mr-8">
        <div class=""><img class="w-40 lg:w-32" src="{{ asset('storage/'.setting('site.logo')) }}" alt=""></div>
        <div class="flex justify-center px-0">
          <ul class="mt-8 flex">
            <li>
              <a href="{{setting('site.facebook_link')}}" target="_blank" title="">
                <i class="flex fab fa-facebook text-2xl hover:text-pri-200"></i>
              </a>
            </li>

            <li class="ml-6">
              <a href="{{setting('site.instagram_link')}}" target="_blank" title="">
                <i class="flex fab fa-instagram text-2xl hover:text-pri-200"></i>
              </a>
            </li>

            <li class="ml-6">
              <a href="{{setting('site.youtube_link')}}" target="_blank" title="Official Youtube">
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

