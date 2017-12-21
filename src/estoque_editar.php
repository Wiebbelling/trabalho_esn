<?php
require 'acesso.php';

$pagina = 'estoque';

if (!isset($_GET['id'])) {
	header('Location: estoque.php');
	die();
}

$estoque = new Estoque();
$data = $estoque->load($_GET['id']);
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