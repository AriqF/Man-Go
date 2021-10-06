@extends('layouts.admin.master')
@section('title','faculty Update')
@section('content')

<div class="page-header">
<h1>
Faculty Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Faculty add for front page </small>&nbsp;<a href="/faculties">Facuty View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
 @include('admin.messages.message')
{{Form::open(['url'=>'/faculties/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Faculty Name </label>

	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Faculty Name" class="col-xs-10 col-sm-5" name="faculty_name" required="" value="{{$data->faculty_name}}" />
		<!-- <span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">Slider Title</span>
		</span> -->
	</div>
</div>
 
<div class="space-4"></div>

<div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			Update
		</button>

		&nbsp; &nbsp; &nbsp;
		<button class="btn" type="reset">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			Reset
		</button>
	</div>
</div>

<div class="hr hr-24"></div>

 
{{Form::close()}}

 <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>
@endsection