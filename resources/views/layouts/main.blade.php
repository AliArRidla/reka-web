<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PT. Rekaindo Global Jasa</title>
    <link rel="icon" href="assets/img/reka-logo.png">

    <!-- General CSS Files -->
    <link href={{ asset('css/boostrap.min.css') }} rel="stylesheet" />
    {{-- <link href={{ asset('css/all.css') }} rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    {{-- <link href={{ asset('css/style.css') }} rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

        
            @include('partials.sidebar')
            @include('partials.navbar')
            <!-- Main Content -->
            <div class="main-content">

                @yield('content')

            </div>
        </div>
    </div>

      <!-- General JS Scripts -->
      <script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
      <script defer async src="{{ asset('stisla/js/modules/popper.js') }}"></script>
      <script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
      <script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>
      <script defer src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
      <script defer src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
      <script defer src="{{ asset('stisla/js/modules/marked.min.js') }}"></script>
      <script defer src="{{ asset('stisla/js/modules/chart.min.js') }}"></script>      

      <script src="{{ asset('stisla/js/stisla.js') }}"></script>
      <script src="{{ asset('stisla/js/scripts.js') }}"></script>

      <livewire:scripts />
      <script src="{{ mix('js/app.js') }}" defer></script>

      @isset($script)
          {{ $script }}
      @endisset
</body>

</html>
