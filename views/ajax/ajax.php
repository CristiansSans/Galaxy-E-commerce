<?php 
	require('../../models/conexion.php');
	require('../../models/consulta.php');
	require('../../models/addCarritoSinTabla.php');
	require('../../controllers/addCarritoSinTabla.php');
	/**
	* 
	*/
	class Ajax
	{
		
		public function AgregarCarrito()
		{
			$carrito = new addCarritoSinTablaController();

			$respuesta = $carrito -> addCarritoSinTabla();

			echo "$respuesta";

		}
		
	}
	if (isset($_POST['id_usuario'])) {
		$ajax = new Ajax();
		$ajax -> AgregarCarrito();
	}

 ?>