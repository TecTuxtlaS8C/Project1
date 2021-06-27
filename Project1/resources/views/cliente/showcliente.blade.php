
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
  <a href="/Productoscliente" class="btn btn-primary" role="button" style="float:right">
    Regresar
  </a>
  </form>
</nav>
<ul>
<br>
Nombre del producto:<br>
{{$producto->nombre}}<br>
<br>
Precio producto:<br>
{{$producto->precio}}<br>
<br>
Descripcion producto:<br>
{{$producto->descripcion}}<br>
<br>
Categoria producto:<br>
{{$producto->categoria}}<br>
<br>
</ul>
<nav class="navbar navbar-light float-left" style="text-align:center">
  <form class="form-inline">
  <a href="/Preguntas/create" class="btn btn-primary" role="button" style="float:left">
    Pedir información
</a>
  </form>
</nav>
<nav class="navbar navbar-light float-left" style="text-align:center">
  <form class="form-inline">
  <a href="/ventas/create" class="btn btn-secondary" role="button" style="float:left">
Comprar Producto
</a>
  </form>
</nav>



