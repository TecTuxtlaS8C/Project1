@extends('layouts.contador')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')

<!--<a href="/Productos/create" class="btn btn-primary" role="button" >
    <button>Agregar Producto</button>
</a>-->
<!--a href="/Productos/create">Agregar</a-->
<div class="col-md-8 col-xs-12">
			@include('admin.Productos.search')
</div>
<nav class="navbar navbar-light float-right" style="text-align:center">
  <form class="form-inline">
   <a href="/Productos/create" class="btn btn-secondary" role="button" >
    Agregar Producto
	</a>
  </form>
</nav>
</div>
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
					<a href="/Productos/{{$producto->id}}/edit" class="btn btn-success">Editar</a>
					<a href="/Productos/{{$producto->id}}" class="btn btn-info">Mostrar</a>
					<form action="/Productos/{{$producto->id}}" method="post" style="display: inline;" onsubmit="return confirm('Desea Eliminar')">
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