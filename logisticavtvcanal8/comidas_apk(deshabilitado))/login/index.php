<!doctype html>
<html lang="en">
<link rel="shortcut icon" href="images/FAVicon.ico">

<head>
	<title>Arepera VTV</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<?php
unset($usu);
$usu1 = $_GET["usu"];





if ($usu1 < 8) {
} else {

	require("error-usuario.php");
}



?>

<body class="img js-fullheight">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">


						<center>
							<img src="../assets/img/8.png">
							<h3 class="mb-4 text-center"> <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo-menu.png"></a></h3>
							<form method="post" action="../sql/validacion.php" class="signin-form">
								<div class="form-group">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" name="pass" class="form-control" placeholder="Contraseña" required>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
								</div>


							</form>
							<div class="form-group">



								<button onclick="window.location.href='http://comedor.vtv.gov.ve/'" class="form-control btn btn-dark submit px-3">Salir</button>
							</div>
							


					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>