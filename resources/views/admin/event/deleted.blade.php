 @extends('layouts.admin.master')
 @section('title','Event')
 @section('content')
 <div class="page-header">
<h1>
Event View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Only Trashed Event view
</small>
&nbsp;<a href="/events/create">Add Event</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Event Title</th>
		<th>Restore</th>
		<th>Permenet Delete</th>
	</tr></thead><tbody>
@foreach($deletedEvent as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	 
	<td>{{$data->title}}  </td>
	 
	<td>
		
		<a href="/event/restore/{{$data->id}}"><button class="btn btn-info btn-lg">Restroe</button></a> </td>
		<td>{{Form::open(['url'=>'/event/pdelete/'.$data->id,'method'=>'post'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Permanetly Delete This Data?')"> Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection