<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'ManGo - Belajar Bahasa Jepang')
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css"> 
        <link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css"> 
        <style>
            .disabled{
                background-color: #d8d7d5;
            }
            .disabled:hover{
                background-color: #d8d7d5;
            }
        </style>
        
    </head>
    <body style="background-color: #f3f7f7">
        @extends('layouts.user.navLayouts')
        <div class="page-section ">
            <div class="row container-fluid">
                <div class="col-xl-4 col-md-12">
                    <div class="box-container">
                        <canvas class="w-100" id="XPChart" width="max-content" height="max-content"></canvas>
                    </div>
                    <div class="box-container" id="table-container">
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
                    <h3 class="section-title">Exam Result</h3>
                    <span class="underline left"></span>
                    <p>
                        <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Exan Title</th>
                                <th>Date</th>
                                <th>Result</th>
                                <!-- <th>Details</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $key=>$res)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$res->quizes->quiz_name}} </td>
                            <td>{{$res->date}} </td>
                            <td>{{$res->yes_ans/($res->yes_ans+$res->no_ans)*100}} </td>
                            <td><a href="/MyExamDetails/{{$res->quizes_id}}">Details</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table> 
                    </p>
                    <a href="/quiz" class="btn btn-dark-gray">Today Exam</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
        <script src="{{asset('js/user.js')}}"></script>
    </body>
</html>