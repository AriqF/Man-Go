 @extends('layouts.admin.master')
 @section('title','Course view')
 @section('content')
 <div class="page-header">
<h1>
Course View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All  Course view
</small>
&nbsp;<a href="/messages/create">Add Course</a>
</h1>
</div><!-- /.page-header -->
@include('admin.messages.message')
<div class="row">
<table class="table table-bordered">
	<tr>
		<th>SL</th>
		<th>Course Image</th>
		<th>Course Name</th>
		<th>Course Title</th>
		<th>Course Description</th>
		<th>Action</th>
	</tr>
	<?php $i=$coursesd->perPage()*($coursesd->currentPage()-1);?>
@foreach($coursesd as $key=>$course)
<tr>
	<td><?php $i++; ?> {{$i}}</td>
	<td><img src="{{asset('/images/course_images/'.$course->course_image)}}" width="100" height="100"/></td>
	<td>{{$course->course_name}}</td>
	<td>{{$course->course_title}}</td>
	<td>{!! \Illuminate\Support\Str::words($course->course_description, 20,'....')  !!} </td>
	<td style="display: inline-grid;"><a href="/courses/{{$course->id}}"><button class="btn btn-success btn-lg">View</button></a> &nbsp;
		<a href="/courses/{{$course->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a> &nbsp;{{Form::open(['url'=>'/courses/'.$course->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach

</table>
</div>
{{ $coursesd->links() }}
@endsection