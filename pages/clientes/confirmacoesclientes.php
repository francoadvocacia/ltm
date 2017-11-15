
<?php

$con = mysqli_connect("localhost","root","","franco_adv");

$conex = new PDO('mysql:host=localhost;dbname=franco_adv;charset=utf8', 'root', '');

//Mostra Tipo Cliente
$buscaTipoCliente = "SELECT * FROM tipo_cliente";
$exibeTipoCliente = $conex->prepare($buscaTipoCliente);
$exibeTipoCliente->execute();
$tipos_clientes = $exibeTipoCliente->fetchAll();

//Mostra Sexo
$buscaSexo = "SELECT * FROM sexo";
$exibeSexo = $conex->prepare($buscaSexo);
$exibeSexo->execute();
$sexos = $exibeSexo->fetchAll();

//Mostra Estado Civil
$buscaEstadoCivil = "SELECT * FROM estado_civil";
$exibeEstadoCivil = $conex->prepare($buscaEstadoCivil);
$exibeEstadoCivil->execute();
$estados_civil = $exibeEstadoCivil->fetchAll();

//Mostra Tipo Logradouro
$buscaTipoLogradouro = "SELECT * FROM tipo_logradouro";
$exibeTipoLogradouro = $conex->prepare($buscaTipoLogradouro);
$exibeTipoLogradouro->execute();
$tipos_logradouros = $exibeTipoLogradouro->fetchAll();

//Mostra Tipo Telefone
$buscaTipoTelefone = "SELECT * FROM tipo_telefone";
$exibeTipoTelefone = $conex->prepare($buscaTipoTelefone);
$exibeTipoTelefone->execute();
$tipos_telefones = $exibeTipoTelefone->fetchAll();



