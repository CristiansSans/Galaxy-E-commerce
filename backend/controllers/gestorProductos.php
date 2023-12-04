<?php

class GestorProductos{

	#VISUALIZAR LOS PRODUCTOS
	#------------------------------------------------------------

	public function verProductosController(){

		$respuesta = GestorProductosModel::verProductosModel("productos");	

		foreach($respuesta as $row => $item){
		   	
		    	echo ' <div class="product-item '.$item["tipo"].'">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="'.$item["foto1"].'" alt="" class="photo">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>SALE</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single">'.$item["nombre"].'</a></h6>
									<div class="product_price">'.$item["precio"].'</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#producto'.$item["id"].'" data-toggle="modal">Editar</a></div>
						</div>

			       <div id="producto'.$item["id"].'" class="modal fade">

				       	<div class="modal-dialog modal-content">

							<div class="modal-header" style="border:1px solid #eee">

								<button type="button" class="close" data-dismiss="modal">&times;</button>

								<h3 class="modal-title"></h3>

							</div>

							<div class="modal-body" style="border:1px solid #eee">
							
								<form style="padding:0px 10px" method="post" enctype="multipart/form-data">

								      <input name="idProducto" type="hidden" value="'.$item["id"].'">

								     <div class="form-group text-center">

								       		<div style="display:block;" class="product_image">

										     	<img src="'.$item["foto1"].'" width="20%" class="img-circle">

		       								 	<input type="hidden" value="'.$item["foto1"].'" name="editarFoto">

									   		</div>	    

							    		<input type="file" class="btn btn-default" name="editarImagen" style="display:inline-block; margin:10px 0">

								          <p class="text-center" style="font-size:12px">Tamaño recomendado de la imagen: 100px * 100px, peso máximo 2MB</p>

								       </div>
								    
								     <div class="form-group">
								       
								      <input name="editarNombre" type="text" class="form-control" value="'.$item["nombre"].'" onkeypress="return letras(event);" maxlength="80" required>

								     </div>

								     <div class="form-group">
								       
								      <input name="editarDescripcion" type="text" class="form-control" value="'.$item["descripcion"].'" onkeypress="return letras(event);" maxlength="200" required>

								     </div>

								     <div class="form-group">
								       
								      <input name="editarPrecio" type="text" class="form-control" value="'.$item["precio"].'" onkeypress="return letras(event);" maxlength="40" required>

								     </div>

								     <div class="form-group">
								       
								      <input name="editarCantidad" type="text" class="form-control" value="'.$item["cantidad"].'" onkeypress="return letras(event);" maxlength="20" required>

								     </div>

								     <div class="form-group">

								        <select name="editarTipo" class="form-control" required>

								            <option value="">Seleccione el Tipo</option>
								            <option value="men">CPU</option>
								            <option value="women">Consola</option>
								            <option value="accessories">Juegos</option>

								        </select>

								      </div>

								      <div id="error" class="alert alert-danger alert-dismissible fade show" aria-label="Close" style="visibility: hidden;">
							            <p id="text"></p>
							            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							              <span aria-hidden="true">&times;</span>
							            </button>
							          </div>

								        <div class="form-group text-center">

								    		<input type="submit" value="Actualizar Producto" class="btn btn-danger">

								    	</div>

								</form>

							</div>

							<div class="modal-footer" style="border:1px solid #eee">
								
								<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

							</div>
				        
				       	</div>

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
									<div class="favorite favorite_left"></div>
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

	#EDITAR PRODUCTOS
	#------------------------------------------------------------

	public function editarProductosController(){

		$ruta = "";

		if(isset($_POST["editarNombre"])){	

			if(isset($_FILES["editarImagen"]["tmp_name"])){	

				$imagen = $_FILES["editarImagen"]["tmp_name"];

				$aleatorio = mt_rand(100, 999);

				$tipo = $_POST["editarTipo"];

				if (is_uploaded_file($imagen)) {
					$ruta = "views/images/productos/producto-".$tipo."-".$aleatorio.".png";
					copy($imagen, $ruta);
				} else{
					$ruta=$_POST["editarFoto"];
				}

			}

			if($ruta == ""){

				$ruta = $_POST["editarFoto"];
				
			}

			if ($_POST["editarFoto"]!="views/images/productos/productoZ.jpg" && $ruta == "") {
				unlink($_POST["editarFoto"]);
			}


				$datosController = array("id"=>$_POST["idProducto"],
										 "nombre"=>$_POST["editarNombre"],
						                 "descripcion"=>$_POST["editarDescripcion"],
						                 "precio"=>$_POST["editarPrecio"],
						                 "tipo"=>$tipo,
					 	                 "foto"=>$ruta,
					 	             	 "cantidad"=>$_POST["editarCantidad"]);

				$respuesta = GestorProductosModel::editarProductosModel($datosController, "productos");
				//$_SESSION["foto"] = $ruta;

				if($respuesta == "ok"){

					echo'<script>
						swal({
			                title: "¡OK!",
			                text: "¡El producto ha sido editado correctamente!",
			                type: "success",
			                confirmButtonText: "OK",
			            }).then((result) => {
							if (result.value) {
								window.location = "home";
							}else{
								window.location = "home";
							}
						}) 

					</script>';

				} else{
					echo "Error al actualizar informacion.";
				}
				
		}

	}

}