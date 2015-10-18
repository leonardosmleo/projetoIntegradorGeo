<?php 

	include('conexao.php');

	class Usuario{

		function __construct(){}

		public function inserir($rg, $id_patente, $id_instituicao, $id_estado, $nome, $emai, $senha, $permissao, $ativo){
			
			$sqlInserir = "INSERT INTO usuario(	id_patente, 
												id_instituicao, 
												id_estado, 
												nome, 
												email, 
												senha, 
												permissao, 
												ativo
									) VALUES (	{$dados['id_patente']}, 
												{$dados['id_instituicao']}, 
												{$dados['id_estado']}, 
												'{$dados['nome']}', 
												'{$dados['email']}', 
												'{$dados['senha']}', 
												{$dados['permissao']}, 
												{$dados['ativo']} )";

			mysql_query($sqlInserir);
		}

		public function editar($rg, $id_instituicao, $id_estado, $nome, $email, $permissao, $ativo, $senha){

			$sqlUpdate = "UPDATE usuario SET 
								id_instituicao 	= $id_instituicao, 
								id_estado		= $id_estado, 
								nome 			= 'nome', 
								email 			= '$email', 
								permissao 		= $permissao, 
								ativo 			= $ativo 
						  WHERE id 				= $id";

			mysql_query($sqlUpdate);
		}

		//verifica se email já não está cadastrado.
		public function jaExiste($email){
			if($email){
				$sqlSelect = "SELECT email FROM usuario WHERE email='".$email."'";
				$query = mysql_query($sqlSelect);
				if(mysql_num_rows($query)>0){
					return true;
				}else{
					return false;
				}
			}else{
				return true; //E-mail inválido
			}
		}

		//valida a senha inserida pelo usuario no momento do login
		public function validaSenha($rg, $senha){
			sqlBuscaSenha = "SELECT senha FROM usuario WHERE rg = $rg"

			resultado = mysql_query(sqlBuscaSenha);

			if (resultado > 0) {
				return true;
			} else {
				return false;
			}
		}

		public function listar(){

			$sqlListaDeUsuarios = "SELECT u.id as id, u.nome as nome, u.email as email, u.ativo as ativo, p.nome as patente 
									FROM usuario u 
									INNER JOIN patente p ON (u.id_patente = p.id) 
									ORDER BY nome";
			
			$resultado = mysql_query($sqlListaDeUsuarios);
		
			return $resultado;
		}

		public function buscarUsuario($idUsuario){
			$sqlBuscar = "SELECT * FROM usuario WHERE id = {$idUsuario} ";
			$resultado = mysql_query($sqlBuscar);
			return $resultado;
		}

		public function excluir($rg){
			$sqlExcluir = "DELETE FROM usuario WHERE rg = {$rg}";

			$resultado = mysql_query($sqlExcluir);

			$numeroDeLinhasAfetadas = mysql_affected_rows();

			return $numeroDeLinhasAfetadas;

		}
	}

?>