@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Usuarios/{{$user->id}}" method="post">
    @csrf
	@method('PUT')
    <div class="form-group">
    <label for="exampleFormControlInput1">Nombre del usuario:</label>
    <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Rol del Usuario:</label>
    <input type="text" class="form-control" name="role" value="{{$user->role}}"><br>
    <input type="submit" class="btn btn-primary" value="Editar">
    
    
</form>

@endsection