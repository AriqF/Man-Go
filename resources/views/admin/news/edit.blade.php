@extends('layouts.admin.master')
@section('title','News update')
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
News Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
News Update for front page </small>&nbsp;<a href="/newses">News View</a>
</h1>
</div>
@include('admin.messages.message')
<div class="row">
<div class="col-xs-12">
	{{Form::open(['url'=>'/newses/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
	 	<section>
	 		 <div class="space-4"></div>
	 		 <div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Featured Image :</label>
	<div class="col-sm-9">
		<input type="file" id="form-field-2"  name="featured_image"/>
		<img src="{{asset('/images/news_featuredimages/'.$data->featured_image)}}" width="100" height="100">
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
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Description :</label>
	<div class="col-sm-10">
		<textarea name="description" class="form-control" id="form-field-2" placeholder="Title example : Message From Director">{{$data->description}}</textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Date :</label>
	<div class="col-sm-10">
		<input type="date" id="form-field-2" placeholder="Title example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="date" value="{{$data->date}}" />
	</div>
</div>
<div class="row">
<div class="col-sm-6">
	<h1>News Images</h1></div>
	<div class="col-sm-6">
	<span class="pull-right"><h3 class="addRow">Add more image +</h3></span>
</div>	
</div>
<div class="row">
	 		<div class="panel panel-footer" >
       @foreach($data->newsimages as $eimage)
	 	<div class="col-md-2">
	 	<img src="{{asset('/images/news_images/'.$eimage->image)}}" width="100" height="100"><br><a href="/newsimage/delete/{{$eimage->id}}" onclick="return confirm('Are you sure Delete This Data?')">Delete</a>
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