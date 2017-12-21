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

$estoques = new Estoque();
$estoques = $estoques->listar();

include 'templates/estoque.php';

?>