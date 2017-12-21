<?php
require 'acesso.php';
$pagina = 'recursos';

$movimentacoes = new Movimentacao();
$recursos = $movimentacoes->listarRecursos($usuario->getId());

include 'templates/recursos.php';

