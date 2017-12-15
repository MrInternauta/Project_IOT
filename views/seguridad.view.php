<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Smart House Web</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />






 	 <link rel="stylesheet" type="text/css" href="css/default.css" />
 	 <link rel="stylesheet" href="css/font-awesome.min.css">


</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="index.php" class="simple-text">
					Smart House Web
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li >
	                    <a href="alarmas.php">
	                        <i class="material-icons fa fa-cogs"></i>
	                        <p>Panel General</p>
	                    </a>
	                </li>

	                <li >
	                    <a href="temperatura.php">
	                        <i class="material-icons fa fa-thermometer"></i>
	                        <p>Temperatura</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="iluminacion.php">
	                        <i class="fa fa-lightbulb-o"></i>
	                        <p>Iluminacion</p>
	                    </a>
	                </li>
									<li class="active">
											<a href="seguridad.php">
													<i class="material-icons  fa fa-lock"></i>
													<p>Seguridad</p>
											</a>
									</li>
									<li>
											<a href="user.php">
													<i class="material-icons fa fa-user"></i>
													<p>Usuario</p>
											</a>
									</li>

	                <li>
	                    <a href="notifications.php">
	                        <i class="material-icons  fa fa-bell"></i>
	                        <p>Notificaciones</p>
	                    </a>
	                </li>


					<li class="active-pro">
	                    <a href="cerrar.php">
	                        <i class="material-icons fa fa-power-off"></i>
	                        <p>Cerrar sesión</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Smart House Web</a>
					</div>

				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">



					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="purple">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Controles:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons fa fa-lock"></i>
														Seguridad
													<div class="ripple-container"></div></a>
												</li>


											</ul>
										</div>
									</div>
								</div>

								<div class="card-content">
									<div class="tab-content">
										<div class="tab-pane active" id="profile">








												<strong>Alarma</strong>


												<form class="form-signin" method="POST" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">



																<?php
																if ($resultado[2]==4) {


																	echo "<input  class='btn btn-lg btn-danger btn-block' type='submit' value='Desactivar' name='estado0'> <br> <a href='alarmas.php#temp'>Configurar control automatico</a>";



																}

																if ($resultado[2]=='c') {

																							echo "<input  class='btn btn-lg btn-primary btn-block' type='submit' value='Activar' name='estado0'>";


																}


																?>
															</form>



											<strong>Encendido manual</strong>

												<?php if($resultado[2]=='c'): ?>


												<form class="form-signin" method="POST" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">


																Puerta 1 <br>
																<?php
																if ($resultado[0]=='d') {

																	//led 1 enecendido
																	echo "<input  class='btn btn-lg btn-danger btn-block' type='submit' value='Apagar' name='estado'>";


																}
																if ($resultado[0]=='e') {
																	//led 1 apagad
																		echo "<input  class='btn btn-lg btn-primary btn-block' type='submit' value='Encender' name='estado'>";


																}


																?>
											<br>



											</form>
												<?php else: ?>
													<p>Debe desactivar las alarmas para poder controlar manualmente las puertas.
											</p>
												<?php endif; ?>



										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>

							<li>
								<a href="https://www.youtube.com/user/thetutosmexico">
									YouTube
								</a>
							</li>
							<li>
								<a href="http://www.mr-internauta.com.mx/web/portafolio/">
									Portfolio
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/sr.internauta/">
								   Facebook
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.mr-internauta.com.mx">Mr. Internauta</a>
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
  <script src="js/temperatura.js"></script>


	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
