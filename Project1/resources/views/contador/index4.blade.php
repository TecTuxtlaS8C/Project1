@extends('layouts.contador')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')

<nav class="navbar navbar-light float-right">
  <form class="form-inline">

    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">

    <input name="buscarporrol" class="form-control mr-sm-2" type="search" placeholder="Buscar por rol" aria-label="Search">
    
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
<nav class="navbar navbar-light float-right" style="text-align:center">
  <form class="form-inline">
   <a href="Usuarios/create" class="btn btn-secondary" role="button" >
    Agregar Nuevo Usuario
	</a>
  </form>
</nav>

<table class="table" border="1">
<thead class="thead-dark">
	<th scope="col">Nombre</th>
	<th scope="col">Roles</th>
	<th scope="col">Correos</th>
	<th scope="col">Acciones</th>
</thead>
<tbody>
		@forelse ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->role}}</td>
				<td>{{$user->email}}</td>
				<td>
					<a href="/Usuarios/{{$user->id}}/edit" class="btn btn-warning">Editar</a>
					<a href="/Usuarios/{{$user->id}}" class="btn btn-info">Mostrar</a>
					<form action="/Usuarios/{{$user->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Eliminar</button>
					</form>
					<a href="/Restablecer/{{$user->id}}/edit" class="btn btn-success">Restablecer contraseña</a>
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