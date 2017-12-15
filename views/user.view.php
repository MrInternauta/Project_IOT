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
									<li >
											<a href="seguridad.php">
													<i class="material-icons  fa fa-lock"></i>
													<p>Seguridad</p>
											</a>
									</li>
									<li class="active">
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
						<a class="navbar-brand" href="#">Perfil</a>
					</div>

				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Perfil <i class="material-icons fa fa-user"></i></h4>
									<p class="category">Editar perfil</p>
	                            </div>
	                            <div class="card-content">
<form class="form-signin" method="POST" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Compañia (desctivado)</label>
													<input type="text" class="form-control" name="compañia">
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Nombre de usuario</label>
													<input type="text" class="form-control"name="ns" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Correo</label>
													<input type="email" class="form-control" name="correo">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Nombres</label>
													<input type="text" class="form-control" name="nombres" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Apellidos</label>
													<input type="text" class="form-control" name="apellidos">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Direccion</label>
													<input type="text" class="form-control" name="direccion">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Ciudad</label>
													<input type="text" class="form-control" name="ciudad">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Pais</label>
													<input type="text" class="form-control" name="pais">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Codigo Postal</label>
													<input type="text" class="form-control" name="cp">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>Sobre mi</label>
													<div class="form-group label-floating">
									    				<label class="control-label">Soy Fulanito</label>
								    					<textarea class="form-control" rows="5" name="sm"></textarea>
		                        					</div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right">Actualizar perfil</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="#pablo">
    									<img class="img" src="assets/img/faces/marc.jpg" />
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">CEO / Co-Founder</h6>
    								<h4 class="card-title">Mr internauta</h4>
    								<p class="card-content">
    									Hola me llamo Felipe y soy Mr. Internauta
    								</p>
    								<a href="#" class="btn btn-primary btn-round">Facebook</a>
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

</html>
