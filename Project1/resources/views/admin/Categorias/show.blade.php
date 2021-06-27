@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')
<div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la Categoria</label>
    <input type="text" class="form-control" name="nombre" value="{{$categoria->nombre}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Descripcion de la Categoria</label>
    <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}">
	
    </div>
@endsection