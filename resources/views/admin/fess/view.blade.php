 @extends('layouts.admin.master')
 @section('title','Course fees view')
 @section('content')
 <div class="page-header">
<h1>
 Course fees View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Course Fee view
</small>
&nbsp;<a href="/feeses/create">Add Course Fee</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th> Title</th>
		<th>Photo</th>
		<th>Description</th>
		<th>view</th>
		<th>edit</th>
		<th>delete</th>
	</tr></thead><tbody>
@foreach($fees as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->title}}</td>
	<td><img src="{{asset('/images/notice_images/'.$data->image)}}" width="100" height="100"/></td>
	<td> {!! $data->details !!} </td>
	 <td>
		
		<a href="/feeses/{{$data->id}}"><button class="btn btn-info btn-lg">view</button></a></td>
	<td>
		
		<a href="/feeses/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>
			{{Form::open(['url'=>'/feeses/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}
		</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection