<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>Recursos</title>

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
          <h1>Meus Recursos</h1>
          <p>Abaixo estão seus recursos advindos de movimentações como origem e como destino.</p>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
              require 'class/Excedente.php';
              $excedente = new Excedente();
              foreach ($recursos as $recurso) {
                  $exc = $excedente->valor($recurso['id_produto'], $usuario->getId());
                  if (isset($exc[0])) {
                      $quantidade = $recurso['quantidade'] - $exc[0]['quantidade'];
                  } else {
                      $quantidade = $recurso['quantidade'];
                  }
                  echo "<tr>";
                  echo '<td>'.$recurso['nome'].'</td>';
                  echo '<td>'.$quantidade.'</td>';
                  echo '<td><a class="btn btn-danger btn-sm" href="excedente_gerobras.php?id='.$recurso['id_produto'].'">CADASTRAR EXCEDENTE</a></td>';
                  echo "</tr>";
              }

              ?>
              </tbody>

            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
