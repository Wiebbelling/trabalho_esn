<?php
require 'acesso.php';
$pagina = 'recursos';

if (isset($_POST) && !empty($_POST)) {
	$movimentacao = new Movimentacao();
	$mov = $movimentacao->listarRecursos($usuario->getId(), $_GET['id']);
	if (isset($mov[0])) {
		$quantidade = $mov[0]['quantidade'];
		$excedente = new Excedente();
		$exc = $excedente->valor($_GET['id'], $usuario->getId());
        if (isset($exc[0])) {
        	$quantidade = $quantidade - $exc[0]['quantidade'];
        }

		if ($quantidade >= $_POST['quantidade']) {
			$excedente->cadastrar($_GET['id'], $usuario->getId(), $_POST['quantidade']);

			$estoque = new Estoque();
			$estoque->load($_GET['id']);
			$estoque->updateQuantidade($estoque->getQuantidade() + $exc[0]['quantidade']);

			header('Location: recursos_gerobras.php');
			die();
		} else {
			$error = true;
		}
	} else {
		$error = true;
	}

}

$produto = new Produto();
$recurso = $produto->load($_GET['id']);

include 'templates/excedente.php';
