@extends('layouts.admin.master')
@section('title','News add')
@section('content')
<div class="">
	<div class="page-header">
<h1>
News Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
News add for front page </small>&nbsp;<a href="/newses">News View</a>
</h1>
</div>
@include('admin.messages.message')
<div class="row">
<div class="col-xs-12">
	 <form class="form-horizontal" role="form" action="/newses" method="POST" enctype="multipart/form-data">
	 	{{csrf_field()}}
	 	<section>
	 		 <div class="space-4"></div>
	 		 <div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Featured Image :</label>
	<div class="col-sm-9">
		<input type="file" id="form-field-2"  name="featured_image" required=""/>
		<span class="help-inline col-xs-9 col-sm-3">
			<span class="middle">image size 300 * 260</span></span>
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
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Description :</label>
	<div class="col-sm-10">
		<textarea name="description" class="form-control" id="form-field-2" placeholder="Title example : Message From Director"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label no-padding-right" for="form-field-2">Date :</label>
	<div class="col-sm-10">
		<input type="date" id="form-field-2" placeholder="Title example : Message From Director" class="col-xs-10 col-sm-5" class="form-control" name="date" />
	</div>
</div>
	 		<div class="panel panel-footer" >
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
	 					</tr>
	 				</tbody>
	 				<tfoot>
	 					<tr>
	 						<td style="border: none"></td>
	 						 
	 						<td style="border: none"></td>
	 						<td style="border: none"></td>
	 						<td><b class="total"></b> </td>
	 						<td><input type="submit" value="Submit" class="btn btn-success"></td>
	 					</tr>
	 				</tfoot>
	 			</table>
	 		</div>
	 	</section>
	 </form>
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