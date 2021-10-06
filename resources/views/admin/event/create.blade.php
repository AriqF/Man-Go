@extends('layouts.admin.master')
@section('title','event add')
@section('style')
<style type="text/css">
	.middle{
		color: red;
		font-weight: bold;
	}
</style>
@endsection
@section('content')
<div class="">
	<div class="page-header">
<h1>
Event Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Event add for front page </small>&nbsp;<a href="/events">Event View</a>
</h1>
</div>
@include('admin.messages.message')
<div class="row">
<div class="col-xs-12">
	 <form class="form-horizontal" role="form" action="/events" method="POST" enctype="multipart/form-data">
	 	{{csrf_field()}}
	 	<section>
	 		 <div class="space-4"></div>
	 		 <div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Featured Image :</label>
	<div class="col-sm-9">
		<input type="file" id="form-field-2"  name="featured_image" required="" class="help-inline col-xs-10 col-sm-5"/>
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">image size 400 * 260</span></span>
	</div>
	

</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Title :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Title example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="title" required="" />
	</div>
</div>
<div class="space-4"></div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Short Description :</label>
	<div class="col-sm-10">
		<textarea name="short_description" class="form-control" id="form-field-2" placeholder="short description"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Description :</label>
	<div class="col-sm-10">
		<textarea name="description" class="form-control" id="summernote" placeholder="description"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Date :</label>
	<div class="col-sm-10">
		<input type="date" id="form-field-2" placeholder="Title example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="date" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Location :</label>
	<div class="col-sm-10">
		<input type="text" id="form-field-2" placeholder="Location" class="col-xs-10 col-sm-5" class="form-control" name="location" maxlength="60" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Event Images :</label>
	<div class="col-sm-10">
		<input type="file" id="form-field-2"  class=" col-xs-10 col-sm-5"  name="image[]" multiple/>
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">please select multiple image</span></span>
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
	 		<!-- <div class="panel panel-footer" >
	 			<table class="table table-bordered">
	 				<thead>
	 					<tr>
	 						<th>Image</th>
	 						<th>Image</th>
	 						<th>Image</th>
	 						<th>Image</th>
	 						<th><a href="#" class="addRow">Add more +</a></th>
	 					</tr>
	 				</thead>
	 				<tbody>
	 	<tr>
	 	<td><input type="file" name="image[]" ></td>
	 	<td><input type="file" name="image[]" ></td>
           <td><input type="file" name="image[]" ></td>
           <td><input type="file" name="image[]" ></td>
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
         </tr>
	 					 
	 				</tbody>
	 				<tfoot>
	 					<tr>
	 						<td><input type="submit" value="Submit" class="btn btn-success"></td>
	 						<td style="border: none"></td>
	 						 
	 						<td style="border: none"></td>
	 						<td style="border: none"></td>
	 						<td><b class="total"></b> </td>
	 						
	 					</tr>
	 				</tfoot>
	 			</table>
	 		</div> -->
	 	</section>
	 </form>
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
		'<td><input type="file" name="image[]"   ></td>'+
		'<td><input type="file" name="image[]"></td>'+
		'<td><input type="file" name="image[]" ></td>'+
		' <td><input type="file" name="image[]" ></td>'+
		'<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
		'</tr>';
		$('tbody').append(tr);
	};
	$('.remove').live('click',function(){
		var last=$('tbody tr').length;
		if(last==1){
			alert("you can not remove last row");
		}
		else{
			 $(this).parent().parent().remove();
		}
     
	});
</script>

@endsection