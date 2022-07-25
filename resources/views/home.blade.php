<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prima pagina laravel</title>
</head>
<body>
    {{-- <a href="{{ route("home")}}">Home</a> --}}
    <a href="{{ route("about_us")}}">About Us</a>

    <h1>Benvenuto {{ $user['name'] }} {{ $user['surname'] }}</h1>
    <h2> Questi sono i miei prodotti: {{$products['prodotto1']}} ,{{$products['prodotto2']}} </h2>
</body>
</html>