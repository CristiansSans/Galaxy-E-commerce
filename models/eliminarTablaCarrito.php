<?php 

	/**
	* 
	*/
	class eliminarTablaCarritoModel
	{
		
		public function eliminarTablaCarrito($id)
		{
			$consulta = new Consulta();

			$sql = "DROP TABLE ".$id."carrito";

			$resultado = $consulta -> borrar_registro($sql);

			return $resultado;
		}
	}

 ?>