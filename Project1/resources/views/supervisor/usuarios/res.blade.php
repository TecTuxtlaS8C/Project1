@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Restablecer/{{$user->id}}" method="post">
    @csrf
	@method('PUT')
    Restablecer Contraseña:
    <input type="password" name="password" value="{{$user->password}}">
 
    <input type="submit" value="Actualizar">
</form>

@endsection