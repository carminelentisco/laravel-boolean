{{-- Handlebars template --}}

<script id="student-template" type="text/x-handlebars-template">
    
    <a class="student" href="{{url('students.show')}}">
        <header>
            <img src="@{{ img }}" alt="@{{ nome }} @{{ cognome }}">
            
            <div class="header-student-text">
                <h2>@{{ nome }} @{{ cognome }} ( @{{ eta }} anni)</h2>
                <p>Assunt@{{ genere }} da @{{ azienda }} come @{{ ruolo }}</p>
            </div>
        </header>

        <main>
            <p>@{{ descrizione }}</p>
        </main>
    </a>

</script>