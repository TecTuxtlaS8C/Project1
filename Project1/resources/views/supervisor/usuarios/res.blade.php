@extends('layouts.user')

@section('contentt')

<form action="/Restablecer/{{$user->id}}" method="post">
    @csrf
	@method('PUT')
    Restablecer Contraseña:
    <input type="password" name="password" value="{{$user->password}}">
 
    <input type="submit" value="Actualizar">
</form>

@endsection