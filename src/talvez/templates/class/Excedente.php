<?php

class Excedente {
	private $db;

	public function __construct() {
		$this->db = Database::instance();
	}

	public function valor($id_produto, $id_usuario) {
		$query = $this->db->prepare('SELECT SUM(quantidade) FROM excedentes WHERE id_usuario = ? AND id_produto = ? GROUP BY id_produto');
		$query->execute(array($id_usuario, $id_produto));
		$data = $query->fetchAll();
		return $data;
	}


}