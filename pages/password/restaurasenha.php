<?php
	
	include("../../conexao/conecta.php");
?>


<!DOCTYPE html>
<html lang="pt-br">  
 <head>
    <meta charset="utf-8">
    <title>Recuperar senha - Legal Task Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="../../css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../css/locastyle.css" rel="stylesheet" type="text/css">
<link href="../../css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barralogin">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../../index.php">Legal Task Manager</a>
    </div>
    <div class="collapse navbar-collapse" id="barralogin">
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="../../index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
  	</div>
</div>
</nav>

<div class="account-container register">
	
	<div class="content clearfix">

		<form action="#" method="post" id="formulario">
		
			<h1>Restaurar senha</h1>
			<h4>Confirme seus dados para gerar uma nova senha</h4>
			<br>
			<div class="form-horizontal">
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="nome-login" class="col-xs-12 col-sm-3">Nome:</label>
							<input class="form-control col-xs-12 col-sm-8" id="nome-login" name="nome-login" placeholder="Nome..." type="text">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="usuario-login" class="col-xs-12 col-sm-3">Usuário:</label>
							<input class="form-control col-xs-12 col-sm-8" id="usuario-login" name="usuario-login" placeholder="Usuário..." type="text">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="email-login" class="col-xs-12 col-sm-3">E-mail:</label>
							<input class="form-control col-xs-12 col-sm-8" id="email-login" name="email-login" placeholder="E-mail..." type="email">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="cpf-login" class="col-xs-12 col-sm-3">CPF:</label>
							<input class="form-control col-xs-12 col-sm-8" id="cpf-login" name="cpf-login" placeholder="CPF..." data-mask="000.000.000-00" type="text">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="datanascimento-login" class="col-xs-12 col-sm-3">Data Nasc.:</label>
							<input class="form-control col-xs-12 col-sm-8" id="datanascimento-login" name="datanascimento-login" placeholder="Data de Nascimento..." data-mask="00/00/0000" type="text">
						</div>
					</div>
				</div>
			</div>
			<div class="login-actions">
				<input value="Restaurar Senha" class="button btn btn-primary btn-lg" name="btn-restaurar" id="btn-restaurar" type="submit">
			</div>
		</form>
</div>

<?php include('valida-restauracao.php'); ?>

<div class="login-extra">
	Ainda não conseguiu acessar o sistema? Entre em contato com o administrador.
</div>


<script src="../../js/jquery.js"></script>
<script src="../../js/locastyle.js" type="text/javascript"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/signin.js"></script>

</body>

 </html>
