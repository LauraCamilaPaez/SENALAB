@extends('plantilla')
@section('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
    SenaLAB
    @endsection
</head>
<body>
    <h1>Hola Mundo</h1>
    Bienvenida {{$nombre ?? "Invitad@"}}
</body>
</html>
@endsection
