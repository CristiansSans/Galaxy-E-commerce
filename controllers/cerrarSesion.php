<?php 

	session_start();
	$id = $_SESSION["id"];
	$eliminarTabla = new eliminarTablaCarritoController();
	$eliminarTabla -> eliminarTablaCarrito($id);
	var_dump($eliminarTabla);
	if ($eliminarTabla) {

		//session_destroy();

		// header("location: login");
	}

	