@switch($categoria_id)
    @case(1)
        LISTAR LOS PRODUCTOS DE ELECTRONICA
        @break
    @case(2)
        LISTAR LOS ELECTRODOMESTICOS
        @break
    @case(3)
        LISTAR LA ROPA
        @break
    @case(4)
        <a href="/autenticar"><button type="button" class="btn btn-danger">ir a</button></a>
        @break
@endswitch