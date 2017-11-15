<?php  include('includes/header.php');?>
</head>
<body>

<?php  include('includes/topo.php');?>

<?php  
  if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
	$nivelacesso = $_SESSION['nivelacesso'];
    if ($acao == "boasvindas"){
      include('pages/inicio.php');    
    }
	else if($acao == 'calendario'){
		include('pages/agendamentos/calendario.php');
	}
	else if($acao == 'agendados'){
		include('pages/agendamentos/agendados.php');
	}
	else if($acao == 'adicionacliente'){
		include('pages/clientes/adicionaclientes.php');
		if($nivelacesso < 2){
			header('Location: ?acao=sempermissao');
		}
	}
	else if($acao == 'adicionaprocesso'){
		include('pages/processos/adicionaprocessos.php');
		if($nivelacesso < 3){
			header('Location: ?acao=sempermissao');
		}
	}
	else if($acao == 'adicionaaudiencia'){
		include('pages/audiencias/adicionaaudiencias.php');
		if($nivelacesso < 4){
			header('Location: ?acao=sempermissao');
		}
	}
	else if($acao == 'gerenciamento'){
		include('pages/gerenciamento/gerenciar.php');
		if($nivelacesso < 5){
			header('Location: ?acao=sempermissao');
		}
	}
	else if($acao == 'sempermissao'){
		include('pages/inicio.php');
	}
  }
  else{
    include('pages/inicio.php');    
  }





?>

<?php  include('includes/footer.php');?>

</body>
</html>