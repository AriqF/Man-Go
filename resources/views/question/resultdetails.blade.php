@extends('layouts.user.homeLayout')
@section('main-content')
    <div class="box-container" id="hi1">
        <div class="row">                            
            <h3 style="margin: 10px">{{$quiz->quiz_name}}</h3><hr>
            <div class="col-md-12">
            @php $sl=0; @endphp
                @foreach($exams as $key=>$exam)
                    @foreach($questions as $ques)
                        @if($exam->questions_id==$ques->id)
                            <h5> {{++$sl}}. {{$ques->question}}</h5>
                            <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
                            @foreach($ques->optionsdata as $opt)
                                @if($ques->answer==$exam->ans)
                                        <li style="color: green;">&nbsp;<input type="radio" {{$opt->option==$ques->answer ? 'checked' : ''}}  /> {{$opt->option}}   </li>
                                    @else
                                    @if($opt->option==$ques->answer)
                                            <li style="color: green;"><input type="radio"   value="{{$opt->option}}" checked="" /> {{$opt->option}}   </li>
                                        @elseif($opt->option==$exam->ans)
                                            <li style="color: red;"><input type="radio"   value="{{$opt->option}}" checked="" /> {{$opt->option}}   </li>
                                        @else
                                            <li ><input type="radio"   value="{{$opt->option}}"  /> {{$opt->option}}   </li>
                                    @endif
                                @endif
                            @endforeach
                            </ol>
                            @if($ques->note!="")
                                <h5 style="color: blue;padding-bottom:20px;">Note: {{$ques->note}}</h5>
                            @endif
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection