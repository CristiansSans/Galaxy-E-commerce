<?php 

	/**
	* 
	*/
	class articulosCarritoController
	{
		
		public function articulosCarrito()
		{
			$id = $_SESSION["id"];
			$respuesta = articulosCarritoModel::articulosCarrito($id);
			?>
			
				<?php
				$i = 0;
				foreach($respuesta as $respuestas){
					$i = $i + 1;
			    	?>
			    		<tr>
							<td><?php echo $respuestas["producto"]; ?></td>
							<td class="precioProducto">$<?php echo $respuestas["precio"]; ?></td>
							<td>
							<form id="<?php echo 'formulario_'.$i ?>" >
							<input type="hidden" name="id_usuario" value="<?php echo ($id); ?>">
							<input type="hidden" name="id" value="<?php echo ($respuestas['id']); ?>">
							<input type="hidden" name="id_formulario" value="<?php echo 'formulario_'.$i ?>">
						
							
								<select name="cantidad" class="form-control cantidadProducto" style="max-width: 100px;"> 
									<option><?php echo $respuestas["cantidad"]; ?></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</td>
							</form>
						</tr>

			    	<?php
				}
				?>
			
			<?php
		}
		
		public function articulosCarritoPrecio()
		{
			$id = $_SESSION["id"];
			$respuesta = articulosCarritoModel::articulosCarrito($id);
			$precioSuma = 0;
			foreach($respuesta as $respuestas){
				$precioSuma = $precioSuma + $respuestas["precio"] * $respuestas["cantidad"];			
			}
			echo $precioSuma;
		}
	

		public function guardarCompraController($id){

			if (isset($_POST["nombreUsuario"])){

				$ruta = "";

				if(isset($_FILES["comprobante"]["tmp_name"])){

					$comprobante = $_FILES["comprobante"]["tmp_name"];
					$aleatorio = mt_rand(100, 999);
					$usuario = $_POST["nombreUsuario"]; 

					if (is_uploaded_file($comprobante)) {
						$ruta = "backend/views/images/transferencias/comprobante-".$usuario."-".$aleatorio.".pdf";

						move_uploaded_file($comprobante, $ruta);
					}

				}

				$articulos = articulosCarritoModel::articulosCarrito($id);
				$cantidad = articulosCarritoModel::articulosCarrito3($id);

				$datosController = array("nombre"=>$usuario,
									"direccion"=>$_POST["direccion"],
									"comprobante"=>$ruta,
									"cedula"=> $_POST["cedula"],
									"envio"=> $_POST["envio"],
									"precioTotal"=> $_POST["precioTotal"]);
				
				$resultado = articulosCarritoModel::guardarCompraModel($articulos, $datosController, $cantidad);

				if ($resultado == "ok") {

					$elimina = articulosCarritoModel::eliminaRegistroCarrito($id);

					if ($elimina==true) {

						echo'<script>

							swal({
						        title: "¡OK!",
						        text: "¡Su compra ha sido efectuada exitosamente!",
						        icon: "success",
						    })
						    .then((result) => {
								if (result) {
									window.location = "home"
								}else{
									window.location = "home"
								}
							}) 
						</script>';
						
					}

				} elseif ($resultado == "error") {
					echo "Error al almacenar los datos.";
				} else{
					echo "Error inesperado!.";
				}
		
			}

		}
	}
 ?>