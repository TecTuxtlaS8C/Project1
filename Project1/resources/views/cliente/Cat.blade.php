<!doctype html>
<html>
<head>
  <title>Categorias</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
</head>
<body>
<nav class="navbar navbar-light float-right">
    <form class="form-inline">
      <a href="/cliente" class="btn btn-outline-success  my-2 my-sm-0" role="button" style="float:right">
        Regresar
      </a>
    </form>
  </nav>
<nav class="navbar navbar-light float-right">
  <form class="form-inline">
	    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por categoria" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>

<div class="container">
    <div class="row">
      @forelse ($categorias as $categoria)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">
          <h4 class="card-title">{{$categoria->nombre}}</h4>
               <p class="card-text">{{$categoria->descripcion}}</p>
               <a href="/Productoscliente" class="btn btn-primary">Detalles</a>
          </p>
        </div>
      </div>
      @empty
      SIN CATEGORIAS REGISTRADOS
      @endforelse
    </div>
  </div>

  <!--div class="container">   
    <h1>vista de Categorias </h1>
    <div class="row">  
        @forelse ($categorias as $categoria)    
            <div class="col-md">        
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$categoria->nombre}}</h4>
                        <p class="card-text">{{$categoria->descripcion}}</p>
                        <a href="/Productoscliente" class="btn btn-primary">Detalles</a>
                    </div>
                </div>          
            </div>
        @empty
        SIN CATEGORIAS REGISTRADAS
        @endforelse
    
    </div>
  </div-->
</body>
</html>