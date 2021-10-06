 @extends('layouts.admin.master')
 @section('title','faculty members view')
 @section('content')
 <div class="page-header">
<h1>
faculty members View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All faculty members view
</small>
&nbsp;<a href="/fmembers/create">Add Faculty Members</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 <div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<select name="faculties_id" id="faculty" class="form-control">
 			<option>Select a Faculty</option>
            @foreach($faculties as $faculty)
 			<option value="{{$faculty->id}} ">{{$faculty->faculty_name}} </option>
 			@endforeach

 		</select>
 	</div>
 </div><br>
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Teacher Name</th>
		<th>Photo</th>
		
		<th>Degree</th>
		<th>Designation</th>
		<th>Institute</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr></thead><tbody id="fmembers">

</tbody>
</table>
</div>

<script type="text/javascript">

$('#faculty').on('change',function(e){
console.log(e);

var faculties_id= e.target.value;

$.get('/json-fmembersss?faculties_id=' + faculties_id,function(data){
console.log(data);

$('#fmembers').empty();

$i=0;
$.each(data, function(index, fmembersObj){
$sl=++$i;
$('#fmembers').append('<tr><td>'+ $sl +'</td><td>'+fmembersObj.teacher_name+'</td><td>'+'<img src="'+('images/teacher_images/')+fmembersObj.image+'" height="80"/>'+'</td><td>'+fmembersObj.degree+'</td><td>'+fmembersObj.designation+'</td><td>'+fmembersObj.institute+'</td><td>'+'<a href="/fmembers/'+fmembersObj.id +'"> view</a>' +'</td><td>'+'<a href="/fmembers/'+fmembersObj.id +'/edit "> edit</a>' + '</td><td>' +'<a onclick="return confirmDelete()" href="/fmembers/delete/'+fmembersObj.id +'"> Delete</a>' + '</td></tr>');

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