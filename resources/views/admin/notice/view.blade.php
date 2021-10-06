 @extends('layouts.admin.master')
 @section('title','Notice view')
 @section('content')
 <div class="page-header">
<h1>
 Notice View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Notice view
</small>
&nbsp;<a href="/notices/create">Add Notice</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Notice Title</th>
		<th>Photo</th>
		<th>view</th>
		<th>edit</th>
		<th>delete</th>
	</tr></thead><tbody>
@foreach($notice_view as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->title}}</td>
	<td><img src="{{asset('/images/notice_images/'.$data->image)}}" width="100" height="100"/></td>
	 <td>
		
		<a href="/notice/{{$data->id}}"><button class="btn btn-info btn-lg">view</button></a></td>
	<td>
		
		<a href="/notices/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>
			{{Form::open(['url'=>'/notices/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}
		</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection