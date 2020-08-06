@extends('layout.main')
@section('main-content')
    <div class="wrap_student_show container">
        <div class="student">
            <div>
                <img src="{{$student['img']}}" alt="">   
            </div>

            <div class="student_card">
                <h2>{{$student['nome']}} {{$student['cognome']}} ( {{$student['eta']}} anni)</h2>
                <p>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{$student['azienda']}} come {{$student['ruolo']}}</p>
                <p>{{$student['descrizione']}}</p>
            </div>
        </div>
    </div>
@endsection