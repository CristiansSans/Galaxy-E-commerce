<?php

class GestorProductosModel{

	#VISUALIZAR PRODUCTOS
	public function verProductosModel($tabla){

		$consulta = new Consulta();
		
		$sql = "SELECT id, nombre, descripcion, precio, foto1, foto2, likes, tipo, cantidad FROM $tabla";

		$resultado = $consulta -> ver_registros($sql);

		return $resultado;

	}

	public function tablaCarritoModel($id_usuario, $tabla){
		$consulta = new Consulta();
		$sql = "SELECT * FROM ".$id_usuario.$tabla;
		$resultado = $consulta -> ver_registros($sql);
		$respuesta = count($resultado);
		return $respuesta;

		

	}

}