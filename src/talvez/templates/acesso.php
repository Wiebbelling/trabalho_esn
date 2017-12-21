<?php


class Acesso {

	private static $con;

	public $usuario;
	public $senha;


	function conectar()
	{

		global $con;

		$con = mysqli_connect("localhost","root","","construtora") or die ("erro".mysqli_error($con));

		return $con;

	}


	function listaSolicitacoes()
	{

		global $con;

		$query ="SELECT r.Descricao as descricao, o.adress as adress, o.Login_idLogin as login, s.quantidade as quantidade FROM Solicitacoes s JOIN Recurso r ON r.CodigoRecurso = s.codigoRecurso JOIN Obra o ON o.idObra = s.idObra";
		
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		$i = 0;
		while(($linha=mysqli_fetch_assoc($resultado)))
		{
			$solicitacoes[$i] = $linha;
			$i = $i + 1;
	    }

	    return $solicitacoes;
	}

	function login($usuario, $senha)
	{

		global $con;

		$query ="SELECT password FROM usuarios WHERE user = '$usuario'";

		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));

		$linha=mysqli_fetch_assoc($resultado);

		$senha_banco = $linha['password'];

		if($senha == $senha_banco)

			return 1;

		else

			return 0;
	}

}

?>