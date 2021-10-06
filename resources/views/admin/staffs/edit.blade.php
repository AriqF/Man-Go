@extends('layouts.admin.master')
@section('title','Staff Update')
@section('content') 

<div class="page-header">
<h1>
Officer/Staff Update
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Staff Update for front page </small>&nbsp;<a href="/staffs">Officer/Staff View</a>
</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
@include('admin.messages.message')
{{Form::open(['url'=>'/staffs/'.$data->id ,'method'=>'PATCH','class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Select A Office </label>
	<div class="col-sm-9">
		<select name="offices_id" id="form-field-2" class="col-xs-10 col-sm-5">
			 
             @foreach($offices as $office)
             @if($data->offices_id==$office->id)
			<option value="{{$office->id}}" selected>{{$office->office_name}} </option>
			@else
			<option value="{{$office->id}}">{{$office->office_name}} </option>
			@endif
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
	</div><img id="output" src="{{asset('/images/staff_images/'.$data->image)}}" width="100" height="100" style="margin-top:10px;">
</div>
<div class="space-4"></div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Officer Name </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Officer Name" class="col-xs-10 col-sm-5" name="staff_name" required="" value="{{$data->staff_name}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Degree </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Bsc in CSE, (BUET)" class="col-xs-10 col-sm-5" name="degree" required="" value="{{$data->degree}}" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Designation </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="Designation example : Lecturer" class="col-xs-10 col-sm-5" name="designation" required="" value="{{$data->designation}}" />
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Institute Name </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-2" placeholder="INFRA POLYTECNIC INSTITUE, BARISHAL" class="col-xs-10 col-sm-5" name="institute" required="" value="{{$data->institute}}" />
	</div>
</div> 
<div class="space-4"></div>

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

 
{{Form::close()}}

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