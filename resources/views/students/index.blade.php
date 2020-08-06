@extends('layout.main')

@section('main-content')
    <section class="wrap_student container">
        <h1 class="title-center student-title">I nostri ex studenti su LinkedIn</h1>

        {{-- Aggiunta sezione per il filter dei generi --}}
        <div class="students-filter">
            <select name="filter" id="filter">
                @foreach ($genders as $gender) 
                    <option value="{{ $gender }}">
                        @if ($gender == 'm') Uomo @elseif ($gender == 'f') Donna @else Tutti @endif
                    </option>
                @endforeach
            </select>
        </div>

        <div class="students">
            @foreach($students as $student)
            <a class="student" href="{{ route('students-page.show', ['slug' => $student['slug'] ]) }}">
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

        @include('shared.handlebars.student')
    </section>

@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection