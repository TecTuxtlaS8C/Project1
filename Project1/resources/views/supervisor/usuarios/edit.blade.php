@extends('layouts.user')

@section('contentt')

<form action="/Usuarios/{{$user->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre del Usuario:
    <input type="text" name="name" value="{{$user->name}}">
    <br>
    Rol:
    <input type="text" name="role" value="{{$user->role}}">
    <input type="submit" value="Editar">
</form>

@endsection