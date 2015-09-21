<?php
class Estado{
	function __construct(){
		include 'conexao.php';
	}

	public function listar(){
		$sql = "SELECT * FROM estado ORDER BY nome";
		return mysql_query($sql);
	}
}

?>