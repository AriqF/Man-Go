@extends('layouts.user.profile-layout')
@section('main-content')

@section('title', 'ManGo - Review')
{{-- content --}}

<style>
    *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
</style>

<div class="col-xl-8 col-md-12">
    <div class="box-container">

            <label class="form-label mt-3" for="user_rate" style="font-size: 30px">User Reviews</label> <br>

            @if(count($ratings)>0)
                @foreach ($ratings as $rating)
                    <div class="">
                        {{-- <p>{{ $rating['rating'] }}</p> --}}
                        <?php
                        $count = 1;
                        while($count<=$rating['rating']){ ?>
                            <span>⭐</span>
                        <?php $count++; }?>
                        <p>{{ $rating['comments'] }}</p>
                        <p>Dari {{ $rating['user']['name'] }}</p>
                        <p>{{ date("d-m-Y H:i:s",strtotime($rating['created_at'])) }}</p>
                        <hr>
                    </div>
                @endforeach
                @else
                <p>Sayangnya masih belum ada review 😞, Yuk bantu memberikan feedback untuk pengembangan website kami di
                    <a style="text-decoration: none" href="{{ route('feedback') }}">sini</a> 🙂
                </p>
            @endif


            <label class="form-label mt-3" for="user_rate" style="font-size: 30px">Rerata Website ini</label> <br>

                <div>
                    <?php
                    $star = 1;
                    while($star<=$ratingAvg){ ?>
                        <span>🌟</span>
                    <?php $star++; } ?>
                    ({{ $ratingAvg }})
                </div>

    </div>
</div>
</div>
</div>

{{-- REQUIRE SCRIPT --}}
@include('sweetalert::alert')
@endsection
