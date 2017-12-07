<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Estoque</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == "dashboard") echo "active"; ?>" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pagina == "cadastro_solicitacoes") echo "active"; ?>" href="#">Configurações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ajuda</a>
        </li>
      </ul>
      <!-- <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busca</button>
      </form> -->
    </div>
  </nav>
</header>