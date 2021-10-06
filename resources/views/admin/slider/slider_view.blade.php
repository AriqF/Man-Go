 @extends('layouts.admin.master')
 @section('title','slider view')
 @section('content')
 <div class="page-header">
<h1>
Slider View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All Slider image view
</small>
&nbsp;<a href="/sliders/create">Add Sliders</a>
</h1>
</div><!-- /.page-header -->
@if (session('warning'))
    <div class="alert alert-danger">
        {{ session('warning') }}
    </div>
    @elseif (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
 
@endif
<div class="row">
<table class="table">
	<tr>
		<th>SL</th>
		<th>Image</th>
		<th>Slider_title</th>
		<th>Slider_description</th>
		<th>Action</th>
	</tr>
@foreach($sliders as $key=>$slider)
<tr>
	<td>{{++$key}}</td>
	<td> <img src="{{asset('/images/slider_images/'.$slider->image)}}" width="100" height="100"></td>
	<td>{{$slider->slider_title}}  </td>
	<td>{{$slider->slider_description}} </td>
	<td style="display: inline-grid;"><a href="/sliders/{{$slider->id}}/edit"><button class="btn btn-info btn-lg">Edit</button></a> &nbsp;{{Form::open(['url'=>'/sliders/'.$slider->id,'method'=>'Delete'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Delete This Data?')">Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach

</table>
</div>
 @endsection