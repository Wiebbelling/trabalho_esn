<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>Estoque</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">

    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/utils.js"></script>

    <style>

    </style>

  </head>

  <body>
    
    <?php include "templates/header.php" ?>

    <div class="container-fluid">
      <div class="row">

        <?php include "templates/menu.php" ?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h2>Atualizando estoque de <?php echo $estoque->getNome() ?></h2>
          <?php if (isset($error) && $error): ?>
            <div class="alert alert-danger">Quantidade inválida.</div>
          <?php endif; ?>
          <form class="form form-vertical" action="estoque_editar.php?id=<?php echo $id ?>" method="post">
              <div class="form-group">
                <label for="usr">Quantidade em estoque:</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" style="width: 100px" value="<?php echo $estoque->getQuantidade() ?>">
              </div>
              <button type="submit" class="btn btn-primary">Atualizar</button>

          </form>

        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
