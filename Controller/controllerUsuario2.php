<?php 

$action = (isset($_POST['action'])) ? $_POST['action'] : null;
include '../Model/Usuario.php';
$usuario = new Usuario();

switch ($action) {
	case 'inserir':
		$patente = $_POST['ID_PATENTE'];
		$nome = $_POST['NOME'];
		$instituicao = $_POST['instituicao'];
		$UF  = $_POST['UF'];
		$email = $_POST['email'];

		$dadosDoUsuario = $usuario->inserirUsuario($patente, $nome, $instituicao, $UF, $email);

		echo json_encode($dadosDoUsuario);
		break;

	case 'alterar':
		$patente = $_POST['ID_PATENTE'];
		$nome = $_POST['NOME'];
		$instituicao = $_POST['instituicao'];
		$UF  = $_POST['UF'];
		$email = $_POST['email'];

		$dadosDoUsuario = $usuario->alterarUsuario($patente, $nome, $instituicao, $UF, $email);

		echo json_encode($dadosDoUsuario);
		break;

	case 'buscar':
		$id = $_POST['id'];

		$dadosDoUsuario = $usuario->buscarUsuario($id);

		echo json_encode($dadosDoUsuario);
		break;

	case 'excluir':
		$id = $_POST['id'];

		$retorno = $usuario->excluirUsuario($id);
		
		echo json_encode($retorno);
		break;

	default:
		$listaDeUsuario = $usuario->listarUsuarios();
		require "../View/usuario.php";
	break;
}

?>