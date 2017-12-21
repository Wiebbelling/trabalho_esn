<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == "dashboard") echo "active"; ?>" href="dashboard.php">Geral <span class="sr-only">(current)</span></a>
    </li>

    <?php if ($usuario->getPermissao() == 1): ?>
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == 'solicitacoes') echo "active"; ?>" href="solicitacoes_gerobras.php">Solicitações</a>
    </li>
    <?php endif; ?>

    <?php if ($usuario->getPermissao() == 2): ?>
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == 'solicitacoes') echo "active"; ?>" href="solicitacoes.php">Solicitações</a>
    </li>
    <?php endif; ?>

    <?php if ($usuario->getPermissao() == 1): ?>
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == 'recursos') echo "active"; ?>" href="recursos_gerobras.php">Seus Recursos</a>
    </li>
    <?php endif; ?>
  </ul>

  <ul class="nav nav-pills flex-column">
    <?php if ($usuario->getPermissao() == 1): ?>
    <li class="nav-item">
      <a class="nav-link <?php if($pagina == 'solicitacao_nova') echo "active"; ?>" href="solicitacao_nova.php">Cadastro de Solicitacao</a>
    </li>
    <?php endif; ?>

    <?php if ($usuario->getPermissao() == 2): ?>
    <li class="nav-item">
      <a class="nav-link<?php if ($pagina == 'estoque') echo ' active'; ?>" href="estoque.php">Gestão de Estoque</a>
    </li>
    <?php endif; ?>

    <?php if ($usuario->getPermissao() == 2): ?>
    <li class="nav-item">
      <a class="nav-link<?php if ($pagina == 'obras') echo ' active'; ?>" href="obras.php">Listagem de Obras</a>
    </li>
    <?php endif; ?>
  </ul>
</nav>