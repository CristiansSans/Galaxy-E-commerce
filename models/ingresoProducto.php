<?php


class IngresoProductoModel{

	public function ingresoModel($datosModel, $tabla){

		$consulta = new Consulta();
		$nombre = $datosModel["nombre"];
		$descripcion = $datosModel["descripcion"];
		$precio = $datosModel["precio"];
		$foto1 = $datosModel["foto1"];
		$foto2 = $datosModel["foto2"];
		$likes = $datosModel["likes"];
		$tipo = $datosModel["tipo"];

		if ($tipo === 'consola') {
			$tipo = 'men';
		}else if($tipo === 'cpu'){
			$tipo = 'women';
		}else{
			$tipo = 'accessories';
		}

		$sql="INSERT INTO $tabla (nombre, descripcion, precio, foto1, foto2, likes, tipo) values ('$nombre', '$descripcion', '$precio', '$foto1', '$foto2', '$likes', '$tipo')";
		
		$resultado = $consulta -> nuevo_registro($sql);

		if($resultado){
			return "ok";
		}else{
			return "error";
		}
	}

}


?>