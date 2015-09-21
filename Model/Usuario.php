<?php 


	class Usuario{

		function __construct(){
			include 'conexao.php';
		}

		/**
		* Método para inserir usuário no banco de dados
		* @param array $dados - array com os seguintes índices: id_patente, id_instituicao, nome, email, senha, permissao, ativo
		* @return boolean - true or false
		*/
		public function inserir(array $dados){
			$sqlInserir = "INSERT INTO usuario (id_patente, id_instituicao, id_estado, nome, email, senha, permissao, ativo) 
			               VALUES ({$dados['id_patente']}, {$dados['id_instituicao']}, {$dados['id_estado']}, '{$dados['nome']}', '{$dados['email']}', '{$dados['senha']}', {$dados['permissao']}, {$dados['ativo']} )";
			return mysql_query($sqlInserir);
		}

		/**
		* Método para atualizar usuário no banco de dados
		* @param array $dados - array com os seguintes índices: id_patente, id_instituicao, nome, email, senha, permissao, ativo
		* @return boolean - true or false
		*/
		public function editar(array $dados){
			if(!@$dados["senha"]){ //se a senha não for atualizada
				$sqlUpdate = "UPDATE usuario SET id_instituicao = {$dados['id_instituicao']}, id_estado = {$dados['id_estado']}, nome = '{$dados['nome']}', email='{$dados['email']}', permissao={$dados['permissao']}, ativo={$dados['ativo']} WHERE id={$dados['id']}";

			}else{ //se for atualizado junto com a senha
				$sqlUpdate = "UPDATE usuario SET id_instituicao = {$dados['id_instituicao']}, id_estado = {$dados['id_estado']}, nome = '{$dados['nome']}', email='{$dados['email']}', senha='{$dados['senha']}', permissao={$dados['permissao']}, ativo={$dados['ativo']} WHERE id={$dados['id']}";
			}
			return mysql_query($sqlUpdate);
		}

		/**
		* Método que verifica se determinado e-mail já cadastrado no banco de dados
		* @param $email - email a ser verificado
		* @return boolean - true (existe) ou false (não existe)
		*/
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

		/**
		* Método que retorna todos os usuários cadastrados, ordenando por nome
		*/
		public function listar(){

			$sqlListaDeUsuarios = "SELECT u.id as id, u.nome as nome, u.email as email, u.ativo as ativo, p.nome as patente FROM usuario u INNER JOIN patente p ON (u.id_patente = p.id) ORDER BY nome";
			
			$resultado = mysql_query($sqlListaDeUsuarios);
		
			return $resultado;
		}

		/** 
		* Método para buscar determinado resultado
		* @param int $idUsuario - id do usuário a ser localizado
		* @return mysql_result - resultado da consulta SQL
		*/
		public function buscarUsuario($idUsuario){
			$sqlBuscar = "SELECT * FROM usuario WHERE id = {$idUsuario} ";
			$resultado = mysql_query($sqlBuscar);
			return $resultado;
		}

		/**
		* Método para excluir determinado usuário
		* @param int $idUsuario - id do usuário a ser excluido
		* @param boolean - true (excluiu) ou false (não excluiu)
		*/
		public function excluir($idUsuario){
			$sqlExcluir = "DELETE FROM usuario WHERE id = {$idUsuario}";

			$resultado = mysql_query($sqlExcluir);

			return $resultado;
		}
	}

?>