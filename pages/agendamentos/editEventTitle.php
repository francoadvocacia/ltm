<?php

require_once("../../conexao/conecta-agendamento-pdo.php");

if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}
	
}elseif (isset($_POST['title']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$start = $_POST['start'];

	$separar = explode(" ", $start);
	$data = $separar[0];
	$hora = $separar[1];
	$dataMySQL = implode("-", array_reverse(explode("/", $data)));
	$start = $dataMySQL . " " . $hora;

	$compareceu_agendado = $_POST['compareceu_agendado'];

	if($compareceu_agendado == '1') {
		$compareceu_agendado = 1;
	}
	else if($compareceu_agendado == '2') {
		$compareceu_agendado = 2;
	}
	else if($compareceu_agendado == '3') {
		$compareceu_agendado = 3;
	}
	else {
		$compareceu_agendado = null;
	}


	$status_contrato = $_POST['status_contrato'];

	if($status_contrato == '1'){
		$status_contrato = 1;
	}
	else if ($status_contrato == '2') {
		$status_contrato = 2;
	}
	else if ($status_contrato == '3') {
		$status_contrato = 3;
	}
	else if ($status_contrato == '4') {
		$status_contrato = 4;
	}
	else{
		$status_contrato = null;
	}

	$observacao_agendado = $_POST['observacao_agendado'];
	if(!(isset($observacao_agendado))){
		$observacao_agendado = null;
	}


	$sql = "UPDATE events SET  title = '$title', start = '$start', observacao_agendado = '$observacao_agendado', compareceu_agendado = '$compareceu_agendado' , status_contrato = '$status_contrato' WHERE id = $id";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}

header('Location: ../../home.php?acao=calendario');

	
?>
