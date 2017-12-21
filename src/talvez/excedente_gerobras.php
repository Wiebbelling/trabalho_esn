<?php
require 'class/Database.php';
require 'class/Usuario.php';
require 'class/Movimentacao.php';
require 'class/Produto.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$usuario = new Usuario();
$usuario->load($_SESSION['usuario_id']);
if (!$usuario->isLoggedIn()) {
	die('Logue-se');
}

$pagina = 'recursos';

$produto = new Produto();
$recurso = $produto->load($_GET['id']);

if (isset($_POST) && !empty($_POST)) {

}

include 'templates/excedente.php';

?>