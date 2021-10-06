@extends('layouts.admin.master')
@section('title','Message')
@section('content')
<div class="page-header">
<h1>
Message Details
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Message details for front page </small>&nbsp;<a href="/messages">Message View</a>
</h1>
</div><!-- /.page-header -->
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"><center><img src="{{asset('/images/message_images/'.$data->image)}}">
		<h2 style="color:rgb(134, 188, 66);">{{$data->name}}</h2>
<h4 style="color:rgb(330, 192, 63,33);">{{$data->designation}}</h4></center>
	</div>
	<div class="col-md-4"></div>
</div><hr>
<span style="text-align: justify;">{!!$data->description!!}</span>
</div>
</div>
</div><br>
@endsection