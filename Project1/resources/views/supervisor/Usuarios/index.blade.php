@extends('layout.user')
@section('contentt')
<a href="Usuarios/create">Agregar Nuevo Usuario</a>
<table border="1">
<thead>
	<th>Nombre</th>
	<th>Roles</th>
	<th>Acciones</th>
</thead>
<tbody>
		@forelse ($usuarios as $usuario)
			<tr>
				<td>{{$usuario->nombre}}</td>
				<td>{{$usuario->rol}}</td>
				<td>
					<a href="/Usuarios/{{$usuario->id}}/edit">Editar</a>
					<a href="/Usuarios/{{$usuario->id}}">Mostrar</a>
					<form action="/Usuarios/{{$usuario->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
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