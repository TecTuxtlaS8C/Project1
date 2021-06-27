@extends('layouts.admin')
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
@section('contentt')

<form action="/Productosadmin" method="post" enctype="multipart/form-data"> 
                    
                    @csrf
                    @method('POST')
                    Nombre del Producto:<br>
                    <input type="text" name="nombre"><br>
                    Descripcion:<br>
                    <input type="text" name="descripcion"><br>
                    Precio:<br>
                    <input type="text" name="precio"><br>
                    Cantidad:<br>
                    <input type="text" name="cantidad"><br>
                    Categoria:<br>
                    <input type="text" name="categoria"><br>
                    @csrf
                    <div class="form-group"><br>
                    <input type="file" name="imagen" id="imagen" accept="image/*">
                    <br>
                    
                    </div><br>
                    <input type="submit" name="Agregar">
</form>

                    
@endsection