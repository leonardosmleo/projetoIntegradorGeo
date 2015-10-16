<?php 

	class Login
	{
		
		function __construct()
		{
			include('conexao.php');
		}

		function validaLogin($idUsuario, $senha){
			$sqlDadosLogin = "SELECT id, senha FROM usuario WHERE id = $idUsuario and senha = '[$senha]'";

			$dadosLogin = mysql_query($sqlDadosLogin);

			$resultado = mysql_fetch_assoc($dadosLogin);

			if ($resultado['id']) {
				# code...
			}
		}
	}

?>