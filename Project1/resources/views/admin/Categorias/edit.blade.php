@extends('layouts.general')

@section('content')

<form action="/Categorias/{{$categoria->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre de la seccion:
    <input type="text" name="nombre" value="{{$categoria->nombre}}">
    <br>
    Descripcion:
    <input type="text" name="descripcion" value="{{$categoria->descripcion}}">
    <input type="submit" value="Editar">
</form>

@endsection