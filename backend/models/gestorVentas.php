<?php 

class verVentasModel{
	public function verVentas(){
		$consulta = new Consulta();
		$sql="SELECT * FROM ventas INNER JOIN productos ON ventas.nombre_producto = productos.nombre ORDER BY id_ventas";
		$resultado = $consulta -> ver_registros($sql);
		return $resultado;
	}
}


 ?>