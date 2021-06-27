@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Productos/{{$producto->id}}" method="post">
    @csrf
	@method('PUT')
    <div class="form-group">
    <label for="exampleFormControlInput1">Nombre del Producto</label>
    <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Descripción del Producto</label>
    <input type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}">
    <div class="form-group">
    <label for="exampleFormControlInput1">Precio del Producto</label>
    <input type="text" class="form-control" name="precio" value="{{$producto->precio}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Cantidad de Productos</label>
    <input type="text" class="form-control" name="cantidad" value="{{$producto->cantidad}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Editar">
</form>

@endsection