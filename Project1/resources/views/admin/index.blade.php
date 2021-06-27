<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard | Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Bruno Order</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="{{ route('login.destroy') }}">Salir</a>
    </li>
  </ul>
</header>

<main><br>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-secondary">
          <div class="card-header py-3 text-white bg-secondary border-secondary">
            <h4 class="my-0 fw-normal">Vista/Productos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Muestra la vista de productos que estan a la venta.</p>
            <a href="/productosadminview" class="btn btn-secondary my-2">Vista/Productos</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-secondary">
          <div class="card-header py-3 text-white bg-secondary border-secondary">
            <h4 class="my-0 fw-normal">Categorias</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Muestra las categorias de los productos que se tienen actualmente.</p>
            <a href="/Categoriasadmin" class="btn btn-secondary my-2">Crud/Categorias</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-secondary">
          <div class="card-header py-3 text-white bg-secondary border-secondary">
            <h4 class="my-0 fw-normal">Productos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Muestra los productos que se tienen actualmente.</p>
            <a href="/Productosadmin" class="btn btn-secondary my-2">Crud/Productos</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-secondary">
          <div class="card-header py-3 text-white bg-secondary border-secondary">
            <h4 class="my-0 fw-normal">Preguntas</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Muestra las preguntas que los usuarios han realizado sobre algun producto.</p>
            <a href="/Preguntas" class="btn btn-secondary my-2">Usuarios/Preguntas</a>
          </div>
        </div>
      </div>
    </div>
</main>


       <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" ></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" ></script><script src="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.js"></script>
  </body>
</html>