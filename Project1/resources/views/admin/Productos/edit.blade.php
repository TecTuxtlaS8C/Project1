@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Productos/{{$producto->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre de la seccion:
    <input type="text" name="nombre" value="{{$producto->nombre}}">
    Descripcion:
    <input type="text" name="descripcion" value="{{$producto->descripcion}}">
    <input type="submit" value="Editar">
</form>

@endsection