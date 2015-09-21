<?php

class Instituicao{
	
	function __construct(){
		include 'conexao.php';
	}

	/**
	* Método que retorna todas as instituições cadastradas, ordenando-as por nome
	* @return query ou false
	*/
	public function listar(){
		$sql = "SELECT * FROM instituicao ORDER BY nome";
		$query = mysql_query($sql);
		if(mysql_num_rows($query)>0){
			return $query;
		}else{
			return false;
		}
	}

}

?>