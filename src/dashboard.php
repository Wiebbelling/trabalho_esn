<?php
require 'acesso.php';

$pagina = 'dashboard';

$solicitacoes = new Movimentacao();

if ($usuario->getPermissao() == 1) {
	// gerobras
	$recursos = $solicitacoes->listarRecursosDashboard($usuario->getId());
	$solicitados = $solicitacoes->listarRecursosDashboard($usuario->getId());
	$aguardando = $solicitacoes->aguardando($usuario->getId());
	$rejeitadas = $solicitacoes->rejeitadas($usuario->getId());
	$aprovadas = $solicitacoes->aprovadas($usuario->getId());
} else {
	$recursos = $solicitacoes->listarRecursosDashboard();
	$solicitados = $solicitacoes->listarRecursosDashboard(null, null);
	$aguardando = $solicitacoes->aguardando();
	$rejeitadas = $solicitacoes->rejeitadas();
	$aprovadas = $solicitacoes->aprovadas();
}


include 'templates/listar.php';
