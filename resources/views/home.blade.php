@extends('layouts.user.homeLayout')
@section('main-content')
    <div class="box-container" id="hi1">
        <div class="row">
            <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                <h3>Hiragana I</h3>
                <p>Belajar dasar-dasar huruf Hiragana dan kosa kata dasar</p>
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
                <h3>Katakana I</h3>
                <p>Belajar dasar-dasar huruf Katakana dan kosa kata dasar</p>
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
                <h3>Angka</h3>
                <p>Belajar angka dari 0 sampai dengan ribuan</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="d-flex flex-column bd-highlight mb-3 text-center my-2">
                    <div class=" bd-highlight">
                        <a href="#"> <button class="btnr btn-learn ">Belajar Materi</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-container" id="kj1">
        <div class="row">
            <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                <h3>Kanji</h3>
                <p>Pengenalan dasar kanji dan beserta cara membacanya</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="d-flex flex-column bd-highlight mb-3 text-center my-2">
                    <div class=" bd-highlight">
                        <a href="#"> <button class="btnr btn-learn ">Belajar Materi</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection