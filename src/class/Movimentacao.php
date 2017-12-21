<?php

class Movimentacao {
	private $db;
	public function __construct() {
		$this->db = Database::instance();
	}

	public function listar() {
		$query = $this->db->query('SELECT * FROM movimentacoes');
		$data = $query->fetchAll();
		return $data;
	}

	public function listarTodas($id_usuario = null) {
		if ($id_usuario == null) {
			$query = $this->db->query('SELECT movimentacoes.*, produtos.nome as produto, obras.codigo as obra, usuarios.usuario as usuario FROM movimentacoes INNER JOIN produtos ON produtos.id = id_produto INNER JOIN obras ON obras.id = id_obra INNER JOIN usuarios ON usuarios.id = movimentacoes.id_usuario ORDER BY movimentacoes.id DESC');
		} else {
			$query = $this->db->prepare('SELECT movimentacoes.*, produtos.nome as produto, obras.codigo as obra, usuarios.usuario as usuario FROM movimentacoes INNER JOIN produtos ON produtos.id = id_produto INNER JOIN obras ON obras.id = id_obra INNER JOIN usuarios ON usuarios.id = movimentacoes.id_usuario WHERE usuarios.id = ? ORDER BY movimentacoes.id DESC');
			$query->execute(array($id_usuario));
		}
		$data = $query->fetchAll();
		return $data;
	}

	public function listarRecursos($id_usuario) {
		/*$query = $this->db->prepare('SELECT id FROM produtos');
		$produtos = $query->fetchAll();
		
*/
		$query = $this->db->prepare('SELECT SUM(quantidade) as quantidade, produtos.nome as nome, produtos.id as id_produto FROM movimentacoes INNER JOIN produtos on produtos.id = id_produto WHERE id_usuario = ? AND aprovada = 1 GROUP BY id_produto');
		$query->execute(array($id_usuario));
		$data = $query->fetchAll();
		return $data;
	}

	public function aprovar($id) {
		$query = $this->db->prepare('UPDATE movimentacoes SET aprovada = 1 WHERE id = ?');
		$query->execute(array($id));
	}

	public function rejeitar($id) {
		$query = $this->db->prepare('UPDATE movimentacoes SET aprovada = 2 WHERE id = ?');
		$query->execute(array($id));
	}

	public function criar($id_obra, $id_produto, $id_usuario, $quantidade) {
		$query = $this->db->prepare('INSERT INTO movimentacoes (id_obra, id_produto, id_usuario, quantidade, aprovada) VALUES (?, ?, ?,?,?)');
		$query->execute(array($id_obra, $id_produto, $id_usuario, $quantidade, 0));
	}
}