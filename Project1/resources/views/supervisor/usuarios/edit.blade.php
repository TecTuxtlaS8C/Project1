@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
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