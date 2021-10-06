 @extends('layouts.admin.master')
 @section('title','staffa view')
 @section('content')
 <div class="page-header">
<h1>
Officer/Staff View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Sttafs/Officers view
</small>
&nbsp;<a href="/staffs/create">Add New Officer</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 <div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<select name="offices_id" id="office" class="form-control">
 			<option>Select a Office</option>
            @foreach($offices as $office)
 			<option value="{{$office->id}} ">{{$office->office_name}} </option>
 			@endforeach

 		</select>
 	</div>
 </div><br>
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Offcer Name</th>
		<th>Photo</th>
		<th>Degree</th>
		<th>Designation</th>
		<th>Institute</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr></thead><tbody id="staffs">

</tbody>
</table>
</div>

<script type="text/javascript">

$('#office').on('change',function(e){
console.log(e);

var offices_id= e.target.value;

$.get('/json-staffs?offices_id=' + offices_id,function(data){
console.log(data);

$('#staffs').empty();

$i=0;
$.each(data, function(index, fmembersObj){
$sl=++$i;
$('#staffs').append('<tr><td>'+ $sl +'</td><td>'+fmembersObj.staff_name+'</td><td>'+'<img src="'+('images/staff_images/')+fmembersObj.image+'" height="80"/>'+'</td><td>'+fmembersObj.degree+'</td><td>'+fmembersObj.designation+'</td><td>'+fmembersObj.institute+'</td><td>'+'<a href="/staffs/'+fmembersObj.id +'"> view</a>' +'</td><td>'+'<a href="/staffs/'+fmembersObj.id +'/edit "> edit</a>' + '</td><td>' +'<a onclick="return confirmDelete()" href="/staff/delete/'+fmembersObj.id +'"> Delete</a>' + '</td></tr>');

});

});
});
</script>

<script type="text/javascript">
function confirmDelete() {
return confirm('are you sure delete this data?');

}
</script>
 @endsection