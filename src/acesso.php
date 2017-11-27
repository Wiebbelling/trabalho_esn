<?php


class Acesso {

	private static $con;

	public $usuario;
	public $senha;
	

	function conectar()
	{

		global $con;

		//$con = mysqli_connect("mysql.hostinger.com.br","u580826224_construtora","123456","u580826224_construtora") or die ("erro".mysqli_error($con)); < conexao com banco do servidor

		//$con = mysqli_connect("localhost","root","","construtora") or die ("erro".mysqli_error($con)); //conexao local
		
		$con = mysqli_connect("localhost","dummy", "" ,"construtora") or die ("erro".mysqli_error($con)); //conexao local
		

		return $con;

	}
function listaSolicitacoes()
	{

		global $con;

		$query ="SELECT solicitacoes.id, titulo, data_publicacao, categorias.nome
				FROM socilitacoes ";
		
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));

		while(($linha=mysqli_fetch_assoc($resultado)))
		{
			$codigo = $linha['id'];
			$titulo = $linha['titulo'];
			$data = $linha['data_publicacao'];
			$user = $linha['apelido'];
			$categoria = $linha['nome'];

			echo "<tr>
	                        <td>$codigo</td>
	                        <td>$titulo</td>
	                        <td>$user</td>
	                        <td>$categoria</td>
	                        <td>$data</td>
	                        <td style='text-align: right;'><a href='carregaPost.php?codigo=$codigo'><i class='material-icons'>mode_edit</i></a></td>
	                        <td style='text-align: right;'><a href='deletaDados.php?tipo=0&codigo=$codigo'><i class='material-icons'>delete_forever</i></a></td>
	                      </tr>";
	    }
	}
function login($usuario, $senha)
	{

		global $con;

		$query ="SELECT password FROM Login WHERE idLogin = '$usuario'";

		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		
		$linha=mysqli_fetch_assoc($resultado);

		$senha_banco = $linha['password'];


		if ($senha_banco == "") 
		{ 
			return 0; 
		}
		
		if($senha == $senha_banco)

			return 1;

		else

			return 0;
	}
}
