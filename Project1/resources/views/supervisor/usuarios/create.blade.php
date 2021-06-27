@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Usuarios" method="post">
@csrf
                    @method('POST')
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre del usuario</label>
                    <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Rol</label>
                    <input type="text" class="form-control" name="role">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Correo</label>
                    <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Contraseña</label>
                    <input type="password"  class="form-control" name="password">
                    </div>
                  
                   
                    </div>
                    <input type="submit" class="btn btn-primary" value="Agregar">
</form>

@endsection