@extends('layouts.general')

@section('content')

<form action="/Categorias" method="post">
    @csrf
    @method('POST')
    Nombre de la seccion:
    <input type="text" name="nombre">
    Descripcion:
    <input type="text" name="descripcion">
    <input type="submit" value="Agregar">
</form>

@endsection