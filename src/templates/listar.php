<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/favicon.ico">
		<title>Dashboard</title>
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
					<h3>Painel de Inteligência</h3>

					<div class="card">
						<div class="card-header">
						Recursos mais movimentados
						</div>
						<div class="card-block">
						<table class="table">
							<thead>
							</thead>
							<tbody>
							<?php 
							$i = 1;
							foreach ($recursos as $recurso) {
								echo '<tr>';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$recurso['nome'].'</td>';
								echo '<td>'.$recurso['quantidade'].'</td>';
								echo '</tr>';
								$i++;
							}
							?>
							</tbody>
						</table>
						</div>
					</div>
					<br>
					<div class="row">
					<div class=" col-md-5">
						<div class="card">
							<div class="card-header">
							Recursos mais solicitados
							</div>
							<div class="card-block">
							<table class="table">
								<thead>
								</thead>
								<tbody>
								<?php 
								$i = 1;
								foreach ($solicitados as $recurso) {
									echo '<tr>';
									echo '<td>'.$i.'</td>';
									echo '<td>'.$recurso['nome'].'</td>';
									echo '<td>'.$recurso['quantidade'].'</td>';
									echo '</tr>';
									$i++;
								}
								?>
								</tbody>
							</table>
							</div>
						</div>
					</div>

					<div class="col-md-7">
						<div class="card">
							<div class="card-header">
							Situação das requisições
							</div>
							<div class="card-block" style="text-align: center">
							<canvas id="chart-area" style="max-width: 80%"/>
							</div>
						</div>	
					</div>
					</div>
					<div class="row">
					<!--<div class="card">
						<div class="card-header">
							Últimas solicitações
						</div>
						<div class="card-block">
						<table class="table">
							<tbody>
								<?php foreach ($solicitacoes as $solicitacao) {
									echo '<tr>';
									echo '<td>a</td>';
									echo '<td>a</td>';
									echo '</tr>';
								} 
								?>

							</tbody>
						</table>
						</div>
					</div>-->
					</div>
				</main>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="assets/js/vendor/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('body').ready(function(){

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    <?php echo $aprovadas['quantidade'].','.$rejeitadas['quantidade'].','.$aguardando['quantidade'] ?>
                                    ],
                backgroundColor: [
                    'red', 'green', 'blue'
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Aprovadas",
                "Rejeitadas",
                "Aguardando"
            ]
        },
        options: {
            responsive: true
        }
    };

				var ctx = document.getElementById("chart-area").getContext("2d");
        		window.myPie = new Chart(ctx, config);

			});
		</script>
	</body>
</html>