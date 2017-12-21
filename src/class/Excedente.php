<?php

class Excedente {
	private $db;

	public function __construct() {
		$this->db = Database::instance();
	}

	public function valor($id_produto, $id_usuario) {
		$query = $this->db->prepare('SELECT SUM(quantidade) as quantidade FROM excedentes WHERE id_usuario = ? AND id_produto = ? GROUP BY id_produto');
		$query->execute(array($id_usuario, $id_produto));
		$data = $query->fetchAll();
		return $data;
	}

	public function cadastrar($id_produto, $id_usuario, $quantidade) {
		$query = $this->db->prepare('INSERT INTO excedentes (id_produto, id_usuario, quantidade) VALUES (?, ?, ?)');
		$query->execute(array($id_produto, $id_usuario, $quantidade));
	}


}