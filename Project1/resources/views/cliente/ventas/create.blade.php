<div class="row">
	<div class="col-md-12 col-xs-12">

		<form action="/compras/ingreso" method="POST">

			<div class="row">
				<div class="panel panel-body panel-primary">
				@csrf
                    @method('POST')
                    Nombre del Producto:<br>
                    <input type="text" name="producto"><br>
                    cantidad:<br>
                    <input type="text" name="cantidad"><br>
                    Precio de compra:<br>
                    <input type="text" name="precio_compra"><br>
                    precio de venta:<br>
                    <input type="text" name="precio_venta"><br>
					
				</div><!-- panel-body -->
			</div><!-- fin row detalle -->

			<br>
			<div class="row">
				<div class="col-md-12" id="guardar">
					<div class="form-group">
						<button class="btn btn-secondary" type="submit"  onclick="miFunc()" >
							Guardar
						</button>
					</div>
				</div>
			</div><!-- fin row buttons -->
			
		</form>

	</div>
</div>



<script>
  function miFunc() {
    alert('Realizo su compra exitosamente!');
  }
</script>