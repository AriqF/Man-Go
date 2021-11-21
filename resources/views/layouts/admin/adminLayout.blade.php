<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      @extends('layouts.index-master')
      <link rel="stylesheet" href="{{ asset('css/adminStyle.css') }}">
      <link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css">
    </head>
    <body style="background-color: #334756">
        @extends('layouts.admin.sidebar')
        @yield('main-content')
        {{-- Font Awesome V5--}}
        <script src="https://kit.fontawesome.com/a420508792.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('js/admin.js')}}"> </script>


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/user.js')}}"></script>
    </body>
</html>
