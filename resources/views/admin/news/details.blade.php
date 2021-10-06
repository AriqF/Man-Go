@extends('layouts.admin.master')
 @section('title','News view')
 @section('content')
<div class="page-header">
<h1>
News view 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
News view
</small>
&nbsp;<a href="/newses">View News</a>
</h1>
</div>
<div class="row">
	<div class="col-md-6">
		<h2>Title : {{$data->title}}</h2>
		<p>Description : {{$data->description}}</p>
	</div>
	<div class="col-md-6">
		<h3>Featured Image</h3><img src="{{asset('/images/news_featuredimages/'.$data->featured_image)}}">
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>News Image</h2>
		</div>
		
	</div>
	<div class="row">
		@foreach($data->newsimages as $event)
		<div class="col-md-3">
			<img src="{{asset('/images/news_images/'.$event->image)}}" style="height:200px;border: 1px solid gray">
		</div>
		@endforeach
	</div>
	
</div>
 @endsection