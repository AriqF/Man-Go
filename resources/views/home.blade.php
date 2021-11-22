@extends('layouts.user.homeLayout')
@section('main-content')
    <div class="box-container" id="hi1">
        <div class="row">
            <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                <h3>Hiragana</h3>
                <p>Belajar dasar-dasar huruf Hiragana</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="d-flex flex-column bd-highlight mb-3 text-center my-2">
                    <div class="bd-highlight">
                        <a href="{{ url('/hiragana') }}"><button class="btnr btn-learn ">Belajar Materi</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-container" id="ka1">
        <div class="row">
            <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                <h3>Katakana</h3>
                <p>Belajar dasar-dasar huruf Katakana</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="d-flex flex-column bd-highlight mb-3 text-center my-2">
                    <div class=" bd-highlight">
                        <a href="{{url('/katakana')}}"> <button class="btnr btn-learn ">Belajar Materi</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-container" id="ak1">
        <div class="row">
            <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                <h3>Pertemuan</h3>
                <p>Belajar kosa kata dan kalimat yang sering digunakan saat bertemu dengan orang lain, seperti perkenalan,
                    bertanya tempat, dan lainnya.
                </p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="d-flex flex-column bd-highlight mb-3 text-center my-2">
                    <div class=" bd-highlight">
                        <a href="{{url('/meet')}}"> <button class="btnr btn-learn ">Belajar Materi</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-container" id="kj1">
        <div class="row">
            <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                <h3>Makanan</h3>
                <p>Belajar kosa kata dan kalimat yang sering digunakan saat memesan makanan</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="d-flex flex-column bd-highlight mb-3 text-center my-2">
                    <div class=" bd-highlight">
                        <a href="{{url('/food')}}"> <button class="btnr btn-learn ">Belajar Materi</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection