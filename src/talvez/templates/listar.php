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
          <h1>Produtos mais Solicitados</h1>

          <section class="row text-center placeholders">
            <div class="col-1">
              
            </div>
            <div class="col-10">
                <canvas id="canvas"></canvas>
            </div>
          </section>

          <h2>Requisições</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Código</th>
                  <th>Descrição</th>
                  <th>Quantidade</th>
                  <th>Categoria</th>
                </tr>
              </thead>
              <tbody>
              <?php
              echo "count: ".count($solicitacoes);
              for($i = 0; $i < count($solicitacoes);$i++)
              {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $solicitacoes[$i]['login'] . "</td>";
                echo "<td>" . $solicitacoes[$i]['descricao'] . "</td>";
                echo "<td>" . $solicitacoes[$i]['quantidade'] . "</td>";
                echo "<td>" . $solicitacoes[$i]['adress'] . "</td>";
                echo "</tr>";
              }



              ?>
              
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
              </tbody>

            </table>
          </div>
        </main>
      </div>
    </div>


    <script>

        var config = {
            type: 'line',
            data: {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho"],
                datasets: [{
                    label: "Cimento",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [

                    <?php echo "10,
                        20,
                        10,
                        10,
                        8,
                        9,
                        10";?>
                        
                    ],
                    fill: false,
                }, {
                    label: "Areia",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: [
                        8,
                        7,
                        8,
                        9,
                        10,
                        9,
                        6
                    ],
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:false,
                    text:'Produtos mais solicitados'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Meses'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Quantidade'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
