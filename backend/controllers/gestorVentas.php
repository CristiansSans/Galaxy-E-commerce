<?php 

class verVentasController{
	public function verVentas(){
		$resultado = verVentasModel::verVentas();
		$i = 0;
		
		foreach ($resultado as $resultados) {
			$i = $i + 1;
			if ($resultados["estadoV"]=="true") {
				$estadoV = "pagado";
			} elseif($resultados["estadoV"]=="false"){

				$estadoV = "comprobar";
			}	
				$id = $resultados["id_ventas"];
				$usuario = $resultados["usuario"];
				$comprobante = $resultados["transferencia"];
			?>
				<tr>
					<td><?php echo $resultados["nombre"]; ?></td>
					<td><?php echo $usuario; ?></td>
					<td><?php echo $resultados["direccion"]; ?></td>
					<td><?php echo $resultados["cantidadComprado"]; ?></td>
					<td>
						<?php if ($estadoV=="pagado") {
						 	echo $estadoV; 
						}else{
							 echo "<a target='_blank' href='../".$comprobante."' class='btn btn-danger'>Ver pdf</a>
							 <form id='formulario_".$i."'>
							
							 <input type='hidden' name='id_venta' value='".$id."'>
							  <input type='hidden' name='id_form' value='formulario_".$i."'>
							 <button class='btn btn-danger botonComprobar'>".$estadoV."</button>
							 </form>
							 "; 
							 
						
					} ?>
						
					</td>
					<td><?php echo $resultados["envioCompra"]; ?></td>
					<td>$<?php echo $resultados["precioTotal"]; ?></td>
				</tr>



		<?php	
		}
	}
}

?>