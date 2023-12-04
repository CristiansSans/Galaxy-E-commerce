<?php 

class Registro{
	public function registroController(){
		$consulta = new Consulta();
		$usuario = $_POST["usuarioRegistro"];
		$password = $_POST["passwordRegistro"];
		$correo = $_POST["emailRegistro"];

		if ($usuario != "") {
				
			$sql="SELECT * FROM usuarios WHERE usuario ='$usuario'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error=["usuarioError"=>"El nombre de usuario ya esta siendo utilizado."];
			}
		}

		if ($correo != "") {

			$sql="SELECT * FROM usuarios WHERE correo ='$correo'";
			$resultado = $consulta -> ver_registros($sql);

			if ($resultado) {
				$error=["correoError"=>"El email ya esta siendo utilizado."];
			}
		}

		if ($usuario=="" || $password == "" || $correo == "") {
			$error=["ErrorGeneral"=>"Todos los campos deben ser completados."];
		}

		if (isset($error)) {
			return $error;

		} else{
			$datos["usuario"] = $usuario;
			$datos["password"] = $password;	
			$datos["correo"] = $correo;

			$registroModel = new RegistroModel();
			$respuesta = $registroModel -> nuevoRegistroModel($datos);
			return $respuesta;
		}

	}
}
