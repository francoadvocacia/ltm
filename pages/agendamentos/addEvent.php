<?php

require_once("../../conexao/conecta-agendamento-pdo.php");

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];

	$separar = explode(" ", $start);
	$data = $separar[0];
	$hora = $separar[1];
	$dataMySQL = implode("-", array_reverse(explode("/", $data)));
	$start = $dataMySQL . " " . $hora;

	$end = $_POST['end'];
	$color = $_POST['color'];

	if($color == "#871F78") {
		$agente_comercial = 2;
	}
	else if ($color == "#0101DF") {
		$agente_comercial = 3;
	}
	else if ($color == "#FA58D0") {
		$agente_comercial = 4;
	}
	else {
		$agente_comercial = 1;
		$color == "#000080";
	}

	$sql = "INSERT INTO events(title, start, end, color_evento, agente_comercial) values ('$title', '$start', '$end', '$color', '$agente_comercial')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
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
