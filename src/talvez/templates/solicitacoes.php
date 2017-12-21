<?php
require 'class/Database.php';
require 'class/Usuario.php';
require 'class/Movimentacao.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$usuario = new Usuario();
$usuario->load($_SESSION['usuario_id']);
if (!$usuario->isLoggedIn()) {
	die('Logue-se');
}

$pagina = 'solicitacoes';

$movimentacoes = new Movimentacao();
$movimentacoes = $movimentacoes->listarTodas();

include 'templates/solicitacoes.php';

?>