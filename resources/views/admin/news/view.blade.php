 @extends('layouts.admin.master')
 @section('title','News view')
 @section('content')
 <div class="page-header">
<h1>
News View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All  News view
</small>
&nbsp;<a href="/newses/create">Add News</a>
</h1>
</div><!-- /.page-header -->
@include('admin.messages.message')
<div class="row">
<table class="table table-bordered">
	<tr>
		<th>SL</th>
		<th>Featured Image</th>
		<th>Event Title</th>
		<th>Event Description</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php $i=$newsad->perPage()*($newsad->currentPage()-1);?>
@foreach($newsad as $key=>$data)
<tr>
	<td><?php $i++; ?> {{$i}}</td>
	<td><img src="{{asset('/images/news_featuredimages/'.$data->featured_image)}}" width="100" height="100"/></td>
	<td>{{$data->title}}</td>
	<td>{!! \Illuminate\Support\Str::words($data->description,30,'....')  !!} </td>
	<td ><a href="/newses/{{$data->id}}" target="_blank"><button class="btn btn-success btn-lg" >View</button></a> 
		</td>
		<td><a href="/newses/{{$data->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a></td>
		<td>{{Form::open(['url'=>'/newses/'.$data->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach

</table>
</div>
{{ $newsad->links() }}
@endsection