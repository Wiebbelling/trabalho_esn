<?php
require 'acesso.php';
$pagina = 'obras';

$obras = new Obra();
$obras = $obras->listar();
include 'templates/obras.php';

