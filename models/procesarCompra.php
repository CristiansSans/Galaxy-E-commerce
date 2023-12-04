<?php


class IngresoProductoModel{

	public function ingresoModel($datosModel, $tabla){

		$consulta = new Consulta();
		$direccion = $datosModel["direccion"];
		$nombre = $datosModel["nombre"];
		$cedula = $datosModel["cedula"];
		$foto1 = $datosModel["foto1"];
		$foto2 = $datosModel["foto2"];
		$likes = $datosModel["likes"];
		$tipo = $datosModel["tipo"];
		$cantidad = $datosModel["cantidad"];

		if ($tipo === 'consola') {
			$tipo = 'men';
		}else if($tipo === 'cpu'){
			$tipo = 'women';
		}else{
			$tipo = 'accessories';
		}

		$sql="INSERT INTO $tabla (nombre, descripcion, precio, foto1, foto2, likes, tipo, cantidad) values ('$nombre', '$descripcion', '$precio', '$foto1', '$foto2', '$likes', '$tipo', '$cantidad')";
		
		$resultado = $consulta -> nuevo_registro($sql);

		if($resultado){
			return "ok";
		}else{
			return "error";
		}
	}

}


?>