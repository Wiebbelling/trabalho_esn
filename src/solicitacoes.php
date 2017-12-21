<?php
require 'acesso.php';

$pagina = 'solicitacoes';

$movimentacoes = new Movimentacao();
//$movimentacoes = $movimentacoes->listarTodas();

$obras = new Obra();
$obras = $obras->listar();
$produtos = new Produto();
$produtos = $produtos->listar();

$usuarios = new Usuario();
$solicitantes = $usuarios->listar();

if (isset($_POST) && !empty($_POST)) {
	$query = '1=1';
	$params = array();
	if (!empty($_POST['obra'])) {
		$query .= ' AND movimentacoes.id_obra = ?';
		$params[] = $_POST['obra'];
	}
	if (!empty($_POST['produto'])) {
		$query .= ' AND movimentacoes.id_produto = ?';
		$params[] = $_POST['produto'];
	}
	if (!empty($_POST['solicitante'])) {
		$query .= ' AND movimentacoes.id_usuario = ?';
		$params[] = $_POST['solicitante'];
	}
	if (!empty($_POST['status'])) {
		$query .= ' AND movimentacoes.aprovada = ?';
		$params[] = $_POST['status'];
	}
	$movimentacoes = $movimentacoes->listarTodasQuery($query, $params);
} else {
	$movimentacoes = $movimentacoes->listarTodas();
}


include 'templates/solicitacoes.php';
