<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    {{-- qui andiamo ad aggiungere la nostra favicon per il nostro sito --}}
    {{-- ------   favicon         -------- --}}
    
    {{-- segna posto per il nostro titolo --}}
    <title>@yield('page_title')</title>

    {{-- segna posto per il nostro javascript --}}
    @yield('header_scripts')
    {{-- caricato css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- caricato js --}}
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</head>
<body>

    <header>
        {{-- importare il nostro file header --}}
        @include('partials.header')
    </header>

    <main>
        {{-- questo è il nostro segna posto --}}
        @yield('page_content')
    </main>

    {{-- importo il file footer con il tag footer già compreso --}}
        @include('partials.footer')
</body>
</html>