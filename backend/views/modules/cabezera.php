<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">envío gratis en todos los pedidos de Venezuela superiores a 50.000.000 Bsf.</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
								<?php
								$rol = $_SESSION["rol"];
									if ($rol === "0") {
										?>
											<li class="account">
												<a href="administracion">
													Administrar
												</a>
											</li>
										<?php
									}
								?>
								<!-- Currency / Language / My Account -->
								<li class="account">
									<a href="#">
										<?php echo $_SESSION["usuario"]; ?>
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="cerrarSesion"><i class="fa fa-sign-in" aria-hidden="true"></i>Cerrar sesion</a></li>
										<li><a href="signup"><i class="fa fa-user-plus" aria-hidden="true"></i>Registrarse</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="home">smart<span>game</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="home">home</a></li>
								<li><a href="categories">tienda</a></li>
								<li><a href="contact">contacto</a></li>
							</ul>
							<ul class="navbar_user">
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">0</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>