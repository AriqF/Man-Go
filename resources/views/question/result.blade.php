@extends('layouts.user.homeLayout')
@section('main-content')
    <div class="box-container" id="exam-result">
        @foreach($results as $key=>$res)
            <h2 class="section-title">Hasil Quiz {{$res->quizes->quiz_name}}</h3>
            <hr>
            @if ($res->yes_ans/($res->yes_ans+$res->no_ans)*100 == 100)
                <h4>Sempurna! Kamu mendapatkan {{$res->yes_ans}} dari {{$res->yes_ans+$res->no_ans}} </h4>
                <p class="exam-comment">Tetap pertahankan kinerja-mu!</p>
                <script>
                    var element = document.getElementById("exam-result");
                    element.classList.add("bg-score-high");
                </script>
            @elseif($res->yes_ans/($res->yes_ans+$res->no_ans)*100 >= 75)
                <h4>Sedikit Lagi! Kamu mendapatkan {{$res->yes_ans}} dari {{$res->yes_ans+$res->no_ans}} </h4>
                <p class="exam-comment">Ayo Mango yakin kamu pasti bisa!</p>
                <script>
                    var element = document.getElementById("exam-result");
                    element.classList.add("bg-score-mid");
                </script>
            @elseif($res->yes_ans/($res->yes_ans+$res->no_ans)*100 < 75)
                <h4>Sayang sekali, Kamu mendapatkan {{$res->yes_ans}} dari {{$res->yes_ans+$res->no_ans}} </h4>
                <p class="exam-comment">Teruslah berlatih yaa</p>  
                <script>
                    var element = document.getElementById("exam-result");
                    element.classList.add("bg-score-low");
                </script>
            @else
                <p>Error Occured! Skor 404</p>
            @endif
            
            <p style="margin-bottom: 20px !important">Skor kamu: {{$res->yes_ans/($res->yes_ans+$res->no_ans)*100}}</p>


            <a href="/MyExamDetails/{{$res->quizes_id}}" class="btnr btn-trans" >Jawaban Saya</a>
        @endforeach
        {{-- <a href="/quiz" class="btn btn-dark-gray">Today Exam</a> --}}
    </div>     

@endsection

{{-- <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Exan Title</th>
            <th>Date</th>
            <th>Result</th>
            <!-- <th>Details</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($results as $key=>$res)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$res->quizes->quiz_name}} </td>
        <td>{{$res->date}} </td>
        <td>{{$res->yes_ans/($res->yes_ans+$res->no_ans)*100}} </td>
        <td><a href="/MyExamDetails/{{$res->quizes_id}}">Details</a></td>
    </tr>
    @endforeach
    </tbody>
</table>  --}}