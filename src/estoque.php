<?php
require 'acesso.php';

$pagina = 'estoque';

$estoques = new Estoque();
$estoques = $estoques->listar();
include 'templates/estoque.php';

