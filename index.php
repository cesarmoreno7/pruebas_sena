<!doctype html>

<html lang="es">

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<meta name="HandheldFriendly" content="True">

		<meta name="MobileOptimized" content="320"/>

		<meta name="apple-mobile-web-app-capable" content="yes">

		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<meta http-equiv="cleartype" content="on">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

		<link rel="stylesheet"  href="estilo.css">

		<link rel="stylesheet"  href="bootstrap-3.3.4-dist/css/bootstrap.min.css">

		<!--<link rel="shortcut icon" type="image/x-icon" href="" />-->

</head>

	<body>

			  <!--<div class="navbar navbar-inverse">

			  <div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">

				  <span class="icon-bar"></span>

				  <span class="icon-bar"></span>

				  <span class="icon-bar"></span>

				</button>

				<a class="navbar-brand" href="#">

					<img src="img/logo.png">

				</a>

			  </div>

		  <div class="navbar-collapse collapse navbar-inverse-collapse">

			<ul class="nav navbar-nav navbar-right">

			  <li><a href="#">Home</a></li>

			  <li><a href="#">About</a></li>

			  <li><a href="#">Features</a></li>

			  <li><a href="#">Sign Up</a></li>

			  <li><button type="button" class="btn btn-primary" onclick="window.location.href='#login'">Log in</button></li>

			</ul>

		    </div>

		    </div>-->

				

			<div class="container">

				<div class="header-top">

					<div class="pull-right social-icons">

						<a href="https://twitter.com/myfindprice"><i class="fa fa-twitter"></i></a>

						<a href="https://www.facebook.com/myfindprice"><i class="fa fa-facebook"></i></a>

						<a href="https://plus.google.com/101715084793651462451"><i class="fa fa-google-plus"></i></a>

						<!--<a href="#"><i class="fa fa-youtube"></i></a>-->

					</div>

				</div>     

				<div class="row">

					<div class="col-md-4">

					    <img src="">

						<div>

							<!--ACCESO SOLO PARA USUARIOS AUTORIZADOS-->

						</div>

					</div>

				</div>



				<div class="row">

					<div class="col-md-4 col-md-offset-7">

						<div class="panel panel-default">

							<div class="panel-heading">	<span class="glyphicon glyphicon-lock"></span>Acceso al area administrativa del <br> Sistema de Información</div>

							<div class="panel-body">

								<form class="form-horizontal" role="form" method='post' action="validar_acceso.php">

									<div class="form-group">

										<!--<label for="inputEmail3" class="col-sm-3 control-label">Correo</label>-->

										<div class="col-sm-9">

											<input type="text" name = "id_usu" class="form-control" id="inputEmail3" placeholder="Ingrese su Identificación" required>

										</div>

									</div>

									<div class="form-group">

										<!--<label for="inputPassword3" class="col-sm-3 control-label">Clave</label>-->

										<div class="col-sm-9">

											<input type="password" name = "cla_usu" class="form-control" id="inputPassword3" placeholder="Ingrese su Clave" required>

										</div>

									</div>

									<!--<div class="form-group">

										<label for="inputPassword3" class="col-sm-3 control-label">Clave</label>

										<div class="col-sm-9">

											<input type="text" name = "cod_almacen" class="form-control" id="inputPassword3" placeholder="Ingrese Código Almacen" required>

										</div>

									</div>-->

									<?php

										error_reporting(E_ERROR);

										if($_GET["error"]=="si"){

											echo "Identificación o Clave invalida, por favor Verifica tus Datos de Acceso";

											}else{

												echo "";

										} 					

									?>	

									

									<div class="form-group last">

										<div class="col-sm-offset-3 col-sm-9">

											<button type="submit" class="btn btn-success btn-sm">Ingresar</button>

											<button type="reset" class="btn btn-default btn-sm">Limpiar</button>

										</div>

									</div>

									<div class="form-group">

										<!-- <div class="panel-footer">

											// Olvidastes la Clave?<a href="formulario_mail.php">Recuperar Clave</a><br><br>

											// No estas Registrado? <a href="form_registro_usuario.php">Registrate Aquí</a><br><br>

										// </div>-->

										

										

									</div>

								</form>

							</div>

							

						</div>

					</div>

				</div>

			</div>

		

			<div    class="navbar navbar-default navbar-fixed-bottom ">

				<!-- <div class="container">

				  // <p>&copy2016 - Prodsoft S.A.S, Celular:301 7961140, Mail:soporte@trabajosytareas.com, <br><a href="politica.php">Politica de Privacidad</a><br></p> 									   

   				// </div> -->			

			</div>

			  <style type="text/css">

			   p

				{

					text-align: center;

				}

			  </style>

 	</body>

</html>

