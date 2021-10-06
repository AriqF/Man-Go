@extends('layouts.admin.master')
@section('title','Contact address add')
@section('content')

<div class="page-header">
<h1>
Contact Address  Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Contact Address for front page </small>&nbsp;<a href="/contactaddresses">Contact Address  View</a>
</h1>
</div><!-- /.page-header -->
@include('admin.messages.message')
<div class="row">
<div class="col-xs-12">

<!-- PAGE CONTENT BEGINS -->
 {{Form::open(['url'=>'/contactaddresses/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Title</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="title" class="col-xs-10 col-sm-5" name="title" required="" value="{{$data->title}}" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mobile Number </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Mobile Number" class="col-xs-10 col-sm-5" name="mobile" required="" value="{{$data->mobile}}" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Email </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Email" class="col-xs-10 col-sm-5" name="email" required="" value="{{$data->email}}" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Address </label>
	<div class="col-sm-9">
		<textarea name="address" class="col-xs-10 col-sm-5" required="">{{$data->address}}</textarea>
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Facebook </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://facebook.com/...." class="col-xs-10 col-sm-5" name="facebook" value="{{$data->facebook}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Twitter </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://Twitter.com/...." class="col-xs-10 col-sm-5" name="twiter" value="{{$data->twiter}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Instagram </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://instagram.com/...." class="col-xs-10 col-sm-5" name="instragram" value="{{$data->instragram}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Google Plus</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://plush.google.com/...." class="col-xs-10 col-sm-5" name="google" value="{{$data->google}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Pinterest </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://pinterest.com/...." class="col-xs-10 col-sm-5" name="pinterest" value="{{$data->pinterest}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Whatsapp </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://whatsapp.com/...." class="col-xs-10 col-sm-5" name="whatsapp" value="{{$data->whatsapp}}" />
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