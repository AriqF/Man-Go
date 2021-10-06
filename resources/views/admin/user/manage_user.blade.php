@extends('layouts.admin.master')
@section('title','manage user')
@section('content')

<div class="page-header">
<h1>
Manage User
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Add user subadmin or visitors
</small>
&nbsp;<a href="/user">View News</a>
</h1>
</div><!-- /.page-header -->

<div class="row">

@if (session('warning'))
    <div class="alert alert-danger">
        {{ session('warning') }}
    </div>
    @elseif (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<form action="/user/{{$users->id}}" class="form-horizontal"   method="GET">
 <div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Name</label>
	<div class="col-sm-9">
		<input type="text" id="form-field-1" placeholder="News Title" class="col-xs-10 col-sm-5" value="{{$users->first_name}}" required="" />
		@if($errors->has('news_title'))
<div class="text text-danger ">
{{$errors->first('news_title')}}
	</div>
@endif
	</div>
	
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User manage</label>

	<div class="col-sm-9">
		 		 <select name="role_id" class="col-xs-10 col-sm-5" required>
		 		     <option value="">Please select a role</option>
			 @foreach(Sentinel::getRoleRepository()->get() as $role)
			<option value="{{$role->id}}">{{$role->slug}}</option>
			@endforeach
		</select>
	</div>
	
</div>
 
<div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
		Update
		</button>

		&nbsp; &nbsp; &nbsp;
		<button class="btn" type="reset">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			Reset
		</button>
	</div>
</div>

<div class="hr hr-24"></div>
 
</form>


 <!-- PAGE CONTENT ENDS -->
</div>
</div>
@endsection