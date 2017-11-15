<?php 
	header("Content-type: text/html; charset=utf-8");

	ob_start();
	session_start();
	if((!isset($_SESSION['usuarioltm'])) && (!isset($_SESSION['senhaltm']))) {
		header("Location: index.php?acao=negado");
	}

	include("conexao/conecta.php");
	include("includes/logout.php");
	include("includes/mostrar-usuario.php");


if(isset($_SESSION['nivelacesso'])){
	$nivelacesso = $_SESSION['nivelacesso'];
	switch($nivelacesso){
		case 1: 
			$acessocalendario = '';
			$acessocliente = 'disabled';
			$acessoprocesso = 'disabled';
			$acessoaudiencia = 'disabled';
			$acessogerenciamento = 'disabled';
			break;
		case 2: 
			$acessocalendario = '';
			$acessocliente = '';
			$acessoprocesso = 'disabled';
			$acessoaudiencia = 'disabled';
			$acessogerenciamento = 'disabled';
			break;
		case 3: 
			$acessocalendario = '';
			$acessocliente = '';
			$acessoprocesso = '';
			$acessoaudiencia = 'disabled';
			$acessogerenciamento = 'disabled';
			break;
		case 4:
			$acessocalendario = '';
			$acessocliente = '';
			$acessoprocesso = '';
			$acessoaudiencia = '';
			$acessogerenciamento = 'disabled';	
			break;
		case 5:
			$acessocalendario = '';
			$acessocliente = '';
			$acessoprocesso = '';
			$acessoaudiencia = '';
			$acessogerenciamento = '';
			break;
		default: 
			$acessocalendario = '';
			$acessocliente = '';
			$acessoprocesso = '';
			$acessoaudiencia = '';
			$acessogerenciamento = '';
	}
}
else{
	$nivelacesso = "";
}

if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
	if ($acao == 'boasvindas'){
		$ativahome = 'active';
		$ativacalendario = '';
		$ativacliente = '';
		$ativaprocesso = '';
		$ativaaudiencia = '';
		$ativagerenciamento = '';
	}
	else if(($acao == 'agendados') || ($acao == 'calendario')){
		$ativacalendario = 'active';
		$ativahome = '';
		$ativacliente = '';
		$ativaprocesso = '';
		$ativaaudiencia = '';
		$ativagerenciamento = '';
	}
	else if(($acao == 'adicionacliente') || ($acao == 'visualizaclientes')){
		$ativacliente = 'active';
		$ativahome = '';
		$ativacalendario = '';
		$ativaprocesso = '';
		$ativaaudiencia = '';
		$ativagerenciamento = '';
	}
	else if(($acao == 'adicionaprocesso') || ($acao == 'visualizaprocesso')){
		$ativaprocesso = 'active';
		$ativahome = '';
		$ativacalendario = '';
		$ativacliente = '';
		$ativaaudiencia = '';
		$ativagerenciamento = '';
	}
	else if(($acao == 'adicionaaudiencia') || ($acao == 'visualizaaudiencias')){
		$ativaaudiencia = 'active';
		$ativahome = '';
		$ativacalendario = '';
		$ativacliente = '';
		$ativaprocesso = '';
		$ativagerenciamento = '';
	}
	else if($acao == 'gerenciamento'){
		$ativagerenciamento = 'active';
		$ativahome = '';
		$ativacalendario = '';
		$ativacliente = '';
		$ativaprocesso = '';
		$ativaaudiencia = '';
	}
}
else {
	$ativahome = "active";
	$ativacalendario = '';
	$ativacliente = '';
	$ativaprocesso = '';
	$ativaaudiencia = '';
	$ativagerenciamento = '';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Legal Task Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href='css/fullcalendar.min.css' rel='stylesheet' />
<link href='css/bootstrap-datetimepicker.css' rel='stylesheet' />
<link href="css/datatables.css" rel="stylesheet" />
<link href="css/locastyle.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
<link href="css/pages/footer.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css">
<link href="css/selectize.css" rel="stylesheet" type="text/css">
    
<style>
	.dropdown-menu li>a:hover, .dropdown-menu .active>a, .dropdown-menu .active>a:hover { background:#8A8A8A;};
</style>