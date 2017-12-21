<?php

class Estoque {
	private $db;
	private $quantidade;
	private $id;
	private $id_produto;
	public function __construct() {
		$this->db = Database::instance();
	}

	public function getQuantidade() {
		return $this->quantidade;
	}

	public function listar() {
		$query = $this->db->query('SELECT * FROM estoques INNER JOIN produtos ON produtos.id = estoques.id_produto');
		$data = $query->fetchAll();
		return $data;
	}

	public function load($id) {
		$query = $this->db->prepare('SELECT * FROM estoques INNER JOIN produtos ON produtos.id = estoques.id_produto WHERE estoques.id = ?');
		$query->execute(array($id));
		$data = $query->fetchAll();
		if (count($data) != 1) {
			return false;
		}
		$this->id = $data[0]['id'];
		$this->quantidade = $data[0]['quantidade'];
		$this->id_produto = $data[0]['id_produto'];
		return $data;
	}

	public function updateQuantidade($qtd) {
		$query = $this->db->prepare('UPDATE estoques SET quantidade = ? WHERE id = ?');
		$query->execute(array($qtd, $this->id));
		return true;
	}
}