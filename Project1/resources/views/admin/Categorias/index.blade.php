@extends('layouts.general')
@section('content')
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