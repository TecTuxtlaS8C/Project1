@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')
<a href="/Categoriasadmin" class="btn btn-primary" role="button" style="float:right">
    <button>Regresar</button>
</a>
<form action="/Categoriasadmin/{{$categoria->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre de la seccion:<br>
    <input type="text" name="nombre" value="{{$categoria->nombre}}">
    <br>
    Descripcion:<br>
    <input type="text" name="descripcion" value="{{$categoria->descripcion}}"><br>
    <input type="submit" value="Editar">
</form>

@endsection