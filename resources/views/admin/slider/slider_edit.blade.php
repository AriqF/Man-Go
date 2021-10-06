@extends('layouts.admin.master')
@section('title','slider edit')
@section('content')

<div class="page-header">
<h1>
Slider Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Update silder for front page
</small>
&nbsp;<a href="/sliders">View Sliders</a>|&nbsp;<a href="/sliders/create">Add Sliders</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<form action="/sliders/{{$slider->id}}" class="form-horizontal" role="form" enctype="multipart/form-data" method="POST">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload image </label>

	<div class="col-sm-9">
		<input type="file" id="form-field-1" name="file"  class="col-xs-10 col-sm-5" onchange="return previewImage(event)" />

	</div>
	<img id="output" src="{{asset('images/slider_images/'.$slider->image)}}" width="100" height="100">
</div>
  <div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Slider Title </label>

	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Slider Title" class="col-xs-10 col-sm-5" name="slider_title" required="" value="{{$slider->slider_title}}" />
		 
	</div>
</div>

 <div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Slider Description </label>

	<div class="col-sm-9">
		<input data-rel="tooltip" type="text" id="form-field-2" placeholder="Slider Title" title="Slider Description " class="col-xs-10 col-sm-5" name="slider_description" required="" value="{{$slider->slider_description}}" />
		 
	</div>
</div>
 
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
 
</form>
 <!-- PAGE CONTENT ENDS -->
</div>
</div>
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection