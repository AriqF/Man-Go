@extends('layouts.user.profile-layout')
@section('main-content')

@section('title', 'ManGo - Feedback')
{{-- content --}}

<div class="col-xl-8 col-md-12">
    <div class="box-container">
        <form method="POST" action="{{ url('/rating') }}">
            @csrf
            <label class="form-label mt-3" for="user_rate" style="font-size: 16px">Bagaimana Pengalaman Anda Menggunakan
                Aplikasi ManGo?</label> <br>
            {{-- <div class="mb-4 mt-1" id="user_rate">
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="rating" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="customRadio1">Sangat Buruk</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="rating" class="custom-control-input" value="2">
                                        <label class="custom-control-label" for="customRadio2">Buruk</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="rating" class="custom-control-input" value="3">
                                        <label class="custom-control-label" for="customRadio3">Netral</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="rating" class="custom-control-input" value="4">
                                        <label class="custom-control-label" for="customRadio4">Baik</label>
                                    </div>
                                </div>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="rating" class="custom-control-input" value="5">
                                        <label class="custom-control-label" for="customRadio5">Sangat Baik</label>
                                    </div>
                                </div>
                            </div> --}}

            {{-- <input id="input-id" type="text" class="rating custom-control-input" data-size="sm"> --}}
            <div class="row">
                <div class="col-12">
                    <div class="rate">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>


            {{-- <label class="form-label" for="feed_category" style="font-size: 16px; margin-top: 8px;">Pilih kategori feedback</label>
                            <div class="input-group mb-3" id="feed_category">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="feedback_opt">Opsi</label>
                                </div>
                                <select class="custom-select" id="feedback_opt">
                                  <option selected>Pilih..</option>
                                  <option value="1">Saran dan Kritik</option>
                                  <option value="2">Keluhan</option>
                                  <option value="3">Lainnya</option>
                                </select>
                            </div> --}}
            
            <label class="form-label" for="user_feedback" style="font-size: 16px; margin-top: 8px;">Komentar</label>
            <textarea required id="user_feedback" type="text" class="form-control" name="user_feedback" rows="4"></textarea>

            <div class="d-grid">
                <div class="row">
                    <div class="col-md-12 text-center mt-3">
                        <button type="submit" class="btnr btn-save">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>

{{-- REQUIRE SCRIPT --}}
@include('sweetalert::alert')
@endsection
