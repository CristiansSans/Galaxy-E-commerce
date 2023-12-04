<?php 
	class addCarritoConTablaController{
		public function addCarritoConTabla()
		{
			
			$id_producto = $_POST["id_producto"];
			$id_usuario = $_POST["id_usuario"];
			$cantidad = '1';
			$precio = $_POST["precio"];
			$nombreProducto = $_POST["nombre_producto"];
			$resupuesta3 = addCarritoSinTablaModel::ingresoProductoCarrito($id_usuario, $id_producto, $nombreProducto, $precio, $cantidad);


			

		}
	}

 ?>