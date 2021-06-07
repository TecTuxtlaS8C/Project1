@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<a href="/Productosadmin" class="btn btn-primary" role="button" style="float:right">
    <button>Regresar</button>
</a>
<form action="/Productosadmin/{{$producto->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre de la seccion:<br>
    <input type="text" name="nombre" value="{{$producto->nombre}}"><br>
    Descripcion:<br>
    <input type="text" name="descripcion" value="{{$producto->descripcion}}"><br>
    Precio:<br>
    <input type="text" name="precio" value="{{$producto->precio}}"><br>
    Cantidad:<br>
    <input type="text" name="cantidad" value="{{$producto->cantidad}}"><br>
    <input type="submit" value="Editar">
</form>

@endsection