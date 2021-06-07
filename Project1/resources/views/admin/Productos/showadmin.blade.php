@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<a href="/Productosadmin" class="btn btn-primary" role="button" style="float:right">
    <button>Regresar</button>
</a>
	Nombre del producto:<br>
	{{$producto->nombre}}<br>
	Precio producto:<br>
	{{$producto->precio}}<br>
	Descripcion producto:<br>
	{{$producto->descripcion}}<br>
	Categoria producto:<br>
	{{$producto->categoria}}<br>
@endsection