@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<center>
	<img class="img-fluid" src="{{asset($producto->imagen)}}"  width="130px">
	</center>
	<br>
	<label for="exampleFormControlInput1">Nombre del Producto</label>
	<p class="form-control">{{$producto->nombre}}</p>
	<label for="exampleFormControlInput1">Descripción del Producto</label>
	<p class="form-control">{{$producto->descripcion}}</p>
	<label for="exampleFormControlInput1">Precio del Producto</label>
	<p class="form-control">${{$producto->precio}}</p>
	<label for="exampleFormControlInput1">Cantidad de Productos</label>
	<p class="form-control">{{$producto->cantidad}}</p>
	<label for="exampleFormControlInput1">Categoria del Productos</label>
	<p class="form-control">{{$producto->categoria}}</p>
@endsection