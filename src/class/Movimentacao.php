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

	public function load() {
		$query = $this->db->query('SELECT * FROM movimentacoes');
		$data = $query->fetchAll();
		return $data[0];
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

	public function listarTodasQuery($querys, $params) {
		$query = $this->db->prepare('SELECT movimentacoes.*, produtos.nome as produto, obras.codigo as obra, usuarios.usuario as usuario FROM movimentacoes INNER JOIN produtos ON produtos.id = id_produto INNER JOIN obras ON obras.id = id_obra INNER JOIN usuarios ON usuarios.id = movimentacoes.id_usuario WHERE '.$querys.' ORDER BY movimentacoes.id DESC');
		$query->execute($params);
		$data = $query->fetchAll();
		return $data;
	}

	public function listarRecursosDashboard($id_usuario=null, $status=1) {
		$query_status = '';
		if ($status != null) {
			$query_status = ' AND aprovada = ?';
		}

		if ($id_usuario == null) {
			$query = $this->db->prepare('SELECT SUM(quantidade) as quantidade, produtos.nome as nome, produtos.id as id_produto FROM movimentacoes INNER JOIN produtos on produtos.id = id_produto WHERE 1=1 '.$query_status.' GROUP BY id_produto  ORDER BY quantidade DESC');
			if ($query_status != null) {
				$query->execute(array($status));
			} else {
				$query->execute();
			}
		} else {
			$query = $this->db->prepare('SELECT SUM(quantidade) as quantidade, produtos.nome as nome, produtos.id as id_produto FROM movimentacoes INNER JOIN produtos on produtos.id = id_produto WHERE id_usuario = ? '.$query_status.' GROUP BY id_produto ORDER BY quantidade DESC');
			if ($query_status != '') {
				$query->execute(array($id_usuario, $status));
			} else {
				$query->execute(array($id_usuario));
			}
		}

		$data = $query->fetchAll();
		return $data;
	}

	public function aguardando($id_usuario=null) {
		if ($id_usuario == null) {
			$query = $this->db->query('SELECT COUNT(id) as quantidade FROM movimentacoes  WHERE aprovada = 0 ');
		} else {
			$query = $this->db->prepare('SELECT COUNT(id) as quantidade FROM movimentacoes  WHERE aprovada = 0 AND id_usuario = ? ');
			$query->execute(array($id_usuario));
		}
		$data = $query->fetchAll();
		return $data[0];
	}

	public function aprovadas($id_usuario=null) {
		if ($id_usuario == null) {
			$query = $this->db->query('SELECT COUNT(id) as quantidade FROM movimentacoes  WHERE aprovada = 1 ');
		} else {
			$query = $this->db->prepare('SELECT COUNT(id) as quantidade FROM movimentacoes  WHERE aprovada = 1 AND id_usuario = ? ');
			$query->execute(array($id_usuario));
		}
		$data = $query->fetchAll();
		return $data[0];
	}

	public function rejeitadas($id_usuario=null) {
		if ($id_usuario == null) {
			$query = $this->db->query('SELECT COUNT(id) as quantidade FROM movimentacoes  WHERE aprovada = 2 ');
		} else {
			$query = $this->db->prepare('SELECT COUNT(id) as quantidade FROM movimentacoes  WHERE aprovada = 2 AND id_usuario = ? ');
			$query->execute(array($id_usuario));
		}
		$data = $query->fetchAll();
		return $data[0];
	}

	public function listarRecursos($id_usuario=null, $id_produto=null) {
		$query_produto = '';
		if ($id_produto != null) {
			$query_produto = ' AND id_produto = ?';
		}

		if ($id_usuario == null) {
			$query = $this->db->prepare('SELECT SUM(quantidade) as quantidade, produtos.nome as nome, produtos.id as id_produto FROM movimentacoes INNER JOIN produtos on produtos.id = id_produto WHERE aprovada = 1 '.$query_produto.' GROUP BY id_produto');
			if ($id_produto != null) {
				$query->execute(array($id_produto));
			} else {
				$query->execute(array());
			}
		} else {
			$query = $this->db->prepare('SELECT SUM(quantidade) as quantidade, produtos.nome as nome, produtos.id as id_produto FROM movimentacoes INNER JOIN produtos on produtos.id = id_produto WHERE id_usuario = ? AND aprovada = 1 '.$query_produto.' GROUP BY id_produto');
			if ($id_produto != null) {
				$query->execute(array($id_usuario, $id_produto));
			} else {
				$query->execute(array($id_usuario));
			}
		}

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