<?php
require 'class/Database.php';
require 'class/Usuario.php';
require 'class/Estoque.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$usuario = new Usuario();
$usuario->load($_SESSION['usuario_id']);
if (!$usuario->isLoggedIn()) {
	die('Logue-se');
}

$pagina = 'estoque';

if (!isset($_GET['id'])) {
	header('Location: estoque.php');
	die();
}

$estoque = new Estoque();
$estoque->load($_GET['id']);
if (isset($_POST) && isset($_POST['quantidade'])) {
	$quantidade = (int)$_POST['quantidade'];
	if (is_numeric($_POST['quantidade']) && $quantidade >= 0) {
		$estoque->updateQuantidade($quantidade);
		header('Location: estoque.php');
		die();
	} else {
		$error = true;
	}
}

$quantidade = $estoque->getQuantidade();
$id = (int)$_GET['id'];

include 'templates/estoque_editar.php';