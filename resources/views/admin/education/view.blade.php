 @extends('layouts.admin.master')
 @section('title','Education view')
 @section('content')
 <div class="page-header">
<h1>
Education View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Educationview
</small>
&nbsp;<a href="/educations/create">Add Education</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>Title</th>
		<th>Short Description</th>
		<th>Action </th>
		
	</tr></thead><tbody>
@foreach($educations as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	<td>{{$data->title}}  </td>
	<td>{!!\Illuminate\Support\Str::words($data->short_description, 20,'....')!!}</td>
              <td>
<div class="hidden-sm hidden-xs btn-group">

<a class="blue" href="/educations/{{$data->id}}"><button class="btn btn-xs btn-success tooltip-info"  data-rel="tooltip" title="view">
<i class="ace-icon fa fa-search-plus bigger-130"></i></button>
</a>
<a class="blue" href="/educations/{{$data->id}}/edit"><button class="btn btn-xs btn-info tooltip-info"  data-rel="tooltip" title="edit">
<i class="ace-icon fa fa-pencil bigger-120"></i></button>
</a>  
	{{Form::open(['url'=>'/educations/'.$data->id,'method'=>'Delete'])}}
         <button type="submit" class="btn btn-xs btn-danger tooltip-info"  data-rel="tooltip" title="Delete" onclick="return confirm('Are you sure Delete This Data?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
              {{Form::close()}}

	 
</div>
              </td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection