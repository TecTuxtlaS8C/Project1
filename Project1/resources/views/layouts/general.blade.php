<!DOCTYPE html>
<meta charset="utf-8"/>
<meta name="robots" content="follow"/>
<html lang="es">
<head>
    <title>LARAVEL</title>
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
            background-color: orange;
            float:right;
            width: 70%
            
           
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
    <div class="header">ENCABEZADO</div>
    <div class="container">
        <div class="menu">
            <ul>
                <li><a href="/Categorias">Categorias</a></li>
             </ul>
        </div>
                <div class="contenido">
                @yield('content')
                </div>
    </div>
        <div class="footer">Pie de Pagina</div>
        @yield('scrips')
 </body>
</html>                