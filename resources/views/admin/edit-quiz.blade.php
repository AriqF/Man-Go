@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create Quiz')
    <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
    <h2 class="mb-0 subheader">Create Quiz</h2>
    <div class="separator"></div>
        <div class="box-container border-0 shadow">
            <form class="form-horizontal" role="form" action="{{url('/quizes/quiz-update',$data->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="space-4"></div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
                    <div class="col-sm-9">
                    <input type="text" id="form-field-2" placeholder="Quize Name" class="col-xs-10 col-sm-5 form-control" name="quiz_name" required="" value="{{$data->quiz_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-2" placeholder="Descriotion" class="col-xs-10 col-sm-5 form-control" name="description" required="" value="{{$data->description}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Quiz Time</label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-2" placeholder="00:00"  pattern="[0-9]{2}:[0-9]{2}" class="col-xs-10 col-sm-5 form-control"
                        name="quiz_time" required="" title="example 01:00 " aria-describedby="quizTime_help" value="{{$data->quiz_time}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label no-padding-right" for="form-field-2">Number Of Question View for User</label>
                    <div class="col-sm-9">
                        <input type="text" id="form-field-5" placeholder="How many question view for this quiz " class="col-xs-10 col-sm-5 form-control" name="number_of_question" required="" value="{{$data->number_of_question}}"/>
                    </div>
                </div>
                <div class="space-4"></div>
                <div class="clearfix form-actions" style="margin-bottom: 16px">
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

    {{-- REQUIRE SCRIPT --}}
    @include('sweetalert::alert')

@endsection