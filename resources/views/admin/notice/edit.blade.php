@extends('layouts.admin.master')
@section('title','Notice Update')
@section('content') 
<div class="page-header">
<h1>
Notice Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Notice Update for front page </small>&nbsp;<a href="/notices">Notice View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
{{Form::open(['url'=>'/notices/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Notice Title :</label>
	<div class="col-sm-10">
	<input type="text" id="form-field-2" placeholder="Notice Titile example : Admission going on 2019" class="col-xs-10 col-sm-5" class="form-control" name="title" required="" value="{{$data->title}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Notice Photo :</label>
	<div class="col-sm-10">
		<input type="file" id="form-field-1" class="col-xs-10 col-sm-5" name="image" onchange="return previewImage(event)"  />
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">image size 1280 * 720</span></span>
	</div><img id="output" width="100" height="100" src="{{asset('/images/notice_images/'.$data->image)}}" style="margin-top:10px;">
</div>
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Description :</label>
	<div class="col-sm-10">
<textarea name="details" id="summernote"></textarea>
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
			placeholder:'Description',
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
		var content = {!! json_encode($data->details) !!};
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