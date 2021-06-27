@extends('layouts.contador')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')



<!--a href="/Productos/create">Agregar</a-->
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="table-responsive" style="text-align:center;">
<table border="1" class="table table-striped table-hover"  style="margin: 0 auto;">
<thead>
	<th>Nombre</th>
	<th>Precio de compra</th>
	<th>Cantidad</th>
	<th>Precio de venta</th>
	<th>Total a pagar</th>
	<th>Fecha de creación</th>
</thead>
<tbody>
		@forelse ($ventas as $venta)
			<tr>
				<td>{{$venta->nombre}}</td>
				<td>{{$venta->precio_compra}}</td>
				<td>{{$venta->cantidad}}</td>
				<td>{{$venta->precio_venta}}</td>
				<td>{{$venta->total}}</td>
				<td>{{$venta->created_at}}</td>
				
			</tr>
		@empty
			<tr>
				<td colspan="3">sin registro</td>
			</tr>
		@endforelse
	
</tbody>
</table>
</div>
</div>
</div>
@endsection