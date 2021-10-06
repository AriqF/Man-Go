@extends('layouts.admin.master')
@section('title','Services view')
@section('content') 
<div class="page-header">
<h1>
Services view
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Services view for front page </small>&nbsp;<a href="/services/create">Services Add</a>
</h1>
</div><!-- /.page-header -->
@include('admin.messages.message')
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
					<td><a href="/services/{{$data->id}}/edit"> Edit</a> </td>
				<td> {{Form::open(['url'=>'/services/'.$data->id,'method'=>'Delete'])}}
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