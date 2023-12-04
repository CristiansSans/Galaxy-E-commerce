<?php 

	/**
	 * 
	 */
	class comprobarVentaController
	{
		
		public function comprobarVenta()
		{
			if (isset($_POST['id_venta'])) {

				$id = $_POST['id_venta'];

				$resultado = comprobarVentaModel::comprobarVenta($id);	
				
				return $resultado;
			}
			
		}
	}

 ?>