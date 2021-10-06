@extends('layouts.admin.master')
@section('title','event update')
@section('style')
<style type="text/css">
	.addRow{
		cursor: pointer;
	}
	.remove{
		cursor: pointer;
	}
</style>
@endsection
@section('content')
<div class="">
	<div class="page-header">
<h1>
Event Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Event Update for front page </small>&nbsp;<a href="/events">Event View</a>
</h1>
</div>
@include('admin.messages.message')
<div class="row">
<div class="col-xs-12">
	{{Form::open(['url'=>'/events/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
	 	<section>
	 		 <div class="space-4"></div>
	 		 <div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Featured Image :</label>
	<div class="col-sm-9">
		<input type="file" id="form-field-2"  name="featured_image"/>
		<img src="{{asset('/images/event_featuredimages/'.$data->featured_image)}}" width="100" height="100">
		<span class="help-inline col-xs-9 col-sm-3">
			<span class="middle">image size 400 * 260</span></span>
	</div>
	

</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Title :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Title example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="title" required="" value="{{$data->title}}" />
	</div>
</div>
<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Short Description :</label>
	<div class="col-sm-10">
		<textarea name="short_description" class="form-control" id="form-field-2" placeholder="Short description">{{$data->short_description}}</textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Description :</label>
	<div class="col-sm-10">
		<textarea name="description" class="form-control" id="summernote" placeholder="Description"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Date :</label>
	<div class="col-sm-10">
		<input type="date" id="form-field-2" placeholder="Title example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="date" value="{{$data->date}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Location :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Location" class="col-xs-10 col-sm-5" class="form-control" name="location" maxlength="60" value="{{$data->location}}" />
	</div>
</div>
<div class="row">
<div class="col-sm-6">
	<h1>Event Images</h1></div>
	<div class="col-sm-6">
	<span class="pull-right"><h3 class="addRow">Add more image +</h3></span>
</div>	
</div>
<div class="row">
	 		<div class="panel panel-footer" >
       @foreach($data->eventimages as $eimage)
	 	<div class="col-md-2">
	 	<img src="{{asset('/images/event_images/'.$eimage->image)}}" width="100" height="100"><br><a href="/eimage/delete/{{$eimage->id}}" onclick="return confirm('Are you sure Delete This Data?')">Delete</a>
	 </div>
         @endforeach
	 		</div></div>

	 			<table class="table table-bordered">
                <tbody>
                	
                </tbody>
	 			</table>
          
	 		<br>
	 		
	 		<div class="row">
	 		<div class="col-md-3">
	 			<input type="submit" value="Update" class="btn btn-success">
	 		</div>
	 	</div>
	 	
	 	</section>
   {{Form::close()}}
</div>
</div></div>
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
		var content = {!! json_encode($data->description) !!};
            $('#summernote').summernote('code', content);
	});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript">
	$('tbody').delegate('.quantity,.budget','keyup',function(){
		var tr=$(this).parent().parent();
		var quantity=tr.find('.quantity').val();
		var budget=tr.find('.budget').val();
		var amount=(quantity*budget);
		tr.find('.amount').val(amount);
		total();
	});
	function total(){
		var total=0;
		$('.amount').each(function(i,e){
			var amount=$(this).val()-0;
		total +=amount;
	});
	$('.total').html(total+".00 tk");	
	}
	$('.addRow').on('click',function(){
		addRow();
	});
	function addRow()
	{
		var tr='<tr>'+
		'<td><input type="file" name="image[]"  multiple ></td>'+
		
		'<td><a  class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
		'</tr>';
		$('tbody').append(tr);
	};
	$('.remove').live('click',function(){
		var last=$('tbody tr').length;
		
			 $(this).parent().parent().remove();
		
     
	});
</script>

@endsection