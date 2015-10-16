<?php 

	$action = (isset($_POST['action'])) ? $_POST['action'] : null;
	include '../Model/Usuario.php';
	$login = new Login();

	switch ($action) {
		case 'validarLogin':
			$idUsuario = $_POST['idUsuario'];
			$senha = $_POST['senha'];

            $dadosLogin = $login->validarLogin($idUsuario, $senha);

            echo json_encode($dadosLogin);

			break;
		
		default:
			# code...
			break;
	}

?>