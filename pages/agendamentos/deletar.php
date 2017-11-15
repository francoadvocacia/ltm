<?php

header('Content-Type: text/html; charset=utf-8');

require_once('conexao.php');

	$id=$_REQUEST['id'];
	$sql = "DELETE FROM events WHERE id = $id";
	$result = mysqli_query($con,$sql);
	header("Location: index.php?valor=2"); 

	/*$query = $con->prepare( $sql );
	if ($query == false) {
	 print_r($con->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}*/

?>