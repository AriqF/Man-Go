@extends('layouts.admin.master')
@section('title','Services add')
@section('content') 
<div class="page-header">
<h1>
Services Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Services add for front page </small>&nbsp;<a href="/services">Services View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
<form class="form-horizontal" role="form" action="/services" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Priority :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="priority example : 1 " class="col-xs-10 col-sm-5" class="form-control" name="priority" required="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Title :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Title example : Good " class="col-xs-10 col-sm-5" class="form-control" name="title" required="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">ICON   :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="ICON example : fa fa-check" class="col-xs-10 col-sm-5" class="form-control" name="icon"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Short Description :</label>
	<div class="col-sm-10">
<textarea name="short_description" required="" placeholder="Short Description" class="form-control"></textarea>
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
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>SL</th>
					<th>Priority</th>
					<th>Title</th>
					<th>Short Description</th>
					<th>Icon</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($service as $key=>$data)
				<tr>
					<td>{{++$key}}</td>
					<td>{{$data->priority}} </td>
					<td>{{$data->title}} </td>
					<td>{{$data->short_description}} </td>
					<td>{{$data->icon}} </td>
					<td><a href="/services/{{$data->id}}/edit"> Edit</a> </td><td> {{Form::open(['url'=>'/services/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
				
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
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
		 onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
        }	 
		});
	});
</script>
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection