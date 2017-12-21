<?php
require 'class/Database.php';
require 'class/Usuario.php';

$error = false;
if(isset($_POST['username']) && isset($_POST['password'])) {
	$usuario = new Usuario();
	$logged = $usuario->log($_POST['username'], $_POST['password']);
	if ($logged) {
		session_start();
		$_SESSION['usuario_id'] = $usuario->getId();
		header("Location: dashboard.php");
		die();
	} else {
		$error = true;
	}
}

?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/favicon.ico">

		<title>Login</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/css/signin.css" rel="stylesheet">
	</head>

	<body>

		<div class="container">
		<?php if ($error): ?>
			<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>HURRRRRRR!</strong> Você deve ter errado alguma coisa nos campos abaixo! De uma olhadinha!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				</button>
			</div>
		
		<?php endif; ?>
			<form class="form-signin" method="POST">
				<h2 class="form-signin-heading">Por favor, faça o login</h2>
				<label for="username" class="sr-only">Usuário</label>
				<input name="username" type="text" id="username" class="form-control" placeholder="Usuário" required autofocus>
				<label for="password" class="sr-only">Senha</label>
				<input name="password" type="password" id="password" class="form-control" placeholder="Senha" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			</form>

		</div> <!-- /container -->
	</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="assets/js/vendor/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
</html>
