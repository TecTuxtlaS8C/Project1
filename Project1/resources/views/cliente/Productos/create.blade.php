@extends('layout.layout')

@section('contentt')

<form action="/Productos" method="post">
    @csrf
    @method('POST')
    Nombre de la seccion:
    <input type="text" name="nombre">
    Descripcion:
    <input type="text" name="descripcion">
    <input type="submit" value="Agregar">
</form>

@endsection