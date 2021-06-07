@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<a href="/admin" class="btn btn-primary" role="button" style="float:right">
    <button>Regresar</button>
</a>
<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
	<input name="buscarporcategoria" class="form-control mr-sm-2" type="search" placeholder="Buscar por categoria" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<a href="/Productosadmin/create" class="btn btn-primary" role="button" >
    <button>Agregar Producto</button>
</a>
<!--a href="/Productos/create">Agregar</a-->
<table border="1">
<thead>
	<th>Nombre</th>
	<th>Descripcion</th>
	<th>Categoria</th>
	<th>Acciones</th>
</thead>
<tbody>
		@forelse ($productos as $producto)
			<tr>
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->descripcion}}</td>
				<td>{{$producto->categoria}}</td>

				<td>
					<a href="/Productosadmin/{{$producto->id}}/edit">Editar</a>
					<a href="/Productosadmin/{{$producto->id}}">Mostrar</a>
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3">sin registro</td>
			</tr>
		@endforelse
	
</tbody>
</table>
@endsection