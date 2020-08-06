<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header class="header-container">
        {{-- Logo della pagina --}}
        <a href="{{ Route('static-page.home') }}"><img class="logo" src="https://www.boolean.careers/images/common/logo.png" alt="Logo Boolean"></a>
        
        {{-- Menù della pagina --}}
        <nav class="header_nav-container">
            <ul class="header_menu-list">
                <li
                @if (Request::route()->getName() == 'static-page.home') 
                    class="active" 
                @endif 
                >
                    <a class="link" href="{{ Route('static-page.home') }}">Home</a>
                </li>
                <li>
                    <a href="#">Corso</a>
                </li>
                <li 
                @if (Request::route()->getName() == 'students-page.index') class="active" @endif 
                >
                    <a href="{{ Route('students-page.index') }}">Dopo il corso</a>
                </li>
                <li>
                    <a href="#">Lezione Gratuita</a>
                </li>
                <li>
                    <a href="#">Assumi i nostri studenti</a>
                </li>
            </ul>

            <a class="btn-small bt-green btn-link" href="#">Candidati ora</a>
            
        </nav>
    </header>
