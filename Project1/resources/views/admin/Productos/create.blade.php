@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<form action="/Productos" method="post" enctype="multipart/form-data"> 
                    
                    @csrf
                    @method('POST')
                    Nombre de la seccion:
                    <input type="text" name="nombre">
                    Descripcion;
                    <input type="text" name="descripcion">
                    
                    @csrf
                    <div class="form-group">
                    <input type="file" name="imagen" id="imagen" accept="image/*">
                    <br>
                    
                    </div>
                    <input type="submit" name="Agregar">
</form>

                    
@endsection