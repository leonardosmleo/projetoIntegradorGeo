<?php 
$action = (isset($_POST['action'])) ? $_POST['action'] : null;
include '../Model/Usuario.php';
$usuarioObj = new Usuario();

switch ($action) {
	case 'inserirUsuario':
		$dados["id_patente"] = (int)($_POST['patente']);
		$dados["id_instituicao"] = (int)($_POST['instituicao']);
		$dados["id_estado"]  = (int)($_POST['estado']);
		//Faz validação dos dados acima
		if($dados["id_patente"] && $dados["id_instituicao"] && $dados["id_estado"]){ //Se dados estiverem OK

			$dados["nome"] = $_POST['nome'];
			$dados["email"] = $_POST['email'];
			//Verifica se e-mail já existe
			if($usuarioObj->jaExiste($dados["email"])){
				//Se já existe, não cadastra nada, só retorna um aviso codificado
				$msg = array("msg"=>"Este e-mail já está cadastrado no banco de dados.");
			}else{ //Tudo ok, pode cadastrar o usuário
				$dados["senha"] = md5($_POST['senha']);
				$dados["permissao"] = ($_POST["administrador"]==1) ? 1 : 0;
				$dados["ativo"] = ($_POST["ativo"]==1) ? 1 : 0;

				$inserir = $usuarioObj->inserir($dados);
				if($inserir){
					$msg = array("msg"=>"Usuário cadastrado com sucesso.");
				}else{
					$msg = array("msg"=>"Falha ao cadastrar o usuário. Tente novamente");
				}
			}
		}
		//echo json_encode($msg);
		header("location: ../View/usuarios.php");
		break;

	case 'alterarUsuario':
		$dados["id"] = (int)($_POST['id']);
		$dados["id_patente"] = (int)($_POST['patente']);
		$dados["id_instituicao"] = (int)($_POST['instituicao']);
		$dados["id_estado"]  = (int)($_POST['estado']);
		//Faz validação dos dados acima
		if($dados["id_patente"] && $dados["id_instituicao"] && $dados["id_estado"]){ //Se dados estiverem OK

			$dados["nome"] = $_POST['nome'];
			$dados["email"] = $_POST['email'];
			//Verifica se houve troca no e-mail 
			$emailAntigo = $usuarioObj->buscarUsuario($dados["id"]);
			$emailAntigo = mysql_result($emailAntigo, 0, "email");
			if($emailAntigo != $dados["email"]){ //Se o e-mail trocou, deve-se verificar se o novo e-mail já não existe cadastrado no banco de dados 
				//Verifica se e-mail já existe
				if($usuarioObj->jaExiste($dados["email"])){
					//Se já existe, não cadastra nada, só retorna um aviso codificado
					$msg = array("msg"=>"Este e-mail já está cadastrado no banco de dados.");
					$emailOk = false;
				}else{
					$emailOk = true;
				}
			}else{ 
				$emailOk = true;
			}
			if($emailOk){ //As verificações do e-mail deram certo, pode continuar
				//Tudo ok, pode cadastrar o usuário
				if($_POST["senha"]!=""){
					$dados["senha"] = md5($_POST['senha']);
				}
				$dados["permissao"] = ($_POST["administrador"]==1) ? 1 : 0;
				$dados["ativo"] = ($_POST["ativo"]==1) ? 1 : 0;

				$atualizar = $usuarioObj->editar($dados);
				if($atualizar){
					$msg = array("msg"=>"Usuário alterado com sucesso.", "dadosUsuario"=>$dados);
				}else{
					$msg = array("msg"=>"Falha ao alterar o usuário. Tente novamente", "dadosUsuario"=>$dados);
				}
			}
		}
		//echo json_encode($msg);
		header("location: ../View/editarUsuario.php?id=".$dados["id"]);
		break;

	case 'buscar':
		$id = (int)$_POST['id'];

		$dadosDoUsuario = $usuario->buscarUsuario($id);

		echo json_encode($dadosDoUsuario);
		break;

	case 'excluir':
		$id = $_POST['idUsuario'];

		$retorno = $usuarioObj->excluir($id);
		if($retorno){
			$retorno = array("flag"=>1, "msg"=>"Usuário excluído com sucesso.");
		}else{
			$retorno = array("flag"=>2, "msg"=>"Falha ao tentar excluir usuário.");
		}
		echo json_encode($retorno);
		break;

	default:
		$listaDeUsuario = $usuario->listarUsuarios();
		require "../View/usuario.php";
	break;
}

?>