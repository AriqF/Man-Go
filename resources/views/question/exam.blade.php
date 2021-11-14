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
                    <div class="box-container">
                        <div class="icon-bar" >
                            <p>
                                Exam Time:    &nbsp; <span class="js-timeout" >{{$quiz->quiz_time}}</span>
                            </p>                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    {{--container materi--}}
                    <div class="box-container" id="hi1">
                        <div class="row">
                            <div class="col-md-12">
                                <section class=" " oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;">
                                @if($questions->count()>0)
                                    <form action="/exams" method="POST" name="exam">
                                        {{csrf_field()}}
                                    <div class="col-md-12">

                                @foreach($questions as $key=>$ques)
                                <input type="hidden" name="questions_id{{$key+1}}" value="{{$ques->id}}">

                                <input type="hidden" name="ans{{$key+1}}" value="0">
                                <h5 > {{$key+1}}. {{$ques->question}}</h5>
                                <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
                                    @foreach($ques->optionsdata as $opt)

                                    <li><input type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
                                
                                    @endforeach
                                    
                                </ol>
                                @endforeach
                                <input type="hidden" name="index" value="<?php echo $key+1 ?>">
                                <input type="hidden" name="quizes_id" value="{{$quiz->id}}">
                                </div>
                                <input type="submit" class="btn btn-primary " value="submit"  >
                                </form>

                                @else

                                <h2 style="color: red;"> Opps! No Data Found</h2>
                                @endif
                                </div>
                                </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript">
            var interval;
            var form=document.forms.exam;
            function countdown() {
            clearInterval(interval);
            interval = setInterval( function() {
            var timer = $('.js-timeout').html();
            timer = timer.split(':');
            var minutes = timer[0];
            var seconds = timer[1];
            seconds -= 1;
            if (minutes < 0) return;
            else if (seconds < 0 && minutes != 0) {
            minutes -= 1;
            seconds = 59;
            }
            else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

            $('.js-timeout').html(minutes + ':' + seconds);

            if (minutes == 0 && seconds == 0) { clearInterval(interval);  form.submit(); alert("Time Over Please Click Ok Button");}
            }, 1000);
            }
                                    
            $('.js-timeout').text("{{ $quiz->quiz_time }}");
            countdown();
        </script>
        <script src="{{asset('js/user.js')}}"></script>
    </body>
</html>