<?php

class GestorProductos{

	#VISUALIZAR LOS PRODUCTOS
	#------------------------------------------------------------

	public function verProductosController(){

		$respuesta = GestorProductosModel::verProductosModel("productos");	
		$i = 0;
		foreach($respuesta as $row => $item ){

		    	echo ' <div class="product-item '.$item["tipo"].'">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="'.$item["foto1"].'" alt="" class="photo">
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="single">'.$item["nombre"].'</a></h6>
									<div class="product_price">$'.$item["precio"].'</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button addCarrito">
								<a href="login">Añadir carrito</a>
							</div>
						</div>';

		}

	}

	#VISUALIZAR LOS PRODUCTOS CON USUARIOS
	#------------------------------------------------------------

	public function verProductosUserController(){

		$respuesta = GestorProductosModel::verProductosModel("productos");	
		$i = 0;
		foreach($respuesta as $row => $item ){
			
			$i = $i + 1;

		    	echo ' <div class="product-item '.$item["tipo"].'">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="'.$item["foto1"].'" alt="" class="photo">
								</div>
								
							
								<div class="product_info">
									<h6 class="product_name"><a href="single">'.$item["nombre"].'</a></h6>
									<div class="product_price">$'.$item["precio"].'</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button addCarrito">
							<form id="formulario_'.$i.'">
							<input hidden value="'.$item["id"].'" name="id_producto">
							<input hidden value="'.$_SESSION["id"].'" name="id_usuario">
							<input hidden value="formulario_'.$i.'">
							<input hidden value="'.$item["precio"].'" name="precio">
							<input hidden value="'.$item["nombre"].'" name="nombre_producto">
							
							</form><button type="submit">Añadir carrito</button></div>
						</div>';

		}

	}

	#VISUALIZAR LOS MAS VENDIDOS
	#------------------------------------------------------------

	public function verMVendidosController(){

		$respuesta = GestorProductosModel::verProductosModel("productos");	

		foreach($respuesta as $row => $item){
		   	
		    	echo ' <div class="owl-item product_slider_item">
							<div class="product-item">
								<div class="product discount">
									<div class="product_image">
										<img src="'.$item["foto1"].'" alt="" class="photo2">
									</div>
									<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>$$$</span></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single">'.$item["nombre"].'</a></h6>
										<div class="product_price">'.$item["precio"].'</div>
									</div>
								</div>
							</div>
						</div>';
		}

	}

	public function tablaCarritoController($id_usuario){

		$respuesta = GestorProductosModel::tablaCarritoModel($id_usuario, "carrito");
		
		echo $respuesta;

	}
	
}