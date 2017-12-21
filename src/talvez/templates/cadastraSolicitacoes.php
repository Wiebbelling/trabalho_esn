<?php
include "acesso.php";

$Acesso = new Acesso();

$Acesso->conectar();

$pagina = "cadastro_solicitacoes";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Estoque</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <script src="../js/Chart.bundle.js"></script>
    <script src="../js/utils.js"></script>

    <style>

    </style>

  </head>

  <body>
    
    <?php include "header.php" ?>

    <div class="container-fluid">
      <div class="row">

        <?php include "menu.php" ?>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Cadastro de Solicitações</h1>
          <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
          <form>

            <div class="form-group col-5">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Solicitar
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Disponibilizar
                </label>
              </div>
            </div>


            <div class="form-group col-5">
              <label for="exampleFormControlSelect1">Produto</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <div class="form-group col-5">
              <label for="exampleFormControlSelect1">Obra</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <div class="form-group col-5">
              <label class="col-form-label" for="formGroupExampleInput">Quantidade</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>

            

          </form>
        </div>
       </div>


        </main>
      </div>
    </div>
  </body>
</html>