//Adicionar Cliente
if(isset($_POST['btn_cadastrar_cliente'])){
	
	$tipoCliente = $_POST['tipo_cliente'];
	$nomeCliente = $_POST['nome_cliente'];
	$nomeCliente = strtoupper($nomeCliente);
	$nacionalidadeCliente = $_POST['nacionalidade_cliente'];
	$nacionalidadeCliente = strtoupper($nacionalidadeCliente);
	$dataNascimentoCliente = $_POST['data_nascimento_cliente'];
	$sexoCliente = $_POST['sexo'];
	$estadoCivilCliente = $_POST['estado_civil'];
	$profissaoCliente = $_POST['profissao_cliente'];
	$profissaoCliente = strtoupper($profissaoCliente);
	$cpfCliente = $_POST['cpf_cliente'];
	$rgCliente = $_POST['rg_cliente'];
	$pisCliente = $_POST['pis_cliente'];
	$ctpsCliente = $_POST['ctps_cliente'];
	$serieCtpsCliente = $_POST['serie_ctps_cliente'];
	$serieCtpsCliente = strtoupper($serieCtpsCliente);
	$tipoLogradouroCliente = $_POST['tipo_logradouro'];
	$nomeLogradouroCliente = $_POST['nome_logradouro'];
	$nomeLogradouroCliente = strtoupper($nomeLogradouroCliente);
	$numeroLogradouroCliente = $_POST['numero_logradouro'];
	$complementoLogradouroCliente = $_POST['complemento_logradouro'];
	$complementoLogradouroCliente = strtoupper($complementoLogradouroCliente);
	$bairroLogradouroCliente = $_POST['bairro_logradouro'];
	$bairroLogradouroCliente = strtoupper($bairroLogradouroCliente);
	$cepLogradouroCliente = $_POST['cep_logradouro'];
	$cidadeLogradouroCliente = $_POST['cidade_logradouro'];
	$cidadeLogradouroCliente = strtoupper($cidadeLogradouroCliente);
	$estadoLogradouroCliente = $_POST['estado_logradouro'];
	$estadoLogradouroCliente = strtoupper($estadoLogradouroCliente);
	$emailCliente = $_POST['email_cliente'];
	$emailCliente = strtolower($emailCliente);
	$tipoTelefone1 = $_POST['tipo_1_telefone'];
	$dddTelefone1 = $_POST['ddd_1_telefone'];
	$numeroTelefone1 = $_POST['numero_1_telefone'];
	$falarComTelefone1 = $_POST['falar_com_1_telefone'];
	$falarComTelefone1 = strtoupper($falarComTelefone1);
	$tipoTelefone2 = $_POST['tipo_2_telefone'];
	$dddTelefone2 = $_POST['ddd_2_telefone'];
	$numeroTelefone2 = $_POST['numero_2_telefone'];
	$falarComTelefone2 = $_POST['falar_com_2_telefone'];
	$falarComTelefone2 = strtoupper($falarComTelefone2);
	$tipoTelefone3 = $_POST['tipo_3_telefone'];
	$dddTelefone3 = $_POST['ddd_3_telefone'];
	$numeroTelefone3 = $_POST['numero_3_telefone'];
	$falarComTelefone3 = $_POST['falar_com_3_telefone'];
	$falarComTelefone3 = strtoupper($falarComTelefone3);
	$tipoTelefone4 = $_POST['tipo_4_telefone'];
	$dddTelefone4 = $_POST['ddd_4_telefone'];
	$numeroTelefone4 = $_POST['numero_4_telefone'];
	$falarComTelefone4 = $_POST['falar_com_4_telefone'];
	$falarComTelefone4 = strtoupper($falarComTelefone4);
	
	
	if($numeroTelefone4 != ""){
		$comandoInserirCliente = "CALL inserirCliente4($tipoCliente, '$nomeCliente', '$nacionalidadeCliente', '$dataNascimentoCliente', $sexoCliente, $estadoCivilCliente, '$profissaoCliente', '$cpfCliente', '$rgCliente', '$pisCliente', '$ctpsCliente', '$serieCtpsCliente', '$emailCliente', $tipoLogradouroCliente, '$nomeLogradouroCliente', $numeroLogradouroCliente, '$complementoLogradouroCliente', '$bairroLogradouroCliente', '$cepLogradouroCliente', '$cidadeLogradouroCliente', '$estadoLogradouroCliente', $tipoTelefone1, $dddTelefone1, '$numeroTelefone1', '$falarComTelefone1', $tipoTelefone2, $dddTelefone2, '$numeroTelefone2', '$falarComTelefone2', $tipoTelefone3, $dddTelefone3, '$numeroTelefone3', '$falarComTelefone3', $tipoTelefone4, $dddTelefone4, '$numeroTelefone4', '$falarComTelefone4')";
	}
	else if($numeroTelefone3 != ""){
		$comandoInserirCliente = "CALL inserirCliente3($tipoCliente, '$nomeCliente', '$nacionalidadeCliente', '$dataNascimentoCliente', $sexoCliente, $estadoCivilCliente, '$profissaoCliente', '$cpfCliente', '$rgCliente', '$pisCliente', '$ctpsCliente', '$serieCtpsCliente', '$emailCliente', $tipoLogradouroCliente, '$nomeLogradouroCliente', $numeroLogradouroCliente, '$complementoLogradouroCliente', '$bairroLogradouroCliente', '$cepLogradouroCliente', '$cidadeLogradouroCliente', '$estadoLogradouroCliente', $tipoTelefone1, $dddTelefone1, '$numeroTelefone1', '$falarComTelefone1', $tipoTelefone2, $dddTelefone2, '$numeroTelefone2', '$falarComTelefone2', $tipoTelefone3, $dddTelefone3, '$numeroTelefone3', '$falarComTelefone3')";
	}
	else if($numeroTelefone2 != ""){
		$comandoInserirCliente = "CALL inserirCliente2($tipoCliente, '$nomeCliente', '$nacionalidadeCliente', '$dataNascimentoCliente', $sexoCliente, $estadoCivilCliente, '$profissaoCliente', '$cpfCliente', '$rgCliente', '$pisCliente', '$ctpsCliente', '$serieCtpsCliente', '$emailCliente', $tipoLogradouroCliente, '$nomeLogradouroCliente', $numeroLogradouroCliente, '$complementoLogradouroCliente', '$bairroLogradouroCliente', '$cepLogradouroCliente', '$cidadeLogradouroCliente', '$estadoLogradouroCliente', $tipoTelefone1, $dddTelefone1, '$numeroTelefone1', '$falarComTelefone1', $tipoTelefone2, $dddTelefone2, '$numeroTelefone2', '$falarComTelefone2')";
	}
	else if($numeroTelefone1 != ""){
		$comandoInserirCliente = "CALL inserirCliente1($tipoCliente, '$nomeCliente', '$nacionalidadeCliente', '$dataNascimentoCliente', $sexoCliente, $estadoCivilCliente, '$profissaoCliente', '$cpfCliente', '$rgCliente', '$pisCliente', '$ctpsCliente', '$serieCtpsCliente', '$emailCliente', $tipoLogradouroCliente, '$nomeLogradouroCliente', $numeroLogradouroCliente, '$complementoLogradouroCliente', '$bairroLogradouroCliente', '$cepLogradouroCliente', '$cidadeLogradouroCliente', '$estadoLogradouroCliente', $tipoTelefone1, $dddTelefone1, '$numeroTelefone1', '$falarComTelefone1')";		
	}

	$inserirCliente = $conex->prepare($comandoInserirCliente);
	$inserirCliente->execute();
	if ($inserirCliente){
		echo '
		<script>
			alert("Cliente cadastrado com sucesso!");
		</script>';
	}
	else{
		echo '
		<script>
			alert("Erro ao cadastrar! Tente novamente.");
		</script>';
	}
	
}


?>