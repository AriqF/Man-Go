<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'Welcome - ManGo')
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
    </head>
    <body style="background-color: #F2F2F2;">
    <!--extends navbar-->
    @extends('layouts.indexLayout')
    @section('mainContent')
    <header class="pagehead">
        <div class="container h-100">
            <div class="d-flex bd-highlight h-100 align-items-center">
                <div class="p-2 flex-fill bd-highlight text-left">
                    <h1 class="page-title">Belajar Bahasa Jepang Mudah, <br> Praktis, dan Efektif</h1>
                    <a href="#info-section" class="btn-explore js-scroll-trigger" role="button" id="btn-exp">Jelajahi</a>
                </div>

            </div>
        </div>
    </header>
    

    <div class="page-section container-fluid text-center" id="info-section">
        <div class="info-container">
            <h2>Siap Belajar di ManGo?</h2>
            <div class="info-sub-container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 info-box" data-aos="fade-up" data-aos-duration="1000">
                        <div class="info-img-container" id="img1">
                            <img src="{{asset('img/progress.png')}}" class="img-fluid">
                        </div>
                        <div class="info-header-container">
                            <h4>Ketahui Target dan Progress-mu!</h4>
                            <p>Lacak dan ketahui perkembangan belajar-mu melalui grafik interaktif</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 info-box" data-aos="fade-up" data-aos-duration="1100">
                        <div class="info-img-container" id="img2">
                            <img src="{{asset('img/anywhere.png')}}" class="img-fluid">
                        </div>
                        <div class="info-header-container">
                            <h4>Belajar Dimana Saja dan Kapan Saja</h4>
                            <p>Dengan aplikasi v-Learning berbasis website ini kamu dapat belajar dimana saja dan kapan saja!</p>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-xs-12 info-box" data-aos="fade-up" data-aos-duration="1200">

                       <div class=" info-img-container" id="img3">
                            <img src="{{asset('img/free.png')}}" class="img-fluid">
                        </div>
                        <div class="info-header-container">
                            <h4>100% Gratis</h4>
                            <p>Kamu dapat dengan bebas menggunakan aplikasi ini secara gratis tanpa biaya sedikitpun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection  
