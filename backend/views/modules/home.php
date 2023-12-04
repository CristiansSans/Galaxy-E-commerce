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

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(views/images/game.jpg)">
		<div class="container fill_height">
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

	<!-- Categorias -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(views/images/cpu.jpg)">
						<div class="banner_category">
							<a href="categories">CPU gamer</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(views/images/juegos.jpg)">
						<div class="banner_category">
							<a href="categories">juegos</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(views/images/consolas.jpg)">
						<div class="banner_category">
							<a href="categories">consolas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tienda-->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>TIENDA</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">TODO</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">cpu</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">juegos</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">consolas</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Productos -->

						<?php 

							$verProductos = new GestorProductos();
							$verProductos->verProductosController();
							$verProductos->editarProductosController();
							
						?>
						 
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Oferta de la semana -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="views/images/sectionTime.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Oferta de la semana</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Dia</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Horas</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Minutos</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Segundos</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button" style="padding-left: 10px;padding-right: 10px;"><a href="categories">Compra ahora</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mas vendidos -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Más Vendidos</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slides -->

							<?php 

								$verProductos = new GestorProductos();
								$verProductos->verMVendidosController();

							?>

						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>ENVÍO GRATIS</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>EFECTIVO EN LA ENTREGA</h6>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 DÍAS DEVOLUCIÓN</h6>

						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>ABIERTO TODA LA SEMANA</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Hoja informativa</h4>
						<p>Suscríbase y obtenga un 20% de descuento en su primera compra</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Su Correo" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribase</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php 
	include 'footer.php';
?>