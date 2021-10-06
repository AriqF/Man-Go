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
&nbsp;<a href="/contacts">View Contact List </a>
</h1>
</div>
<div class="row">
	<div class="col-md-12">
		<h2>Name: {{$data->name}}</h2>
		<h3>Mobile : {{$data->phone}}</h3>
		<h4>Subject : {{$data->subject}}</h4>
		<p>Message : {{$data->details}}</p>
	</div>
	
</div>
 @endsection