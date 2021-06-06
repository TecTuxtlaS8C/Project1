@extends('layouts.user')
@section('contentt')
<a href="Usuarios/create">Agregar Nuevo Usuario</a>
<table border="1">
<thead>
	<th>Nombre</th>
	<th>Roles</th>
	<th>Correos</th>
	<th>Acciones</th>
</thead>
<tbody>
		@forelse ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->role}}</td>
				<td>{{$user->email}}</td>
				<td>
					<a href="/Usuarios/{{$user->id}}/edit">Editar</a>
					<a href="/Usuarios/{{$user->id}}">Mostrar</a>
					<form action="/Usuarios/{{$user->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
						@csrf
						@method('DELETE')
						<button type="submit">Eliminar</button>
					</form>
					<a href="/Restablecer/{{$user->id}}/edit">Restablecer contraseña</a>
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