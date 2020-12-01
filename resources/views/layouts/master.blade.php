<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') - {{ setting('site.title') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glide/glide.core.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glide/glide.theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/lightgallery/lightgallery.min.css') }}">
  <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">
  <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">

</head>
<body class="antialiased font-body bg-gray-200">
  <!-- Navbar -->
  @include('layouts.nav')
  <!-- Main Area -->
  <main>
    @yield('content')
  </main>

  <!-- Start Footer -->
  @include('layouts.footer')
  <!-- end footer -->

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
  <script src="{{ asset('vendor/lightgallery/lightgallery.min.js') }}"></script>
  <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
  <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
  @yield('additional_scripts')
</body>
</html>
