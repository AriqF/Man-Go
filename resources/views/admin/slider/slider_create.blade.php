@extends('layouts.admin.master')
@section('title','slider add')
@section('content')

<div class="page-header">
<h1>
Slider Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
slider add for front page </small>&nbsp;<a href="/sliders">Sliders View</a>
</h1>
</div><!-- /.page-header -->

<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
<form class="form-horizontal" role="form" action="/sliders" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> image </label>

	<div class="col-sm-9">
		<input type="file" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" name="file" required="" onchange="return previewImage(event)"  />
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">image size 1350 * 500</span></span>
	</div><img id="output" width="100" height="100" style="margin-top:10px;">
</div>

<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Slider Title </label>

	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Slider Title" class="col-xs-10 col-sm-5" name="slider_title" required="" />
		<!-- <span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">Slider Title</span>
		</span> -->
	</div>
</div>
 
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Slider Description</label>

	<div class="col-sm-9">
		<input data-rel="tooltip" type="text" id="form-field-1" placeholder="slider description" title="Slider Description" data-placement="bottom" class="col-xs-10 col-sm-5" name="slider_description" />
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
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection