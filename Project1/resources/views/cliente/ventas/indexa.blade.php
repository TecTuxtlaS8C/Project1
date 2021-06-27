
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="https://getbootstrap.com/docs/5.0/examples/navbars/navbar.css" rel="stylesheet">
<nav class="navbar navbar-light float-right" style="text-align:center">
  <form class="form-inline">
  <a href="/cliente" class="btn btn-primary" role="button" style="float:right">
    Regresar
</a>
  </form>
</nav>



<!--a href="/Productos/create">Agregar</a-->
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="table-responsive" style="text-align:center;">
<h4>Mis Compras</h4>
<table border="1" class="table table-striped table-hover"  style="margin: 0 auto;">
<thead>
	<th>Nombre del producto</th>
	<th>Cantidad</th>
	<th>Precio</th>
	<th>Total a pagar</th>
	<th>Fecha de compra</th>
</thead>
<tbody>
		@forelse ($ventas as $venta)
			<tr>
				<td>{{$venta->nombre}}</td>
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
