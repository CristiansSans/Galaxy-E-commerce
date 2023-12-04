<?php 
	require('../../models/conexion.php');
	require('../../models/consulta.php');
	require('../../models/comprobarVenta.php');
	require('../../controllers/comprobarVenta.php');
	/**
	* 
	*/
	class Ajax
	{
		
		public function comprobarVenta()
		{
			$carrito = new comprobarVentaController();

			$respuesta = $carrito -> comprobarVenta();

			echo "$respuesta";

		}
		
	}
	if (isset($_POST['id_venta'])) {
		$ajax = new Ajax();
		$ajax -> comprobarVenta();
	}

 ?>