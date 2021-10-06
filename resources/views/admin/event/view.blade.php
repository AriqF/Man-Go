 @extends('layouts.admin.master')
 @section('title','Event view')
 @section('content')
 <div class="page-header">
<h1>
Event View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All  Event view
</small>
&nbsp;<a href="/events/create">Add Event</a>
</h1>
</div><!-- /.page-header -->
@include('admin.messages.message')
<div class="row">
<table class="table table-bordered">
	<tr>
		<th>SL</th>
		<th>Date</th>
		<th>Featured Image</th>
		<th>Event Title</th>
		<th>Location</th>
		<th>Short Description</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php $i=$eventsad->perPage()*($eventsad->currentPage()-1);?>
@foreach($eventsad as $key=>$data)
<tr>
	<td><?php $i++; ?> {{$i}}</td>
	<td>{{$data->date}}</td>
	<td><img src="{{asset('/images/event_featuredimages/'.$data->featured_image)}}" width="100" height="100"/></td>
	<td>{{$data->title}}</td>
		<td>{{$data->location}}</td>
	<td>{!! \Illuminate\Support\Str::words($data->short_description,30,'....')  !!} </td>
	<td ><a href="/events/{{$data->id}}" target="_blank"><button class="btn btn-success btn-lg" >View</button></a> 
		</td>
		<td><a href="/events/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>{{Form::open(['url'=>'/events/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach

</table>
</div>
{{ $eventsad->links() }}
@endsection