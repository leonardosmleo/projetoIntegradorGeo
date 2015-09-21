<?php 

	$action = (isset($_POST['action'])) ? $_POST['action'] :null;
	include("../Model/Patente.php");

	$patente = new patente();
	
	switch ($action) {
			case 'inserir':
				$idPatente = $_POST['idPatente'];
				$nomePatente = $_POST['patente'];

				$dadosDaPatente = $patente->inserirPatente($idPatente, $nomePatente);

				echo json_encode($dadosDaPatente);
			break;

			case 'buscar':
				$idPatente = $_POST['idPatente'];

				$dadosDaPatente = $patente->buscarPatente($idPatente);

				echo json_encode($dadosDaPatente);
			break;

			case 'excluir':
				$idPatente = $_POST['idPatente'];

				$retornoExclusao = $patente->excluirPatente($idPatente);

				echo json_encode($retornoExclusao);
			break;

			case 'alterar':

				$idPatente = $_POST['idPatente'];
				$nomePatente = $_POST['nomePatente'];

				$dadosDaPatente = $patente->alterarPatente($idPatente, $nomePatente);

				echo json_encode($dadosDaPatente);

			break;
				
			default:
				$listaDePatente = $patente->listarPatentes();
				require "../View/patente.php";	
			break;
		}	
?>