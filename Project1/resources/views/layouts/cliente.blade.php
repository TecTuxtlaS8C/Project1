<!DOCTYPE html>
<meta charset="utf-8"/>
<meta name="robots" content="follow"/>
<html lang="es">
<head>
    <title>Producto</title>
    <style>
        .container{
            display: flex;
        }
        .header{
            background-color: red;
            width: 100%
        }
        .menu{
            background-color: gray;
            width: 30%
        }
        .contenido{
            display: block;
            background-color: #3299CC;
            float:right;
            width: 100%
            
           
        }
        .footer{
            clear: both;
            background-color: yellow;
            width: 100%
            
        }
     </style>
     @yield('estilos')
</head>
<body>
    <div class="header" >DETALLES</div>
    <div class="container">
        
                <div class="contenido">
                @yield('contentt')
                </div>
    </div>
        <div class="footer"></div>
        @yield('scripst')
 </body>
</html>                