
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard | Contador</title>

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Mercado</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search"-->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="{{ route('login.destroy') }}">Salir</a>
    </li>
  </ul>
</header>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3>Catálogo/Categorias</h3>
                    <p>Mostrar Catálogo</p>
                </div>
                <div class="icon">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                </div>
                <a href="/Categoriascontador"" class="card-box-footer">Detalles<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> Catálogo/Productos </h3>
                    <p> Mostrar Catálogo </p>
                </div>
                <div class="icon">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </div>
                <a href="/Productoscontador" class="card-box-footer">Detalles <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3>Catálogo/Usuarios</h3>
                    <p>Usuarios Registrados</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <a href="/Usuarios/contador" class="card-box-footer">Detalles<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3>Ventas</h3>
                    <p>Producción vendida</p>
                </div>
                <div class="icon">
                    <i class="fa fa-money"></i>
                </div>
                <a href="/ventas/contador" class="card-box-footer">Detalles <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>

<style>
body{
background:#eee;    
}

.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
}


</style>    
      

       <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" ></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" ></script><script src="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.js"></script>
  </body>
</html>
  


