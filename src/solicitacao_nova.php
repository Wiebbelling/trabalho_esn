<?php
require 'acesso.php';

$pagina = 'solicitacao_nova';
if (isset($_POST) && !empty($_POST)) {
	if ((int)$_POST['quantidade'] > 0) {
		$movimentacao = new Movimentacao();
		$movimentacao->criar($_POST['obra'], $_POST['produto'], $usuario->getId(), $_POST['quantidade']);
		header('Location: solicitacoes_gerobras.php');
		die();
	} else {
		$error = true;
	}
}

$produto = new Produto();
$obra = new Obra();

$obras = $obra->listar($usuario->getId());
$produtos = $produto->listar();
include 'templates/solicitacao_nova.php';