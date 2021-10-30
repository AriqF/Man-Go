<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css">
        <style>
            .border-bottom-only{
                border-top: 0 !important;
                border-left: 0 !important;
                border-right: 0 !important;
                border-bottom: 1px solid #dee2e6 !important;
            }
        </style>

        <!-- default styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

        <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />

        <!-- important mandatory libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

        <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

    </head>
    <body style="background-color: #f3f7f7">
        @extends('layouts.user.navLayouts')
        <div class="page-section">
            <div class="row">
                {{-- list menu --}}
                <div class="col-xl-4 col-md-12">
                    <div class="box-container" id="profile-container">
                        <div class="d-flex flex-column bd-highlight align-items-center" style="margin-bottom: 0 !important">
                            <div class=" bd-highlight">
                                <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                                <div  id="pictContainer">
                                    <img src="{{Auth::user()->getImage()}}" class="img-fluid" id="profile-pict">
                                </div>
                            </form>
                            </div>
                            <div class="bd-highlight">
                                <div id="nameContainer" class="text-center">
                                    <h3 id="profile-name">{{Auth::user()->name}}</h3>
                                    <p id="profile-fullname">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
                                    <p id="join-time">Bergabung Sejak {{Auth::user()->created_at}}</p> {{--  ubah ke format dd-mm-yyyy atau dd-month-yyyy --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-container" id="profile-menu">
                        <ul class="list-group" id="profile-menu-list">
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/profile') }}" class="profile-link {{ (request()->is('profile')) ? 'menu-active' : '' }}"><i class="fas fa-user-cog"></i> Profil</a></li>
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/change-password') }}" class="profile-link {{ (request()->is('change-password')) ? 'menu-active' : '' }}"><i class="fas fa-unlock"></i> Ubah Kata Sandi</a></li>
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/stats') }}" class="profile-link {{ (request()->is('stats')) ? 'menu-active' : '' }}"><i class="fas fa-chart-line"></i> Statistik</a></li>
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/feedback') }}" class="profile-link {{ (request()->is('feedback')) ? 'menu-active' : '' }}"><i class="fas fa-comment-dots"></i> Feedback</a></li>
                            {{-- <li class="list-group-item border-bottom-only"><a href="{{ url('/logout') }}" class="profile-link"><i class="fas fa-sign-out-alt"></i> Keluar</a></li> --}}
                          </ul>
                    </div>
                </div>
                @yield('main-content')
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js" crossorigin="anonymous"></script>

    <script src="{{asset('js/user.js')}}"></script>
    </body>
</html>
