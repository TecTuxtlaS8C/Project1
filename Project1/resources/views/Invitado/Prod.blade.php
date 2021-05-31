<!doctype html>
<html>
<head>
  <title>Categorias</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
  <div class="container">   
    <h1>vista de Productos </h1>
    <div class="row">  
        @forelse ($productos as $producto)    
            <div class="col-md">        
                <div class="card">
                    <img class="card-img-top" src="http://www.tutorialesprogramacionya.com/imagenes/cuadro1.jpg">            
                    <div class="card-body">
                        <h4 class="card-title">{{$producto->nombre}}</h4>
                        <p class="card-text">{{$producto->descripcion}}</p>
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