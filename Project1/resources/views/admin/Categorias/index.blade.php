@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')

<a href="/supervisor" class="btn btn-primary" role="button" style="float:right">
    <button>Regresar</button>
</a>
<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

<a href="/Categorias/create">Agregar Categoria</a>
<table border="1">
<thead>
	<th>Nombre</th>
	<th>Productos</th>
	<th>Acciones</th>
</thead>
<tbody>
		@forelse ($categorias as $categoria)
			<tr>
				<td>{{$categoria->nombre}}</td>
				<td>{{$categoria->descripcion}}</td>
				<td>
					<a href="/Categorias/{{$categoria->id}}/edit">Editar</a>
					<a href="/Categorias/{{$categoria->id}}">Mostrar</a>
					<a href="/Productos">Ver Productos</a>
					<form action="/Categorias/{{$categoria->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
						@csrf
						@method('DELETE')
						<button type="submit">Eliminar</button>
					</form>
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