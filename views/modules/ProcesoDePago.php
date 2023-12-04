<link rel="stylesheet" type="text/css" href="views/css/sweetalert.css">
<script src="views/js/sweetalert-u.min.js"></script>
<?php 

$valido = false;
if (session_status() == PHP_SESSION_NONE) {
    session_start();

}

if ($_SESSION["validar"]) {
	$valido = true;
}

include "cabezera.php";
?>
<div class="super_container">

	<div class="main_slider" style="background-image:url(views/images/game.jpg)">
		<div class="container fill_height" style="margin-top:-3%;">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>SmartGame / EL MEJOR LUGAR PARA LOS GAMERS</h6>
						<h1>Obten 30% por comprar en tu primera visita</h1>
						<div class="red_button shop_now_button"><a href="categories">Compra Ahora</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12"><br>
					<h2 style="text-align: center;">Articulos en Carrito</h2><br>
					<table class="table table-hover">
					    <thead>
					      <tr>
					      	<th>Producto</th>
					      	<th>Precio</th>
					        <th>Cantidad</th>
					      </tr>
					    </thead>
					    <tbody>
					      <?php 
					      		$verArticulosCarrito = new articulosCarritoController();
					      		$verArticulosCarrito -> articulosCarrito();
					       ?>
					    </tbody>
					 </table>
					 <h2>Total: $
					 	<h2 id='Precio' style="position: relative; top: -42px; left: 130px;">
						 	<?php 
								$verPreciosCarrito = new articulosCarritoController();
								$verPreciosCarrito -> articulosCarritoPrecio();
							?>
						</h2>			
					</h2>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-12" style="border: solid 1px #cccccc;padding: 5px;margin-bottom:50px;">
				<center>
					<p><strong>
						Banco: Banesco 	<br>
						Tipo: Corrite <br>
						Nº Cuenta: 0102 0120 1201 4410 1002 <br>
						beneficiario: Smartgame <br>
						Rif: J 4552124 9 <br>
						Correo: compra@smartgame.com
						</strong>
					</p>
				</center>
			</div>
			<div class="col-md-12" style="border: solid 1px #cccccc;padding: 5px;margin-bottom:50px;">
				<center>
					<p>
						<strong>
						El siguiente formulario se debe completar al hacer la transferecia y tener el comprobante, para luego adjuntarlo al formulario, comprobante de la transferencia el sistema no dejara hacer la compra.
						</strong>
					</p>
				</center>
			</div>
			<div class="col-md-12">

				<form class="login100-form validate-form" method="post" id="formIngreso" enctype="multipart/form-data">

					<span class="login100-form-title p-b-26">
						Formulario de compra
					</span>

					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate>
						<textarea class="input100" type="text" name="direccion" required></textarea>
						<span class="focus-input100" data-placeholder="Direccion de envio"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<input class="input100" type="text" name="nombreUsuario" required>
						<span class="focus-input100" data-placeholder="Nombre del receptor del envio"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<input class="input100" type="number" name="cedula" required>
						<span class="focus-input100" data-placeholder="Cedula del receptor del envio"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<select name="envio" class="form-control">
							<option value="mrw">MRW</option>
							<option value="domesa">DOMESA</option>
							<option value="zoom">ZOOM</option>
						</select>
					</div>

					<div class="wrap-input100 validate-input fileContainer" data-validate>
						<input class="input100" type="file" name="comprobante">
					</div>

					<input type="hidden" value="<?php 

					$verPreciosCarrito -> articulosCarritoPrecio(); 
					
					?>" name="precioTotal">

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Comprar
							</button>
						</div>
					</div>
					<?php 

						$verArticulosCarrito -> guardarCompraController($_SESSION["id"]);

					 ?>
				</form>

			</div>
		</div>	
	</div>

</div>
<hr>
<?php 
	include 'footer.php';
?>