<link rel="stylesheet" type="text/css" href="views/css/sweetalert.css">
<script src="views/js/sweetalert-u.min.js"></script>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_SESSION["validar"]==false || $_SESSION["validar"]==null){

	header("location:login");
	exit();

	if ($_SESSION["rol"]!=0) {
		header("location:login");
		exit();	
	}
	
}

include "cabezera.php";

?>
<div class="super_container">

	<div class="main_slider" style="background-image:url(views/images/game.jpg)">
			<div class="container fill_height">
				<div class="row align-items-center fill_height">
					<div class="col">
						<div class="main_slider_content">
							<h6>SmartGame / Sección / administrativa</h6>
							<h1><?php echo $_SESSION["usuario"]; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="container-fluid" style="margin-top: 5%;">
		<div class="container">
			<div class="row">
				<div class="col-md-9" id="FormularioProduct" style="display: none;">
					<form class="login100-form validate-form" method="post" id="formIngreso" enctype="multipart/form-data">
					<span class="login100-form-title p-b-26">
						¡Ingreso de producto!
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate>
						<input class="input100" type="text" name="nombre" required>
						<span class="focus-input100" data-placeholder="Nombre del producto"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<input class="input100" type="text" name="descripcion" required>
						<span class="focus-input100" data-placeholder="Descripcion del producto"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<select name="tipo" class="form-control">
							<option value="cpu">Cpu</option>
							<option value="consola">Consola</option>
							<option value="juegos">Juegos</option>
						</select>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<input class="input100" type="num" name="precio" maxlength="10" required>
						<span class="focus-input100" data-placeholder="Precio"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate>
						<input class="input100" type="num" name="cantidad" maxlength="10" required>
						<span class="focus-input100" data-placeholder="Cantidad"></span>
					</div>

					<div class="wrap-input100 validate-input fileContainer" data-validate>
						<input class="input100" type="file" name="foto1">
					</div>

					<div class="wrap-input100 validate-input fileContainer" data-validate>
						<input class="input100" type="file" name="foto2">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Enviar
							</button>
						</div>
					</div>
				</form>
				</div>
				<?php 
					
					$ingreso = new ingresoProductoControllers();
					$ingreso ->ingresoController();
				
				?>
				<div class="col-md-9" id="tablaVentas">
					<h2 style="text-align: center;">Lista de ventas</h2>
					<table class="table table-hover">
					    <thead>
					      <tr>
					      	<th>Producto</th>
					        <th>Comprador</th>
					        <th>Direccion</th>
					        <th>Cantidad</th>
					        <th>Estado de venta</th>
					        <th>Compañia de envio</th>
					        <th>Monto total</th>
					      </tr>
					    </thead>
					    <tbody>
					      <?php 
					      $verVentas = new verVentasController();
					      $verVentas -> verVentas();

					      
					       ?>
					    </tbody>
					 </table>
				</div>
				<div class="col-md-9" id="tablaProductos" style="display: none;">
					<h2 style="text-align: center;">Lista de Productos</h2>
					<table class="table table-hover">
					    <thead>
					      <tr>
					      	<th>Producto</th>
					        <th>Precio</th>
					        <th>Tipo</th>
					        <th>Cantidad</th>
					      </tr>
					    </thead>
					    <tbody>
					      <?php 
					      $verProducto = new verProductoController();
					      $verProducto -> verProducto();

					       ?>
					    </tbody>
					 </table>
				</div>
				<div class="col-md-3">
					<button class="producto" id="ingresoProduct" href="IngresoProducto">Ingresar Producto</button><br><br>
					<button class="producto" id="verProducto" href="#">Ver Productos</button><br><br>
					<button class="producto" id="verVentas" href="#">Ver Lista de Ventas</button><br><br>
				</div>
			</div>
		</div>
	</div>
<?php 
	include 'footer.php';
?>
