@extends('layout.main')
@section('main-content')

    <div class="student">
        <header>
            <img src="{{$student['img']}}" alt="">
            <h2>{{$student['nome']}} {{$student['cognome']}} ( {{$student['eta']}} anni)</h2>
            <p>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{$student['azienda']}} come {{$student['ruolo']}}</p>
        </header>

        <main>
            <p>{{$student['descrizione']}}</p>
        </main>
    </div>
@endsection