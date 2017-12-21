<?php
require 'acesso.php';
$pagina = 'obras';

$movimentacao = new Movimentacao();
$movimentacao->rejeitar($_GET['id']);

header('Location: solicitacoes.php');
