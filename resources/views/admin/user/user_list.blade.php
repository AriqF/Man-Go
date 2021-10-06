 @extends('layouts.admin.master')
 @section('title','User view')
 @section('content')
 <div class="page-header">
<h1>
User View 
<small>
<i class="ace-icon fa fa-angle-double-right"></i>
All User view
</small>
&nbsp;
</h1>
</div><!-- /.page-header -->
 @include('admin.messages.message')
 
<div class="row">
<table class="table table-bordered" id="dataTable">
	<thead>
	<tr>
		<th>SL</th>
		<th>User Name</th>
		<th>User Email</th>
      @if(Sentinel::getUser()->roles()->first()->slug =='admin')
      <th>Role</th>
      <th>Edit</th>
		<th>Action</th>
  @endif
		<th>Delete</th>
		
	</tr></thead>
	<tbody>
		<?php $i=$user->perPage()*($user->currentPage()-1);?>
@foreach($user as $key=>$data)
@if($data->email !='chf.shahin@gmail.com')
<tr>
	<td><?php $i++; ?> {{$i}}</td>	 
	<td>{{$data->first_name}}  </td>
	<td>{{$data->email}}  </td>
	 @if(Sentinel::getUser()->roles()->first()->slug =='admin')
	 <td> {{Sentinel::findById($data->id)->roles()->first()->slug}}  </td>
@if(Sentinel::getUser()->email !=$data->email)
	<td><a href="/user/{{$data->id}}/edit">Edit</a></td>
	@else
	<td>Disable</td>
	@endif
	@if(Sentinel::getUser()->email !=$data->email)
<td>@if( Activation::completed(Sentinel::findById($data->id)))<a href="/deactive/{{$data->id}}">Active</a>
@else
<a href="/active/{{$data->id}}">Deactive</a>
@endif</td>
@else
<td>Disable</td>
		@endif
         @endif   
		<td>  
		 @if(Sentinel::getUser()->email !=$data->email And Sentinel::findById($data->id)->roles()->first()->slug !='admin')
			{{Form::open(['url'=>'/users/'.$data->id,'method'=>'Delete'])}}
           
           <button type="submit" class="red" onclick="return confirm('Are you sure Delete This Data?')"><i class="ace-icon fa fa-trash-o bigger-130"></i></button>
              {{Form::close()}}
              @else
              Disable
               @endif
		</td>	 
</tr>
@endif
@endforeach
</tbody>
</table>
</div>
{{$user->links()}}

 @endsection
 @section('js')
<script src="{{ asset('admin/data-table.min.js') }}"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    } );
  </script>
  @endsection