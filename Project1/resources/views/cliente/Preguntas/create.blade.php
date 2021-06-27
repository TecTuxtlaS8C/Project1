
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
<form action="/Preguntas" method="post" > 
                    @csrf
                    @method('POST')
                    Hacer Pregunta:<br>
                    <input type="text" name="pregunta"><br>
                    
                    <br><input type="submit" class="btn btn-primary" name="Enviar">
</form>

                    
