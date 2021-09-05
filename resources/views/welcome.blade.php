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
    <header class="pagehead" id="bg-index">
        <div class="container h-100">
            <div class="d-flex bd-highlight h-100 align-items-center">
                <div class="p-2 flex-fill bd-highlight text-left">
                    <h1 class="page-title">Belajar Bahasa Mudah, <br> Praktis, dan Efektif</h1>
                    <a href="#main-section" class="btn-explore js-scroll-trigger" role="button" id="btn-exp">Jelajahi</a>
                </div>

            </div>
        </div>
    </header>
    <section class="page-section info-section" id="main-section">
        <div class="container-fluid">
            
        </div>
    </section>

    @endsection   