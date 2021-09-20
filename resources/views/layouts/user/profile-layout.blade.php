<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'ManGo - Belajar Bahasa Jepang')
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css"> 
        <style>
            .border-bottom-only{
                border-top: 0 !important;
                border-left: 0 !important;
                border-right: 0 !important;
                border-bottom: 1px solid #dee2e6 !important;
            }
        </style>
    </head>
    <body style="background-color: #f3f7f7">
        @extends('layouts.user.navLayouts')
        <div class="page-section">
            <div class="row">
                {{-- list menu --}}
                <div class="col-xl-4 col-md-12">
                    <div class="box-container">
                        <div class="profile-container">
                            <div class="d-flex flex-column bd-highlight align-items-center" style="margin-bottom: 0 !important">
                                <div class=" bd-highlight">
                                    <div  id="pictContainer">
                                        <img src="{{asset('img/man.png')}}" class="img-fluid" id="profile-pict">
                                    </div>
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
                    </div>
                    <div class="box-container">
                        <ul class="list-group" id="profile-menu-list">
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/profile') }}" class="profile-link {{ (request()->is('profile')) ? 'menu-active' : '' }}"><i class="fas fa-user-cog"></i> Profil</a></li>
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/stats') }}" class="profile-link {{ (request()->is('stats')) ? 'menu-active' : '' }}"><i class="fas fa-chart-line"></i> Statistik</a></li>
                            <li class="list-group-item border-bottom-only "><a href="{{ url('/change-password') }}" class="profile-link {{ (request()->is('change-password')) ? 'menu-active' : '' }}"><i class="fas fa-unlock"></i> Ubah Kata Sandi</a></li>
                            <li class="list-group-item border-bottom-only"><a href="{{ url('/logout') }}" class="profile-link"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
                          </ul>
                    </div>
                </div>
                @yield('main-content')
    </body>
</html>