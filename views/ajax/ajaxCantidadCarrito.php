<?php 
	require('../../models/conexion.php');
	require('../../models/consulta.php');
	require('../../models/cambiarCantidadCarrito.php');
	require('../../controllers/cambiarCantidadCarrito.php');
	/**
	* 
	*/
	class Ajax
	{
		
		public function AgregarCantidadCarrito()
		{
			$carrito = new cambiarCantidadCarritoController();

			$respuesta = $carrito -> cambiarCantidadCarrito();

			echo "$respuesta";

		}
		
	}
	if (isset($_POST['id_usuario'])) {
		$ajax = new Ajax();
		$ajax -> AgregarCantidadCarrito();
	}

 ?>