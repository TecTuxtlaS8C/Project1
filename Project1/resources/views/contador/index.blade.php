
<!DOCTYPE html>
<meta charset="utf-8"/>
<meta name="robots" content="follow"/>
<html lang="es">
<head>
   <title>Contador</title>
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
   </head>
   <body>
  <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand text-white" >Bruno Order</a>


     <!--div class="collapse navbar-collapse" id="navbarsExample01"-->
        
       <form>
         <input class="form-control" type="text" placeholder="Search" aria-label="Search">
       </form>
   </div>
 </nav>
 <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js"></script>

 <div class="container-fluid">
 <div class="row">
   <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
     <div class="position-sticky pt-3">
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">
             <span data-feather="home"></span>
             Dashboard
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/Categorias">
             <span data-feather="file"></span>
             Categorías
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/Productos">
             <span data-feather="shopping-cart"></span>
             Productos
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/Usuarios">
             <span data-feather="users"></span>
             Usuarios
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="{{ route('login.destroy') }}">
             <span data-feather="log-out"></span>
             Salir
           </a>
         </li>


       <ul class="nav flex-column mb-20 ">


       </ul>
     </div>
     <canvas class="my-4 w-100" id="myChart" width="900" height="1080"></canvas>


     <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" ></script>
    <script src="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.js"></script>
</div>

 </body>
 </html>  
  


