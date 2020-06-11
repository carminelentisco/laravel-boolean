<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header class="header-content">
        <nav class="nav-bar">
            <a href="{{ Route('static-page.home') }}"><h2>BOOLEAN</h2></a>

            <ul class="nav-menu">
            <li><a @if (Request::route()->getName() == 'static-page.home') class="active" @endif 
                href="{{ Route('static-page.home') }}">Home</a></li>
                <li><a href="#">Corso</a></li>
                <li><a @if (Request::route()->getName() == 'students-page.index') class="active" @endif 
                    href="{{ Route('students-page.index') }}">Dopo il corso</a></li>
                <li><a href="#">Lezione Gratuita</a></li>
                <li><a href="#">Assumi i nostri studenti</a></li>
                <li><a href="#">Candidati ora</a></li>
            </ul>
        </nav>
    </header>
