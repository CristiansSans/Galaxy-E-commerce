<?php

class GestorProductosModel{

	#VISUALIZAR PRODUCTOS
	#---------------------------------------------------

	public function verProductosModel($tabla){

		$consulta = new Consulta();
		
		$sql = "SELECT id, nombre, descripcion, precio, foto1, foto2, likes, tipo, cantidad FROM $tabla";

		$resultado = $consulta -> ver_registros($sql);

		return $resultado;

	}

	#ACTUALIZAR PRODUCTO
	#---------------------------------------------------

	public function editarProductosModel($datosModel, $tabla){
		
		$consulta = new Consulta();
		$id = $datosModel["id"];
		$nombre = $datosModel["nombre"];
		$descripcion = $datosModel["descripcion"];
		$precio = $datosModel["precio"];
		$foto = $datosModel["foto"];
		$tipo = $datosModel["tipo"];
		$cantidad = $datosModel["cantidad"];

		$sql = "UPDATE $tabla SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', foto1 = '$foto', tipo = '$tipo', cantidad = '$cantidad' WHERE id = '$id'";	

		$resultado = $consulta -> actualizar_registro($sql);


		if($resultado){

			return "ok";
		}

		else{

			return "error";
		}

	}

}