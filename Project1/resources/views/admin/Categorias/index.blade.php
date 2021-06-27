@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')

<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<a href="/Categorias/create" class="btn btn-secondary" role="button">
 Agregar Categoria
</a>
<table class="table" border="0">
<thead class="thead-dark">

	<th scope="col">Nombre</th>
	<th scope="col">Descripción</th>
	<th scope="col">Acciones</th>
	
</thead>
<div class="container"> 
<div class="row">
		@forelse ($categorias as $categoria)
			<tr>
				<td>{{$categoria->nombre}}</td>
				<td>{{$categoria->descripcion}}</td>
				<td>
					<a href="/Categorias/{{$categoria->id}}/edit" class="btn btn-success">Editar</a>
					<a href="/Categorias/{{$categoria->id}}" class="btn btn-info">Mostrar</a>
					<a href="/Productos" class="btn btn-primary">Ver Productos</a>
					<form action="/Categorias/{{$categoria->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Eliminar</button>
					</form>
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