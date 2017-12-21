<?php
require 'class/Database.php';
require 'class/Usuario.php';
require 'class/Movimentacao.php';
require 'class/Obra.php';
require 'class/Produto.php';
require 'class/Excedente.php';
require 'class/Estoque.php';

session_start();
$usuario = new Usuario();
$usuario->load($_SESSION['usuario_id']);
if (!$usuario->isLoggedIn()) {
	header('Location: index.php');
	die();
}
