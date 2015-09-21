<?php 

	class Patente{

		function __construct(){
			include('conexao.php');
		}

		/**
		* Lista as patentes ordenando por nome
		* return query dos resultados
		*/
		public function listar(){
			$sqlListaDePatentes = "SELECT * FROM patente ORDER BY nome";
			$query = mysql_query($sqlListaDePatentes);

			if(mysql_num_rows($query)>0){
				return $query;
			}else{
				return false;
			}

		}

		
		/**
		* Método para excluir determinada patente
		* @param int $idPatente - id da patente a ser excluída
		* @return boolean
		*/
		public function excluir($idPatente){

			$sqlExclusaoDePatente = "DELETE FROM patente WHERE id = {$idPatente}";

			$resultado = mysql_query($sqlExclusaoDePatente);

			return $resultado;
		}

		public function inserir($nomePatente){

			$sqlInserirPatente = "INSERT INTO patente (nome) VALUES ('{$nomePatente}')";

			return mysql_query($sqlInserirPatente);
		}

		public function buscarPatente($idPatente){

			$sqlBuscarPatente = "SELECT * FROM patente WHERE id = {$idPatente}";
			$resultadoBuscaPatente = mysql_query($sqlBuscarPatente);

			$registro = mysql_fetch_assoc($resultadoBuscaPatente);

			return $registro;
		}

		public function alterarPatente($idPatente, $nomePatente){

			$sqlAlterarPatente = "UPDATE patente SET nome = '{$nomePatente}' WHERE id = {$idPatente}";
			
			return mysql_query($sqlAlterarPatente);
		}
	}
 ?>