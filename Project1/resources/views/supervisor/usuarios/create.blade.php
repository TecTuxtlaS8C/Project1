@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Usuarios" method="post">
    @csrf
    @method('POST')
    Nombre del Usuario:
    <input type="text" name="name">
    Rol:
    <input type="text" name="role">
    Correo:
    <input type="email" name="email">
    Contraseña:
    <input type="password" name="password">
    <input type="submit" value="Agregar">
</form>

@endsection