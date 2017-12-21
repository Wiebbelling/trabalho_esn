<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>Solicitações</title>

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
          <h1>Solicitações</h1>


          <a href="#" onclick="window.print()" class="btn btn-warning">Imprimir</a>
          <a href="#" onclick="$('#pesquisar').toggle()" class="btn btn-warning">Pesquisar</a>
          <div class="well" style="margin: 20px; padding: 20px; background: #ccc; display: none" id="pesquisar">
            <form class="form form-vertical" action="" method="post">
              <div class="form-group">
                <label for="usr">Status</label>
                <select class="form-control" name="status" style="width: 150px">
                <option value="">Status</option>
                <option value="1">Aprovada</option>
                <option value="2">Rejeitada</option>
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Obra</label>
                <select class="form-control" name="obra" style="width: 500px">
                <option value="">Selecione uma obra ou deixe em branco</option>
                <?php foreach ($obras as $obra): ?>
                  <option value="<?php echo $obra['id'] ?>"><?php echo $obra['codigo'] ?></option>
                <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Produto</label>
                <select class="form-control" name="produto" style="width: 500px">
                <option value="">Selecione um produto ou deixe em branco</option>
                <?php foreach ($produtos as $produto): ?>
                  <option value="<?php echo $produto['id'] ?>"><?php echo $produto['nome'] ?></option>
                <?php endforeach; ?>
                </select>
              </div>

              <div class="form-grup">
                <button type="submit" class="btn btn-primary">Pesquisar</button>

              </div>
            </form>

          </div>

          <hr>

          <div class="table-responsive">
            <table class="table table-striped" id="solicitacoes">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  <th>Obra</th>
                  <th>Solicitante</th>
                </tr>
              </thead>
              <tbody>
              <?php
              foreach ($movimentacoes as $movimentacao) {
                  if ($movimentacao['aprovada'] == 1) {
                      $status = 'Aprovada';
                  } else if ($movimentacao['aprovada'] == 2) {
                      $status = 'Rejeitada';
                  } else {
                      $status = 'Aguardando';
                  }
                  echo "<tr>";
                  echo '<td>'.$movimentacao['id'].'</td>';
                  echo '<td>'.$movimentacao['produto'].'</td>';
                  echo '<td>'.$movimentacao['quantidade'].'</td>';
                  echo '<td>'.$movimentacao['obra'].'</td>';
                  echo '<td>'.$movimentacao['usuario'].'</td>';
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
