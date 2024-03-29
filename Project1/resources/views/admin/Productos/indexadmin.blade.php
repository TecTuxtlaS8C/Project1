
@extends('layouts.admin')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
	<input name="buscarporcategoria" class="form-control mr-sm-2" type="search" placeholder="Buscar por categoria" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<a href="/Productosadmin/create" class="btn btn-secondary" role="button" >
Agregar Producto
</a>
<!--a href="/Productos/create">Agregar</a-->
<table class="table" border="0">
<thead class="thead-dark">
	<th scope="col">Nombre</th>
	<th scope="col">Descripción</th>
	<th scope="col">Precio</th>
	<th scope="col">Cantidad</th>
	<th scope="col">Categoria</th>
	<th scope="col">Imagen</th>
	<th scope="col">Acciones</th>
</thead>
<tbody>
<div class="container"> 
<div class="row">  
		@forelse ($productos as $producto)
			<tr>
				
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->descripcion}}</td>
				<td>${{$producto->precio}}</td>
				<td>{{$producto->cantidad}}</td>
				<td>{{$producto->categoria}}</td>
				<td>
			
					<img src="{{asset($producto->imagen)}}" alt="{{ $producto->nombre }}" height="80" width="100" class="img-thumbnail">
				</td>

				<td>
					<a href="/Productosadmin/{{$producto->id}}/edit" class="btn btn-success">Editar</a>
					<a href="/Productosadmin/{{$producto->id}}" class="btn btn-info">Mostrar</a>
					
				</td>
			</tr>
		@empty
			<tr>
				<td colspan="3">sin registro</td>
			</tr>
		@endforelse
		</div>
</div>
</tbody>
</table>
@endsection