@extends('layouts.general')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('content')
<a href="/Categorias" class="btn btn-primary" role="button" style="float:right">
    <button>Regresar</button>
</a>
<form action="/Categorias"  method="post">
    @csrf
    @method('POST')
    Nombre de la seccion:<br>
    <input type="text" name="nombre"><br>
    Descripcion:<br>
    <input type="text" name="descripcion"><br>
    <br><input type="submit" value="Agregar">
</form>

@endsection