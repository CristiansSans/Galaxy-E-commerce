<?php

/**
 * 
 */
class cambiarCantidadCarritoModel
{
	
	public function cambiarCantidadCarrito($id_usuario, $id_producto, $cantidad)
	{
		$consulta = new Consulta();
		$sql = "UPDATE ".$id_usuario."carrito SET cantidad = $cantidad WHERE id = $id_producto";

		$resultado = $consulta -> actualizar_registro($sql);

		return $resultado;
	}
}

?>