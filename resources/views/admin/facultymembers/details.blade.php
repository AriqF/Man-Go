@extends('layouts.admin.master')
@section('title','teacher view')
@section('content')
<div class="page-header">
<h1>
Teacher's Details
 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
faculty members View
</small>
&nbsp;<a href="/fmembers/create">Add Faculty Members</a>
</h1>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="row">
		<div class="col-md-6"><span class="pull-right"><h2>Teacher Name :</h2> </span></div>
		<div class="col-md-6"><h2>{{$data->teacher_name}}</h2> </div>
		</div>
		<div class="row">
		<div class="col-md-6"><span class="pull-right"><h3>Degree :</h3> </span></div>
		<div class="col-md-6"><h3>{{$data->degree}}</h3> </div>
		</div>
		<div class="row">
		<div class="col-md-6"><span class="pull-right"><h3>Designation :</h3> </span></div>
		<div class="col-md-6"><h3>{{$data->designation}}</h3> </div>
		</div>
		<div class="row">
		<div class="col-md-6"><span class="pull-right"><h3>Department :</h3> </span></div>
		<div class="col-md-6"><h3>{{$data->department}}</h3> </div>
		</div>
		<div class="row">
		<div class="col-md-6"><span class="pull-right"><h3>Institute :</h3> </span></div>
		<div class="col-md-6"><h3>{{$data->institute}}</h3> </div>
		</div>
		
	</div>
	<div class="col-md-6">
		<img src="{{asset('images/teacher_images/'.$data->image)}}" style="border:2px solid gray;">
	</div>
</div>
@endsection