@extends('layouts.admin.master')
@section('title','office add')
@section('content')

<div class="page-header">
<h1>
Office Name Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Office Name add for front page </small>&nbsp;<a href="/offices">Office View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
 @include('admin.messages.message')

<form class="form-horizontal" role="form" action="/offices" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}

<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Office Name </label>

	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Faculty Name" class="col-xs-10 col-sm-5" name="office_name" required="" />
		<!-- <span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">Slider Title</span>
		</span> -->
	</div>
</div>
 
<div class="space-4"></div>

<div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			Submit
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
</div><!-- /.col -->
</div>
@endsection