 @extends('layouts.admin.master')
 @section('title','Scroll Notice view')
 @section('content')
 <div class="page-header">
<h1>
Scroll Notice View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Scroll Notice view
</small>
&nbsp;<a href="/mnotices/create">Add Scroll Notice</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Scroll Notice Title</th>
		<th>Notice Link</th>
		<th>edit</th>
		<th>delete</th>
	</tr></thead><tbody>
@foreach($mdata as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	 
	<td>{{$data->title}}</td>
	<td>{{$data->link}}</td>
	 
	<td style="display: inline-grid;">
		
		<a href="/mnotices/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>
			{{Form::open(['url'=>'/mnotices/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}
		</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection