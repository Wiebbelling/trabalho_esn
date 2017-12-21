<?php
require 'class/Database.php';
require 'class/Usuario.php';
require 'class/Estoque.php';
require 'class/Obra.php';
require 'class/Produto.php';
require 'class/Movimentacao.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$usuario = new Usuario();
$usuario->load($_SESSION['usuario_id']);
if (!$usuario->isLoggedIn()) {
	die('Logue-se');
}

$pagina = 'solicitacao_nova';
if (isset($_POST) && !empty($_POST)) {
	if ((int)$_POST['quantidade'] > 0) {
		$movimentacao = new Movimentacao();
		$movimentacao->criar($_POST['obra'], $_POST['produto'], $usuario->getId(), $_POST['quantidade']);
		header('Location: solicitacoes.php');
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