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

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


 	 <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
 	 <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

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
	                <li class="active">
	                    <a href="alarmas.php">
	                        <i class="material-icons fa fa-cogs"></i>
	                        <p>Panel General</p>
	                    </a>
	                </li>

	                <li>
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
									<li>
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

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<a href="temperatura.php"><i class="material-icons fa fa-thermometer"></i></a>

								</div>
								<div class="card-content">
									<p class="category">Temperatura</p>

									<a href="temperatura.php"><h3 class="title">Temperatura</h3></a>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons fa fa-thermometer"></i>¿Controlar Ventilacion? <a href="temperatura.php"> Clic aquí</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<a href="iluminacion.php"><i class="material-icons fa fa-lightbulb-o"></i></a>

								</div>
								<div class="card-content">
									<p class="category">Iluminacion</p>
									<a href="iluminacion.php"><h3 class="title">Iluminacion</h3></a>

								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons fa fa-lightbulb-o"></i> ¿Controlar las luces? <a href="iluminacion.php"> Clic aquí</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">

									<a href="seguridad.php"> <i class="material-icons fa fa-lock"></i></a>
								</div>
								<div class="card-content">
									<p class="category">Seguridad</p>
									<a href="seguridad.php"> <h3 class="title">Seguridad</h3></a>

								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons fa fa-lock"></i> ¿Controlar Seguridad?<a href="seguridad.php"> Clic aquí</a>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">

									<a href="cerrar.php"> <i class="material-icons fa fa-power-off"></i></a>
								</div>
								<div class="card-content">
									<p class="category">Apagar control</p>
									<a href="cerrar.php"> <h3 class="title">Apagar</h3></a>

								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons fa fa-lock"></i> ¿Apagar control?<a href="cerrar.php"> Clic aquí</a>
									</div>
								</div>
							</div>
						</div>

					</div>


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
														<i class="material-icons fa fa-thermometer"></i>
														Temperatura
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons fa fa-lightbulb-o"></i>
														Iluminacion
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#settings" data-toggle="tab">
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

								      <!-- se controla la temperatura -->

								        <h3>Temperatura</h3>
								       <strong><strong>Control automatico de temperatura</strong></strong>


								        <!-- SI ESTA ACTIVADO EL CONTROLAUTO temperatura -->
								      <?php if ($estado0==7): ?>
								        <form class="form-signin" method="POST" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" id='temp'>
								          <strong><strong>Rango de temperatura</strong></strong>

								          <div class="row">

								           <div class="col-xs-6">
								             Minina: <?php if(!$enviado && isset($rango_min)) echo $rango_min ?>°C <br>
								             <div class="range range-success">
								               <input type="range" name="range1" min="10" max="40" value="<?php if(isset($rango_min)) echo $rango_min ?>" onchange="rangeSuccess.value=value">
								               <output id="rangeSuccess"><?php if(isset($rango_min)) echo $rango_min ?>°C</output>
								             </div>
								           </div>
								           <div class="col-xs-6">
								             Maxima: <?php if( isset($rango_max)) echo $rango_max ?>°C<br>
								             <div class="range range-info">
								               <input type="range" name="range2" min="10" max="40" value="<?php if(isset($rango_max)) echo $rango_max ?>" onchange="rangeInfo.value=value">
								               <output id="rangeInfo"><?php if(isset($rango_max)) echo $rango_max ?>°C</output>
								             </div>
								           </div>
								          </div>
								        <br>

								        <?php if (!empty($errores)): ?>
								        <div class="alert error">
								         <?php echo $errores; ?>
								        </div>
								        <?php elseif($enviado): ?>
								        <div class="alert success">
								         <p>Guardado Correctamente</p>
								        </div>
								        <?php endif ?>
								        <input type ="submit" value="Guardar" class="btn btn-primary">
								        </form>
								        <p><a href="temperatura.php">Desactivar control automatico de temperatura
								      </a></p>
								      <!-- END SI ESTA ACTIVADO EL CONTROLAUTO temperatura -->
								      <!-- SI NO ESTA ACTIVADO EL CONTROLAUTO temperatura -->
								      <?php else: ?>
								        <p>Para controlar el rango de temperatura activar <a href="temperatura.php"> Control automatico de temperatura
								      </a></p>
								      <!-- END SI NO ESTA ACTIVADO EL CONTROLAUTO temperatura -->
								      <?php endif; ?>

								      <!-- END se controla la temperatura -->


										</div>
										<div class="tab-pane" id="messages">

											iluminacion PROTOTIPO
										</div>
										<div class="tab-pane" id="settings">
											seguridad PROTOTIPO
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

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
