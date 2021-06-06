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
  <div class="container">   
    <h1>vista de Categorias </h1>
    <div class="row">  
        @forelse ($categorias as $categoria)    
            <div class="col-md">        
                <div class="card">
                <img class="card-img-top" src="Imagenes/Computo/MAC.jpg">  
                    <div class="card-body">
                        <h4 class="card-title">{{$categoria->nombre}}</h4>
                        <p class="card-text">{{$categoria->descripcion}}</p>
                        <a href="#" class="btn btn-primary">Detalles</a>
                    </div>
                </div>          
            </div>
        @empty
        SIN CATEGORIAS REGISTRADAS
        @endforelse
    
    </div>
  </div>
</body>
</html>