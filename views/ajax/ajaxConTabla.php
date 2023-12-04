<?php 
	require('../../models/conexion.php');
	require('../../models/consulta.php');
	require('../../models/addCarritoSinTabla.php');
	require('../../controllers/addCarritoConTabla.php');
	/**
	* 
	*/
	class Ajax
	{
		
		public function AgregarCarrito()
		{
			$carrito = new addCarritoConTablaController();

			$respuesta = $carrito -> addCarritoConTabla();

			echo "$respuesta";

		}
		
	}
	if (isset($_POST['id_usuario'])) {
		$ajax = new Ajax();
		$ajax -> AgregarCarrito();
	}

 ?>