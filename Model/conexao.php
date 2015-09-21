<?php

	error_reporting(E_ALL & ~E_DEPRECATED);

	$servidor = 'localhost';
	$banco = 'free_claudio';
	$usuario = 'root';
	$senha = 'root'; // COLOQUE A SENHA QUE QUISER AQUI.
	$link = mysql_connect($servidor,$usuario,$senha);
	$db = mysql_select_db($banco,$link);

	if (!$link) {
		echo "Erro ao conectar com o banco de dados!";
	}

?>