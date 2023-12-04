<?php 

	/**
	* 
	*/
	class eliminarTablaCarritoController 
	{
		
		public function eliminarTablaCarrito($id)
		{

			$respuesta = eliminarTablaCarritoModel::eliminarTablaCarrito($id);

			return $respuesta;
		}
	}

 ?>