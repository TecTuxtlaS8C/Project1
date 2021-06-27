@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Restablecer/{{$user->id}}" method="post">
    @csrf
	@method('PUT')
    <div class="form-group">
        <label for="exampleFormControlInput1">Restablecer Contraseña:</label>
        <input type="password"  class="form-control" name="password" value="{{$user->password}}">
     </div>
    <input type="submit" class="btn btn-primary" value="Actualizar">
</form>

@endsection