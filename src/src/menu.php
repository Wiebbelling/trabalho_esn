<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == "dashboard") echo "active"; ?>" href="dashboard.php">Geral <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Solicitacoes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Liberações</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Análise</a>
    </li>
  </ul>

  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == "cadastro_solicitacoes") echo "active"; ?>" href="cadastraSolicitacoes.php">Cadastro de Solicitacao</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Gestão de Estoque</a>
    </li>
  </ul>

 <!--  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#">Nav item again</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">One more nav</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Another nav item</a>
    </li>
  </ul> -->
</nav>