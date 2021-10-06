@extends('layouts.front_page.master')
@section('title','Course fees')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-12"><hr>
<h2 style="color:rgb(134, 188, 66);"><center>{{$data->title}}</center></h2><hr>
@if($data->image!="")
<p><img src="{{asset('/images/notice_images/'.$data->image)}}"></p>
@endif
<span style="text-align: justify;text-align: justify;">{!!$data->details!!}</span>
</div>
</div>
</div><br>
@endsection