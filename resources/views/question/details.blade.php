@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create Quiz')
    <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
    <h2 class="mb-0 subheader">Add Question</h2>
    <div class="separator"></div>
    <h3>{{$data->quiz_name}}</h3>
    <hr>
        @foreach($questions as $key=>$ques)
        
        <h5> {{$key+1}}. {{$ques->question}}</h5>
        <ol   class="ul-list"  style="list-style-type: lower-alpha;" >
            @foreach($ques->optionsdata as $opt)
        
            <li>&nbsp;<input type="radio" {{$opt->option==$ques->answer ? 'checked' : ''}}  /> {{$opt->option}}   </li>
        
            @endforeach
            
        </ol>
        @if($ques->note!="")
        <h5 style="color: blue;">Note: {{$ques->note}}</h5>
        @endif
        @endforeach
    
    </div>


    {{-- REQUIRE SCRIPT --}}
    @include('sweetalert::alert')

@endsection