@extends('layouts.admin.master')
@section('title','Course edit')
@section('content') 
<div class="page-header">
<h1>
Course Upadte
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Course Update for front page </small>&nbsp;<a href="/courses">Course View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
{{Form::open(['url'=>'/courses/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Course Photo :</label>

	<div class="col-sm-10">
		<input type="file" id="form-field-1" placeholder="Officer Name" class="col-xs-10 col-sm-5" name="course_image" onchange="return previewImage(event)"/>
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">image size 200 * 200</span></span>
	</div><img id="output" src="{{asset('/images/course_images/'.$data->course_image)}}" width="100" height="100" style="margin-top:10px;">
</div>
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Course Name :</label>
	<div class="col-sm-10">
	<input type="text" id="form-field-2" placeholder="Course Name example : Computer" class="col-xs-10 col-sm-5" class="form-control" name="course_name" required="" value="{{$data->course_name}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Course Title :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Course Title example : Diploma in Computer Engineering" class="col-xs-10 col-sm-5" class="form-control" name="course_title" required="" value="{{$data->course_title}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Course Description :</label>
	<div class="col-sm-10">
<textarea name="course_description" id="summernote"></textarea>
	</div>
</div>

<div class="space-4"></div>

<div class="clearfix form-actions">
	<div class="col-md-offset-2 col-md-10">
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
@section('script')
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#summernote').summernote({
			height:'200px',
			placeholder:'Course Details',
			lineWrapping: true,
			toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr', 'readmore']],
            ['genixcms', ['elfinder']],
            ['view', ['fullscreen', 'codeview']],
  ]
			 
		});
		var content = {!! json_encode($data->course_description) !!};
            $('#summernote').summernote('code', content);
	});
</script>
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection