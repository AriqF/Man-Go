@extends('layouts.admin.master')
@section('title','Staff add')
@section('content') 

<div class="page-header">
<h1>
Staff Add
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Staff add for front page </small>&nbsp;<a href="/fmembers">Facuty Members View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
<form class="form-horizontal" role="form" action="/staffs" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Select A Office </label>
	<div class="col-sm-9">
		<select name="offices_id" id="form-field-2" class="col-xs-10 col-sm-5">
			 
             @foreach($offices as $office)
			<option value="{{$office->id}}">{{$office->office_name}} </option>
			@endforeach

		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Officer's Photo </label>

	<div class="col-sm-9">
		<input type="file" id="form-field-1" placeholder="Officer Name" class="col-xs-10 col-sm-5" name="image" onchange="return previewImage(event)"  />
		<span class="help-inline col-xs-12 col-sm-7">
			<span class="middle">image size 270 * 253</span></span>
	</div><img id="output" width="100" height="100" style="margin-top:10px;">
</div>
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Officer Name </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Officer Name" class="col-xs-10 col-sm-5" name="staff_name" required="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Degree </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Bsc in CSE, (BUET)" class="col-xs-10 col-sm-5" name="degree" required="" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Designation </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Designation example : Lecturer" class="col-xs-10 col-sm-5" name="designation" required="" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Institute Name </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="INFRA POLYTECNIC INSTITUE, BARISHAL" class="col-xs-10 col-sm-5" name="institute" required="" />
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
@section('script')
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#summernote').summernote({
			height:'200px',
			width:'400px',
			placeholder:'Teacher Details',
			toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
			 
		});
	});
</script>
<script type="text/javascript">
function previewImage(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
@endsection