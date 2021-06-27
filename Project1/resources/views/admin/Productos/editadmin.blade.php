@extends('layouts.admin')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Productosadmin/{{$producto->id}}" method="post">
    @csrf
	@method('PUT')
    Nombre del producto:<br>
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