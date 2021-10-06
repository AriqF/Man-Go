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
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
 @include('admin.messages.message')

<form class="form-horizontal" role="form" action="/contactaddresses" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Title</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="title" class="col-xs-10 col-sm-5" name="title" required="" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mobile Number </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Mobile Number" class="col-xs-10 col-sm-5" name="mobile" required="" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Email </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Email" class="col-xs-10 col-sm-5" name="email" required="" />
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Address </label>
	<div class="col-sm-9">
		<textarea name="address" class="col-xs-10 col-sm-5" required=""></textarea>
		
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Facebook </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://facebook.com/...." class="col-xs-10 col-sm-5" name="facebook" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Twiter </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://Twiter.com/...." class="col-xs-10 col-sm-5" name="twiter"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Instagram </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://instagram.com/...." class="col-xs-10 col-sm-5" name="instragram" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Google Plus</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://plush.google.com/...." class="col-xs-10 col-sm-5" name="google" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Pinterest </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://pinterest.com/...." class="col-xs-10 col-sm-5" name="pinterest" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Whatsapp </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="http://whatsapp.com/...." class="col-xs-10 col-sm-5" name="whatsapp" />
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
		<button class="btn" type="reset">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			Reset
		</button>
	</div>
</div>

<div class="hr hr-24"></div>

 
</form>

 <!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div>
@endsection