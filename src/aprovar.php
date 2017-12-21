<?php
require 'acesso.php';
$pagina = 'obras';

$movimentacao = new Movimentacao();
$estoque = new Estoque();
$data = $movimentacao->load($_GET['id']);
$data_estoque = $estoque->loadProduto($data['id_produto']);
if ($data['quantidade'] <= $data_estoque['quantidade']) {
	$movimentacao->aprovar($_GET['id']);
	header('Location: solicitacoes.php');
} else {
	header('Location: solicitacoes.php?erro=1');	
}

