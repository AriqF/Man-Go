 @extends('layouts.admin.master')
 @section('title','office view')
 @section('content')
 <div class="page-header">
<h1>
Office View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Office view
</small>
&nbsp;<a href="/offices/create">Add Office</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Office Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr></thead><tbody>
@foreach($offices as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	 
	<td>{{$data->office_name}}  </td>
	 
	<td>
		
		<a href="/offices/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a> </td>
              <td>{{Form::open(['url'=>'/offices/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection