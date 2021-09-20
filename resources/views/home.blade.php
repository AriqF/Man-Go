<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'ManGo - Belajar Bahasa Jepang')
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css"> 
    </head>
    <body style="background-color: #f3f7f7">
        @extends('layouts.user.navLayouts')
        <div class="page-section">
            <div class="row container-fluid">
                <div class="col-xl-4 col-md-12">
                    <div class="box-container">
                        <canvas class="w-100" id="userProgressChart" width="max-content" height="max-content"></canvas>
                    </div>
                    <div class="box-container">
                        <h3 class="text-center" style="margin-bottom: 12px">Ranking </h3>
                        <table class="table">
                            <thead style="background-color: #0b9cda; color: #fff;">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">XP</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>1200</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>920</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>910</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    {{--container materi--}}
                    <div class="box-container">
                        <div class="row">
                            <div class="col-8">
                                <h3>Hiragana I</h3>
                                <p>Belajar dasar-dasar huruf Hiragana</p>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column bd-highlight mb-3 text-center">
                                    <div class=" bd-highlight">
                                        <button class=" btn-excercise">Kerjakan Soal</button>
                                    </div>
                                    <div class=" bd-highlight">
                                        <button class=" btn-learn">Belajar Materi</button>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-container">
                        <div class="row">
                            <div class="col-8">
                                <h3>Hiragana II</h3>
                                <p>Belajar dasar-dasar huruf Hiragana dan kosa kata dasar</p>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column bd-highlight mb-3 text-center">
                                    <div class=" bd-highlight">
                                        <button class=" btn-excercise">Kerjakan Soal</button>
                                    </div>
                                    <div class=" bd-highlight">
                                        <button class=" btn-learn">Belajar Materi</button>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-container">
                        <div class="row">
                            <div class="col-8">
                                <h3>Katakana I</h3>
                                <p>Belajar dasar-dasar huruf Katakana</p>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column bd-highlight mb-3 text-center">
                                    <div class=" bd-highlight">
                                        <button class=" btn-excercise">Kerjakan Soal</button>
                                    </div>
                                    <div class=" bd-highlight">
                                        <button class=" btn-learn">Belajar Materi</button>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js" crossorigin="anonymous"></script>

        <script src="{{asset('js/user.js')}}"></script>
    </body>