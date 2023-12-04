<?php 

	/**
	 * 
	 */
	class comprobarVentaModel
	{
		
		public function comprobarVenta($id)
		{
			$consulta = new Consulta();
			
			$sql = "UPDATE ventas SET estadoV = 'true' WHERE id_ventas = $id";

			$resultado = $consulta -> actualizar_registro($sql);

			if($resultado){
			return "ok";
			}else{
				return "error";
			}
		}
	}

 ?>