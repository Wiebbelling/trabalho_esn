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
          <h1>Gerenciamento de Obras</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Local</th>
                  <th>Responsável</th>
                  <th>Início</th>
                  <th>Entrega</th>
                  <th>Situação</th>
                </tr>
              </thead>
              <tbody>
              <?php
              foreach ($obras as $obra) {
                  if ($obra['status'] == 1) {
                  	  $status = 'Em andamento';
                  } else {
                      $status = 'Baixa';
                  }
                  echo "<tr>";
                  echo '<td>'.$obra['codigo'].'</td>';
                  echo '<td>'.$obra['local'].'</td>';
                  echo '<td>'.$obra['id_usuario'].'</td>';
                  echo '<td>'.$obra['data_inicio'].'</td>';
                  echo '<td>'.$obra['data_entrega'].'</td>';
                  echo '<td>'.$status.'</td>';
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
