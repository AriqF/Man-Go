 @extends('layouts.admin.master')
 @section('title','faculty view')
 @section('content')
 <div class="page-header">
<h1>
Faculty View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Faculty view
</small>
&nbsp;<a href="/faculties/create">Add Faculty</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Faculty Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr></thead><tbody>
@foreach($faculties as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	 
	<td>{{$data->faculty_name}}  </td>
	 
	<td>
		
		<a href="/faculties/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td><td>{{Form::open(['url'=>'/faculties/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection