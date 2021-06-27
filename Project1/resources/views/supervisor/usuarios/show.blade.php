@extends('layouts.user')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
	<label for="exampleFormControlInput1">Nombre del Usuario:</label>
	<p class="form-control">{{$user->name}}</p>
	<label for="exampleFormControlInput1">Correo:</label>
	<p class="form-control">{{$user->email}}</p>

@endsection