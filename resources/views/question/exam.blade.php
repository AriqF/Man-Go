<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('title', 'ManGo - Quiz {{$quiz->quiz_name}}')
        @extends('layouts.index-master')
        <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css"> 
        <link rel="stylesheet" href="{{ asset('css/utility.css') }}" type="text/css"> 
    </head>
    <body style="background-color: #f3f7f7">
        @extends('layouts.user.navLayouts')
        <div class="page-section ">
            <div class="row container-fluid">
                <div class="col-xl-4 col-md-12">
                    <div class="box-container fadeInDown " id="quiz-info-box">
                        <h3>{{$quiz->quiz_name}}</h3>
                        <p>Petunjuk: {{$quiz->description}}</p>
                        <p>Waktu Quiz:    &nbsp; <span class="js-timeout" >{{$quiz->quiz_time}}</span> </p>  
                        <p>Jumlah Soal: {{$quiz->number_of_question}}</p>                          
                    </div>
                    <div class="box-container fadeInUp" >
                        <div class="d-flex flex-wrap">          
                            @foreach ($questions as $key=>$ques)
                                <a href="#q{{$key}}" class="box-num" id="boxNum{{$key+1}}"><span>{{$key+1}}</span></a>
                            @endforeach 
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12">
                    {{--container materi--}}
                    <div class="box-container fadeInLeft" id="hi1">
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

                                                    <li><input id="q{{$key+1}}" oninput="fillBoxNum({{$key+1}})" type="radio" name="ans{{$key+1}}" value="{{$opt->option}}" /> {{$opt->option}}   </li>
                                                    <script>
                                                        function fillBoxNum(key){
                                                            console.log({{$key+1}});
                                                            document.getElementById("boxNum" + key).style.backgroundColor = '#50da0b';
                                                            document.getElementById("boxNum" + key).style.color = '#fff';
                                                        }
                                                    </script>
                                                @endforeach      
                                            </ol>
                                            @endforeach
                                            <input type="hidden" name="index" value="<?php echo $key+1 ?>">
                                            <input type="hidden" name="quizes_id" value="{{$quiz->id}}">
                                        </div>
                                        <button class="btnr btn-excercise" style="margin-left: 12px !important" type="submit">Submit</button>
                                    </form>
                                @else
                                    <h2 style="color: red;"> Opps! No Data Found</h2>
                                @endif
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