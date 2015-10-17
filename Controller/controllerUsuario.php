<?php 
$action = (isset($_POST['action'])) ? $_POST['action'] : null;
include '../Model/Usuario.php';
$usuarioObj = new Usuario();

switch ($action) {
	case 'inserirUsuario':
		
		break;

	case 'alterarUsuario':
		break;

	case 'excluirUsuario'
	
		break;

	case 'recuperaUsuario':
		# code...
		break;

	case 'listarUsuarios':
		# code...
		break;
	
	default:
		$listaDeUsuario = $usuario->listarUsuarios();
		require "../View/usuario.php";
	break;
}

?>