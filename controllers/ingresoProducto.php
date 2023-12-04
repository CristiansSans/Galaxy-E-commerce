<?php

/*
ingreso del producto 
*/
class ingresoProductoControllers {

		public function ingresoController(){

			if (isset($_POST["nombre"])){

				if(isset($_FILES["foto1"]["tmp_name"])){

					$foto1 = $_FILES["foto1"]["tmp_name"];
					$foto2 = $_FILES["foto2"]["tmp_name"];

					$aleatorio = mt_rand(100, 999);
					$aleatorio2 = mt_rand(100, 999);

					$tipo = $_POST["tipo"];

					if (is_uploaded_file($foto1) && is_uploaded_file($foto2)) {
						$ruta = "views/images/perfiles/producto-".$tipo."-".$aleatorio.".jpg";
						$ruta2 = "views/images/perfiles/producto-".$tipo."-".$aleatorio2.".jpg";
						// $name_f=$name;
						move_uploaded_file($foto1, $ruta);
						move_uploaded_file($foto2, $ruta2);
					}

				}

				$datosController = array("nombre"=>$_POST["nombre"],
									"descripcion"=>$_POST["descripcion"],
									"precio"=>$_POST["precio"],
									"foto1"=>$foto1,
									"foto2"=> $foto2,
									"likes"=> 0,
									"tipo"=> $tipo);
				//$resultado = new IngresoProductoModel();
				
				$resultado = IngresoProductoModel::ingresoModel($datosController, 'productos');

				if ($resultado == "ok") {

					echo'<script>

							swal({
						        title: "¡OK!",
						        text: "¡El producto ha sido ingresado correctamente!",
						        icon: "success",
						    })
						    .then((result) => {
								if (result) {
									window.location = "home"
								}else{
									window.location = "home"
								}
							}) 
						</script>';

				} elseif ($resultado == "error") {
					echo "Error al almacenar los datos.";
				} else{
					echo "Error inesperado!.";
				}
		
			}
		}
}

?>