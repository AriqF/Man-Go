@extends('layouts.admin.master')
@section('title','officer view')
@section('content')
<div class="page-header">
<h1>
Officer's/Staff's Details
 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Office/Staff View
</small>
&nbsp;<a href="/staffs/create">Add Officer/Staff</a>
</h1>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="row">
		<div class="col-md-6"><span class="pull-right"><h2>Officer's Name :</h2> </span></div>
		<div class="col-md-6"><h2>{{$data->staff_name}}</h2> </div>
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
		<div class="col-md-6"><span class="pull-right"><h3>Institute :</h3> </span></div>
		<div class="col-md-6"><h3>{{$data->institute}}</h3> </div>
		</div>
		
	</div>
	<div class="col-md-6">
		<img src="{{asset('images/staff_images/'.$data->image)}}" style="border:2px solid gray;">
	</div>
</div>
@endsection