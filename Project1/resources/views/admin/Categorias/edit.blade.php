@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
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