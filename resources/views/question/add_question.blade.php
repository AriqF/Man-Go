@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create Quiz')
    <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
    <h2 class="mb-0 subheader">Add Question</h2>
    <a href="/questions">Question  View</a>
    <div class="separator"></div>
        <div class="box-container border-0 shadow">
            <form class="form-horizontal" role="form" action="/questions" method="POST" >
                {{csrf_field()}}
            
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Quiz Name </label>
                <div class="col-sm-10">
                    <select class="form-control" name="quizes_id" required="">
                        @foreach ($quiz as $item)
                            <option value=" {{$item->id}} ">{{$item->quiz_name}}</option>
                        @endforeach
                    </select>
                    
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Question </label>
                <div class="col-sm-10">
                    <input type="text" id="form-field-2" placeholder="question" class="form-control" name="question" required="" />
                    
                </div>
            </div>
                
                <div class="col-md-6">
            
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 1 </label>
                <div class="col-sm-9">
                    <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
                    
                </div>
            </div>
            
                
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 2 </label>
                <div class="col-sm-9">
                    <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
                    
                </div>
            </div>
            
            </div>
                <div class="col-md-6">
                
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 3 </label>
                <div class="col-sm-9">
                    <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
                    
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2">Option 4 </label>
                <div class="col-sm-9">
                    <input type="text" id="form-field-2" placeholder="Option" class="form-control" name="option[]" required="" />
                    
                </div>
            </div>
            
            </div>
                
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Right Answer</label>
                <div class="col-sm-10">
                    <input type="text" id="form-field-2" placeholder="Right Answer" class="form-control" name="answer" required="" />
                    
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-2">Note : </label>
                <div class="col-sm-10">
                    <input type="text" id="form-field-2" placeholder=" Note " class="form-control" name="note"   />
                    
                </div>
            </div>
            
            <div class="space-4"></div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Submit
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