@extends('layouts.user.homeLayout')
@section('main-content')
    @foreach($quizes->sortBy('id') as $key=>$quz)
        {{-- {{++$key}} --}}
        <div class="box-container" id="ka1">
            <div class="row">
                <div class="col-xl-8 col-md-6 col-sm-12 title-container">
                    <h3>{{$quz->quiz_name}}</h3>   
                    <p style="margin-bottom: 2px !important">Waktu quiz: {{$quz->quiz_time}}</p>   
                    <p >Jumlah soal: {{$quz->number_of_question}}</p>    
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="d-flex flex-column bd-highlight mb-3 text-center my-4">
                        <div class=" bd-highlight">
                            <a href="/exam-start/{{$quz->id}}"> <button class="btnr btn-excercise">Kerjakan Soal</button> </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endforeach
    
    {{$quizes->links()}}
@endsection
