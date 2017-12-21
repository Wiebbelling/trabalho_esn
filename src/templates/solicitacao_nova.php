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
          <h2>Nova Solicitação</h2>
          <hr>
          <?php if (isset($error) && $error): ?>
            <div class="alert alert-danger">Quantidade inválida.</div>
          <?php endif; ?>
          <form class="form form-vertical" action="" method="post">
              <div class="form-group">
                <label for="usr">Obra:</label>
                <select class="form-control" name="obra">
                    <option>Selecione uma obra</option>
                    <?php foreach ($obras as $obra): ?>
                        <option value="<?php echo $obra['id'] ?>"><?php echo $obra['codigo'] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Produto:</label>
                <select class="form-control" name="produto">
                    <option>Selecione um produto</option>
                    <?php foreach ($produtos as $produto): ?>
                        <option value="<?php echo $produto['id'] ?>"><?php echo $produto['nome'] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Quantidade:</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" style="width: 100px" value="1">
              </div>
              <button type="submit" class="btn btn-primary">Solicitar</button>

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
