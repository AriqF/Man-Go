 @extends('layouts.admin.master')
 @section('title','Message view')
 @section('content')
 <div class="page-header">
<h1>
Message View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All  Message view
</small>
&nbsp;<a href="/messages/create">Add Message</a>
</h1>
</div><!-- /.page-header -->
@include('admin.messages.message')
<div class="row">
<table class="table table-bordered">
<thead>	<tr>
		<th>SL</th>
		<th>Name</th>
		<th>Image</th>
		<th>Designation</th>
		<th>Short Description</th>
		<th>Action</th>
	</tr></thead><tbody>
@foreach($messages as $key=>$message)
<tr>
	<td>{{++$key}}</td>
	<td>{{$message->name}}</td>
	<td><img src="{{asset('/images/message_images/'.$message->image)}}" style="width: 100px;height: 100px;"></td>
	<td>{{$message->designation}}</td>
	<td>{{$message->short_description}} </td>
	<td ><a href="/messages/{{$message->id}}"><button class="btn btn-success btn-lg">View</button></a> &nbsp;
		<a href="/messages/{{$message->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a> &nbsp;{{Form::open(['url'=>'/messages/'.$message->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection