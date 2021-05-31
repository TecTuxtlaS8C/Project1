@extends('layout.layout')
@section('contentt')
<a href="/Productos/create">Agregar</a>
<table border="1">
<thead>
	<th>Nombre</th>
	<th>Productos</th>
	<th>Acciones</th>
</thead>
<tbody>
		@forelse ($productos as $producto)
			<tr>
				<td>{{$producto->nombre}}</td>
				<td>{{$producto->descripcion}}</td>
				<td>
					<a href="/Productos/{{$producto->id}}/edit">Editar</a>
					<a href="/Productos/{{$producto->id}}">Mostrar</a>
					<form action="/Productos/{{$producto->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
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