 @extends('layouts.admin.master')
 @section('title','News')
 @section('content')
 <div class="page-header">
<h1>
News View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
Only Trashed News view
</small>
&nbsp;<a href="/newses/create">Add News</a>
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered">
	<thead>
	<tr>
		<th>SL</th>
		<th>News Title</th>
		<th>Restore</th>
		<th>Permenet Delete</th>
	</tr></thead><tbody>
@foreach($deletedNews as $key=>$data)
<tr>
	<td>{{++$key}}</td>
	 
	<td>{{$data->title}}  </td>
	 
	<td>
		
		<a href="/news/restore/{{$data->id}}"><button class="btn btn-info btn-lg">Restroe</button></a> </td>
		<td>{{Form::open(['url'=>'/news/pdelete/'.$data->id,'method'=>'post'])}}
           <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure Permanetly Delete This Data?')"> Delete</button>
              {{Form::close()}}</td>
	 
</tr>

@endforeach
</tbody>
</table>
</div>
 @endsection