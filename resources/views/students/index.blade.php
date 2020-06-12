@extends('layout.main')

@section('main-content')
    <h1 class="title-center student-title">I nostri ex studenti su LinkedIn</h1>

    <div class="students">
        @foreach($students as $student)
        <a class="student" href="{{ route('students-page.show', ['id' => $student['id'] ]) }}">
            <header>
                <img src="{{$student['img']}}" alt="{{$student['nome']}} {{$student['cognome']}}">
                
                <div class="header-student-text">
                    <h2>{{$student['nome']}} {{$student['cognome']}} ( {{$student['eta']}} anni)</h2>
                    <p>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{$student['azienda']}} come {{$student['ruolo']}}</p>
                </div>
            </header>

            <main>
                <p>{{$student['descrizione']}}</p>
            </main>
        </a>
        @endforeach
    </div>
@endsection