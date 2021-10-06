 @extends('layouts.admin.master')
 @section('title','Subscriber view')
 @section('content')
 <div class="page-header">
<h1>
 Subscriber View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Subscriber view
</small>
&nbsp;
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Date</th>
		<th>Email</th>
		<th>edit</th>
		<th>delete</th>
	</tr></thead><tbody>
@foreach($subscribers as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->date}}</td>
	
	 <td>
		{{$data->email}}
		</td>
	<td>
		
		<a href="/upnotices/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>
			{{Form::open(['url'=>'/subscribers/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}
		</td>
	 
</tr>

@endforeach
</tbody>
</table>
{{$subscribers->links()}}
</div>
 @endsection