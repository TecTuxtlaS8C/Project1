@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')

</a>
<form action="/Categorias"  method="post">
    @csrf
    @method('POST')
    <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la Categoria</label>
    <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Descripcion de la Categoria</label>
    <input type="text" class="form-control"  name="descripcion">
    </div>
   <!-- <div class="form-group">
    <label for="exampleFormControlInput1">Imagen de la Categoria</label>
    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
    <br>-->
    <input type="submit" class="btn btn-primary" value="Agregar">
</form>

@endsection