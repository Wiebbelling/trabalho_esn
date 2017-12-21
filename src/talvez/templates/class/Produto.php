<?php

class Produto {
	private $db;

	public function __construct() {
		$this->db = Database::instance();
	}

	public function listar() {
		$query = $this->db->query('SELECT * FROM produtos');
		$data = $query->fetchAll();
		return $data;
	}

	public function load($id) {
		$query = $this->db->prepare('SELECT * FROM produtos WHERE id = ? LIMIT 1');
		$query->execute(array($id));
		$data = $query->fetchAll();
		return $data[0];
	}


}