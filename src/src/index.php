<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
  if($_POST['username'] == 'teste' && $_POST['password'] == '123456')
  {
    header("Location: dashboard.php");
  }
  else
  {
   echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>Ops!</strong> Você deve ter errado alguma coisa nos campos abaixo! De uma olhadinha!
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div> ";
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
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Por favor, faça o login</h2>
        <label for="username" class="sr-only">Usuário</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Usuário" required autofocus>
        <label for="password" class="sr-only">Senha</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Senha" required>
<!--         <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</html>
