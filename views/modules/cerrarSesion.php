<?php 

	//session_start();

	$id = $_SESSION["id"];
	$eliminarTabla = new eliminarTablaCarritoController();
	$eliminarTabla -> eliminarTablaCarrito($id);
	
	session_destroy();

	header("location: login");
