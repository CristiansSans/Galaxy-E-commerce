<?php

/**
 * 
 */
class cambiarCantidadCarritoController
{
	
	public function cambiarCantidadCarrito()
	{
		$id_usuario = $_POST['id_usuario'];
		$id_producto = $_POST['id'];
		$cantidad = $_POST['cantidad'];
		$respuesta = cambiarCantidadCarritoModel::cambiarCantidadCarrito($id_usuario, $id_producto, $cantidad);	

		return $respuesta;
	}
}

?>