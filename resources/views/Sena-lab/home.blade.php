@extends('layouts.plantilla')

@section('title','Home')
    
@section('content')
    <h1>Hola mundo</h1>

    
    <a href="{{route('certificado.index')}}">Certificado  </a>
@endsection