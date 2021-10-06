 @extends('layouts.admin.master')
 @section('title','Contact list')
 @section('content')
 <div class="page-header">
<h1>
Contact List 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Contact List
</small>

</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Details</th>
		<th>Delete</th>
	</tr></thead><tbody>
@foreach($contacts as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->name}}  </td>
	<td>{{$data->phone}}  </td>
	<td>{{$data->email}}  </td>
	<td>{{$data->subject}}  </td>
	<td>{{substr($data->details,0,20)}}..... </td>
	<td >
		<a href="/contacts/{{$data->id}}"><button class="btn btn-info btn-lg">Details</button></a></td>
		<td>{{Form::open(['url'=>'/contacts/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection