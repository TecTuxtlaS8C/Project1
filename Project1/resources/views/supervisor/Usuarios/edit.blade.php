@extends('layout.user')

@section('contentt')

<form action="/Usuarios/{{$usuario->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre del Usuario:
    <input type="text" name="nombre" value="{{$usuario->nombre}}">
    <br>
    Rol:
    <input type="text" name="rol" value="{{$usuario->rol}}">
    <input type="submit" value="Editar">
</form>

@endsection