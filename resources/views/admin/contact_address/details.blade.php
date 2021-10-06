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
&nbsp;<a href="/contactaddresses">View Contact Address </a>
</h1>
</div>
<div class="row">
	<div class="col-md-12">
		 
		<h3>Mobile : {{$data->mobile}}</h3>
		<h3>Email : {{$data->email}}</h3>
		<h3>Address : {{$data->address}}</h3>
		<h3>Facebook : {{$data->facebook}}</h3>
		<h3>Twiter : {{$data->twiter}}</h3>
		<h3>Google  : {{$data->google}}</h3>
		<h3>Instagram : {{$data->instragram}}</h3>
		<h3>Whatsapp : {{$data->whatsapp}}</h3>
	</div>
	
</div>
 @endsection