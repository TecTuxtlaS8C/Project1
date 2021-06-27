<!DOCTYPE html>
<meta charset="utf-8"/>
<meta name="robots" content="follow"/>
<html lang="es">
<head>
<title>Pregunta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
     @yield('estilos')
</head>
<body>
<div class="header">
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
    <a class="navbar-brand" href="/admin">Tablero|Admin</a>
      <!--<a class="navbar-brand" href="/Productos/create">Agregar</a>
      <a class="navbar-brand" href="/Productos">Productos</a>-->
      <a class="navbar-brand" href="/Preguntas">Anterior</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
       <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Productosadmin">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/Categoriasadmin">Categorias</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link active" href="/Productos/create">Agregar Producto</a>
          </li-->
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
    <div class="container">
        <div class="menu">

        </div>
                <div class="contenido">
                @yield('contentt')
                </div>
    </div>
        <div class="footer">
        </div>
        @yield('scripst')
 </body>
</html>           