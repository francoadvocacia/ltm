<?php 

	include("../../conexao/conecta.php");

 ?>


<!DOCTYPE html>
<html lang="pt-br">  
 <head>
    <meta charset="utf-8">
    <title>Alterar senha - Legal Task Manager</title>
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
			<?php if(isset($_GET['acao'])){
					$acao = $_GET['acao'];
					if($acao == "primeiroacesso"){
						echo "<h1>Primeira vez no sistema?</h1>";
						echo "<h4>Crie a sua senha de acesso</h4>";
						echo "<br>";
						echo "<div class='form-horizontal'>";
						echo "<div class='field'>";
						echo "	<div class='row'>";
						echo "		<div class='form-group'>";
						echo "			<label for='usuario-login' class='offset-xs-1 col-xs-10 col-sm-5'>Usuário:</label>";
						echo "			<input class='form-control offset-xs-1 col-xs-10 col-sm-6' id='usuario-login' name='usuario-login' placeholder='Insira seu nome de usuário...' type='text'>";
						echo "		</div>";
						echo "	</div>";
						echo "</div>";
					}
				}
			else {
				echo "<h1>Digite uma nova senha</h1>";
				echo "<h4>Crie uma nova senha de acesso</h4>";
				echo "<br>";
				echo "<div class='form-horizontal'>";
			} ?>
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="senha-login" class="offset-xs-1 col-xs-10 col-sm-5">Senha:</label>
							<input class="form-control offset-xs-1 col-xs-10 col-sm-6" id="senha-login" name="senha-login" placeholder="Insira a nova senha..." type="password" maxlength="12" minlenght="6"  required>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="row">
						<div class="form-group">
							<label for="confirma-login" class="col-xs-10 col-sm-5">Confirme a Senha:</label>
							<input class="form-control col-xs-10 col-sm-6" id="confirma-login" name="confirma-login" placeholder="Repita a nova senha..." type="password">
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="login-actions">
				<input value="Salvar" class="button btn btn-primary btn-lg" name="btn-salvarsenha" id="btn-salvarsenha" type="submit">
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->

	<?php include('valida-novasenha.php') ?>
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Ainda não conseguiu logar-se? Entre em contato com o administrador do sistema.
</div> <!-- /login-extra -->

</body>
</html>