<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Catalogo/cliente</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.pngg" sizes="16x16" type="image/png">
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
    <link href="https://getbootstrap.com/docs/5.0/examples/product/product.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.0/examples/pricing/pricing.css" rel="stylesheet">
  </head>
  <body>
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <!--a class="py-2 d-none d-md-inline-block" href="/Categoriascliente">Categorias</a>
    <a class="py-2 d-none d-md-inline-block" href="/Productoscliente">Productos</a>
    <a class="py-2 d-none d-md-inline-block" href="/ventass">Mis compras</a-->
    <a class="py-2 d-none d-md-inline-block" href="{{ route('login.destroy') }}">Salir</a>
  </nav>
</header>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Bruno Order</h1>
        <p class="lead text-muted">"Somos la tienda número uno en el sureste mexicano."</p>
      </div>
    </div>
  </section>
  <main>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Categorías</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Este catalogo muestra las categorías de los productos que tenemos a la venta</p>
            <a href="/Categoriascliente" class="btn btn-primary my-2">Catálogo/Categorias</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Productos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Este catalogo muestra todos los productos existentes en la tienda.</p>
            <a href="/Productoscliente" class="btn btn-secondary my-2">Catálogo/Productos</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Mis Compras</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <p class="lead text-muted">Muestra los productos que se han comprado recientemente.</p>
            <a href="/ventass" class="btn btn-primary my-2">Carrito/Compras</a>
          </div>
        </div>
      </div>
    </div>
</main>



<footer class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24">
      <title>Producto</title><circle cx="12" cy="12" r="10"/>
      <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="#">Acerca de </a>
    <a class="py-2 d-none d-md-inline-block" href="#">terminos</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Condiciones</a>
  </nav>
</footer>



<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>
<!--scripts-->

      
  </body>
</html>