<!doctype html>
<html>
<head>
  <title>Productos</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
</head>
<body>
  <div class="container">   
    <div class="row">  
        @forelse ($productos as $producto)    
            <div class="col-md">        
                <div class="card">
                    <img class="card-img-top" src="{{asset($producto->imagen)}}" width="120px">            
                    <div class="card-body">
                        <h4 class="card-title">{{$producto->nombre}}</h4>
                        <p class="card-text">Descripcion: {{$producto->descripcion}}</p>
                        <p class="card-text">Precio: ${{$producto->precio}}.00</p>
                        <p class="card-text">Existencia: {{$producto->cantidad}} productos</p>
                        <a href="#" class="btn btn-primary">Añadir</a>
                      
                        
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