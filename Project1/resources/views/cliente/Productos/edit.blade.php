@extends('layout.layout')

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