<?php 
	class addCarritoSinTablaController{

		public function addCarritoSinTabla($id)
		{
			

			// $id_usuario = $_POST["id_usuario"];
			// $resupuesta2 = addCarritoSinTablaModel::addCarritoSinTablaCrear($id_usuario);
			
			$cantidad = '0';
			$precio = $_POST["precio"];
			$nombreProducto = $_POST["nombre_producto"];
			$resupuesta3 = addCarritoSinTablaModel::ingresoProductoCarrito($id_usuario, $id_producto, $nombreProducto, $precio, $cantidad);


			

		}
		public function addCarritoSinTablaLogin($id)
		{

			$respuesta = addCarritoSinTablaModel::addCarritoSinTablaCrear($id);	

			return $respuesta;

		}
	}

 ?>