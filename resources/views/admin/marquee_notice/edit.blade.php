@extends('layouts.admin.master')
@section('title','Scroll Notice update')
@section('content')

<div class="page-header">
<h1>
Scroll Notice Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Scroll Notice Update for front page </small>&nbsp;<a href="/mnotices">Scroll Notice View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
 @include('admin.messages.message')
{{Form::open(['url'=>'/mnotices/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Scroll Notice Title </label>

	<div class="col-sm-9">
		<textarea id="form-field-2" class="form-control" name="title" required="">{{$data->title}}</textarea>
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Scrool Notice Link :</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Notice Link Example: https://infra.edu.bd/admission/2" class="form-control" name="link" value="{{$data->link}}" />
		 
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