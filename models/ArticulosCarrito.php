<?php 
	
	/**
	* 
	*/
	class articulosCarritoModel
	{
		
		public function articulosCarrito($id)
		{
			$consulta = new Consulta();
		
			$sql = "SELECT * FROM ".$id."carrito";

			$resultado = $consulta -> ver_registros($sql);

			return $resultado;
		}
		public function articulosCarrito3($id)
		{
			$consulta = new Consulta();
		
			$sql = "SELECT cantidad FROM ".$id."carrito";

			$resultado = $consulta -> ver_registros($sql);

			return $resultado;
		}
		public function articulosCarrito2($id)
		{
			$consulta = new Consulta();
		
			$sql = "SELECT producto FROM ".$id."carrito";

			$resultado = $consulta -> ver_registros($sql);

			return $resultado;
		}

		public function guardarCompraModel($articulos, $datosModel, $cantidad){
			$consulta = new Consulta();
			$resultado = count($articulos);

			$nombreUsuario = $datosModel["nombre"];
			$direccion = $datosModel["direccion"];
			$cedula = $datosModel["cedula"];
			$envio = $datosModel["envio"];
			$comprobante = $datosModel["comprobante"];
			$precioTotal = $datosModel["precioTotal"];
			

			$i=0;
			while ($i < $resultado) { 

				foreach ($articulos as $articulo) {

					$producto = $articulo["producto"];
					$cantidad = $articulo["cantidad"];
					$i++;

					$sql = "INSERT INTO ventas (nombre_producto, transferencia, direccion, usuario, estadoV, cedula, envioCompra, precioTotal, cantidadComprado) VALUES ('$producto', '$comprobante', '$direccion', '$nombreUsuario', 'false', '$cedula', '$envio', '$precioTotal', '$cantidad')";

					$result = $consulta -> nuevo_registro($sql);
					//var_dump($i);
				}

			}

			return $result;

		}

		public function eliminaRegistroCarrito($id){
			$consulta = new Consulta();
			$sql = "DELETE FROM ".$id."carrito WHERE id_usuario = ".$id."";
			$respuesta = $consulta -> borrar_registro($sql);
			return $respuesta;
		}
	}


 ?>