<?php 

class verProductoController{
	public function verProducto(){
		$resultado = GestorProductosModel::verProductosModel("productos");

		foreach ($resultado as $resultados) {
			if ($resultados["tipo"]=="men") {
				$tipo = "CPU";
			}elseif ($resultados["tipo"]=="women") {
				$tipo = "Consola";
			}else{
				$tipo = "Juego";
			}
			?>
				<tr>
					<td><?php echo $resultados["nombre"]; ?></td>
					<td><?php echo $resultados["precio"]; ?></td>
					<td><?php echo $tipo; ?></td>
					<td><?php echo $resultados["cantidad"]; ?></td>
				</tr>



		<?php	
		}
	}
}


 ?>