@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')
<form action="/Categorias"  method="post">
    @csrf
    @method('POST')
    Nombre de la seccion:
    <input type="text" name="nombre">
    Descripcion:
    <input type="text" name="descripcion">
    <input type="submit" value="Agregar">
</form>

@endsection