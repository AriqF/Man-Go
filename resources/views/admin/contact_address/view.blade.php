 @extends('layouts.admin.master')
 @section('title','Contact Address')
 @section('content')
 <div class="page-header">
<h1>
Contact Address 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Contact Address
</small>
&nbsp;<a href="/contactaddresses/create">Add Contact Address </a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Address</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr></thead><tbody>
@foreach($contact_address as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->mobile}}  </td>
	<td>{{$data->email}}  </td>
	<td>{{$data->address}}  </td>
	<td><a href="/contactaddresses/{{$data->id}}"><button class="btn btn-info btn-lg">Details</button></a></td>
	<td>
		<a href="/contactaddresses/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>{{Form::open(['url'=>'/contactaddresses/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection