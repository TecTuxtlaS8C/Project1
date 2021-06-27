@extends('layouts.layout')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')
<form action="/Productos" method="post" enctype="multipart/form-data"> 
                    
                    @csrf
                    @method('POST')
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre del Producto</label>
                    <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Descripción del Producto</label>
                    <input type="text" class="form-control" name="descripcion">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Precio del Producto</label>
                    <input type="text" class="form-control" name="precio">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Cantidad de Productos</label>
                    <input type="text" class="form-control" name="cantidad">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Categoría del Producto</label>
                    <input type="text" class="form-control" name="categoria">
                    </div>
                    @csrf
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Imagen del Producto</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" accept="image/*">
                    <br>
                   
                    </div>
                    <input type="submit" class="btn btn-primary" name="Agregar">
</form>

                    
@endsection