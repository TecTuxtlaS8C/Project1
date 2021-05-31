@extends('layout.user')

@section('contentt')

<form action="/Usuarios" method="post">
    @csrf
    @method('POST')
    Nombre del Usuario:
    <input type="text" name="nombre">
    Rol:
    <input type="text" name="rol">
    <input type="submit" value="Agregar">
</form>

@endsection