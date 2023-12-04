<?php 
	class addCarritoSinTablaModel{
		public function addCarritoSinTabla($id){
			$consulta = new Consulta();

			$sql = "SELECT * FROM productos WHERE id = $id";

			$resultado = $consulta -> ver_registros($sql);

			return $resultado;
		}
		public function addCarritoSinTablaCrear($id)
		{
			$consulta = new Consulta();

			$sql = "CREATE TABLE ".$id."Carrito (id INT(6) AUTO_INCREMENT PRIMARY KEY, id_usuario  varchar(50), producto varchar(200), precio varchar(11), cantidad int(11))";

			$resultado2 = $consulta -> nuevo_registro($sql);

			return $resultado2;
		}
		public function ingresoProductoCarrito($id, $id_producto, $producto, $precio, $cantidad)
		{
			$consulta = new Consulta();

			$sql = "INSERT INTO ".$id."Carrito (id_usuario, producto, precio, cantidad) values ('$id', '$producto', '$precio', '$cantidad')";

			$resultado3 = $consulta -> nuevo_registro($sql);

			return $resultado3;		
		}
	}
 ?>