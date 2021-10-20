@extends('layouts.user.profile-layout')
@section('main-content')

@section('title', 'ManGo - Feedback')
                {{-- content --}}
                <div class="col-xl-8 col-md-12">
                    <div class="box-container">
                        <form method="POST" enctype="multipart/form-data">
                            {{-- @method("put") --}}
                            @csrf
                            <label class="form-label mt-3" for="user_rate" style="font-size: 16px">Bagaimana Pengalaman Anda Menggunakan Aplikasi ManGo?</label>
                            <div class="mb-4 mt-1" id="user_rate">
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
                            </div>
                            
            
                            <label class="form-label" for="user_feedback" style="font-size: 16px">Komentar</label>
                            <textarea id="user_feedback" type="text" class="form-control" name="user_feedback" rows="4"></textarea>

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

