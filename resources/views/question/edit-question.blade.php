@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create Quiz')
    <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
    <h2 class="mb-0 subheader">Edit Question</h2>
    <a href="/questions">Question  View</a>
    <div class="separator"></div>
        <div class="box-container border-0 shadow">
            <form class="form-horizontal" role="form" action="{{url('/quize/update/'.$data->id)}}" method="POST" >
                {{csrf_field()}}
            
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
                <div class="col-sm-10">
                    <select class="form-control" name="quizes_id" required="">
                        <option value="{{$data->quizes_id}}">{{$data->quizes->quiz_name}}</option>
                        @foreach($quiz as $qzs)
                        <option value="{{$qzs->id}}">{{$qzs->quiz_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Question </label>
                <div class="col-sm-10">
                    <input type="text" id="form-field-2" placeholder="question" class="form-control" name="question" required="" value="{{$data->question}}"/>
                    
                </div>
            </div>
                
            <div class="col-md-6">
                @foreach($data->optionsdata as $key=>$option)
                <input type="hidden" name="option_id[]" value="{{$option->id}}">
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Option {{++$key}} </label>
                    <div class="col-sm-8">
                        <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" value="{{$option->option}}" />
                    </div>
                </div>
                @endforeach
            </div>
                
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Right Answer</label>
                <div class="col-sm-10">
                    <input type="text" id="form-field-2" placeholder="Right Answer" class="form-control" name="answer" required="" value="{{$data->answer}}"/>

                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Note : </label>
                <div class="col-sm-10">
                    <input type="text" id="form-field-2" placeholder=" Note " class="form-control" name="note" value="{{$data->note}}"/>
                    
                </div>
            </div>
            
            <div class="space-4"></div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Edit
                    </button>
            
                    &nbsp; &nbsp; &nbsp;
                    <button class="btn btn-danger" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                    </button>

                </div>
            </div>
            
            <div class="hr hr-24"></div>

            </form>
            
            </div>
        </div>

    </div>

    {{-- REQUIRE SCRIPT --}}
    @include('sweetalert::alert')

@endsection