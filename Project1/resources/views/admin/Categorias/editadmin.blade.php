@extends('layouts.cate')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')

<form action="/Categoriasadmin/{{$categoria->id}}" method="post">
@csrf
	@method('PUT')
    <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la Categoria</label>
    <input type="text" class="form-control" name="nombre" value="{{$categoria->nombre}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Descripcion de la Categoria</label>
    <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Editar">
</form>

@endsection