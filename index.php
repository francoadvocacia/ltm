<?php
	ob_start();
	session_start();
	if((isset($_SESSION['usuarioltm'])) && (isset($_SESSION['senhaltm']))) {
		header("Location: home.php");
	}

	include("conexao/conecta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="utf-8">
    <title>Legal Task Manager</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

<link href="css/pages/footer.css" rel="stylesheet" type="text/css">



</head>

<body>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barralogin">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Legal Task Manager</a>
    </div>
    <div class="collapse navbar-collapse" id="barralogin">
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="pages/password/restaurasenha.php"><span class="glyphicon glyphicon-user"></span> Esqueceu sua senha?</a></li>  
		</ul>
  	</div>
</div>
</nav> 

<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1>Faça seu Login</h1>		
			
			<div class="login-fields">
				
				<p>Entre com seus dados:</p>
				
				<div class="field">
					<label for="username">Usuário ou E-mail</label>
					<input id="username" name="usuario" value="" placeholder="Usuário ou E-mail" class="login username-field form-control" type="text">
				</div>
				<div class="field">
					<label for="password">Senha:</label>
					<input id="password" name="senha" value="" placeholder="Senha" class="login password-field form-control" type="password">
				</div>
			</div>
			<div class="login-actions">
				<input name="logar" value="Entrar no Sistema" class="button btn btn-success btn-lg" type="submit">
			</div>
		</form>
	</div>
	
	<?php include('conexao/confirmalogin.php') ?>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/signin.js"></script>

</body>

</html>
