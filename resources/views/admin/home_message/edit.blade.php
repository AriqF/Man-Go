@extends('layouts.admin.master')
@section('title','Message edit')
@section('content') 
<div class="page-header">
<h1>
Message Edit
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Message add for front page </small>&nbsp;<a href="/messages">Message View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
<form class="form-horizontal" role="form" action="/messages/{{$data->id}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}

	<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-1">Upload Photo :</label>
	<div class="col-sm-10">
		<input type="file" id="form-field-1" title="image size 200*200" data-placement="bottom" placeholder="Officer Name" class="col-xs-10 col-sm-5" name="image" onchange="return previewImage(event)"  />
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">image size 500*700</span>
		</span>
	</div><img id="output" width="100" height="100" style="margin-top:10px;" src="{{asset('/images/message_images/'.$data->image)}}">
</div>
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Name :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="name example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="name" required="" value="{{$data->name}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Designation :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Designation example :  Director" class="col-xs-10 col-sm-5" class="form-control" name="designation" required="" value="{{$data->designation}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Short Description :</label>
	<div class="col-sm-10">
<textarea name="short_description" required="" placeholder="Short Description" class="form-control">{{$data->short_description}}</textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Description :</label>
	<div class="col-sm-10">
<textarea name="description" id="summernote"></textarea>
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

 
</form>

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
    ['style', ['fontname','bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr', 'readmore']],
            ['genixcms', ['elfinder']],
            ['view', ['fullscreen', 'codeview']],
  ],
		 	 
		});

		var content = {!! json_encode($data->description) !!};
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