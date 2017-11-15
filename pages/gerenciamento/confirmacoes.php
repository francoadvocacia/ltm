<?php
//Conexões
$con_usuario = mysqli_connect("localhost","root","","usuarios_sistema");

$con = mysqli_connect("localhost","root","","franco_adv");
mysqli_set_charset($con, 'utf8');


// Adicionar Usuário
if(isset($_POST['adicionarUsuario'])){
	$nomeUsuario = $_POST['nomeUsuario'];
	$emailUsuario = $_POST['emailUsuario'];
	$cpfUsuario = $_POST['cpfUsuario'];
	$dataNascimentoUsuario = $_POST['dataNascimentoUsuario'];
	$nivelAcessoUsuario = $_POST['nivelAcessoUsuario'];
	
	$comando = "CALL inserirUsuario('$nomeUsuario', '$emailUsuario', '$cpfUsuario', '$dataNascimentoUsuario', $nivelAcessoUsuario)";
	
	$result = mysqli_query($con_usuario, $comando);
	if ($result == false){
		echo'
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
	
}

//Adicionar Agendador
if(isset($_POST['adicionarAgendador']))	{
	$nomeAgendador = $_POST['nomeAgendador'];
	$corAgendador = $_POST['corAgendador'];
	
	$comando = "CALL inserirAgendador('$nomeAgendador', '$corAgendador')";
	
	$inserirAgendador = mysqli_query($con, $comando);
	if ($inserirAgendador == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Posição Compareceu
if(isset($_POST['adicionarPosicaoCompareceu']))	{
	$nomePosicaoCompareceu = $_POST['nomePosicaoCompareceu'];
	$corPosicaoCompareceu = $_POST['corPosicaoCompareceu'];
	
	$comando = "CALL inserirClienteCompareceu('$nomePosicaoCompareceu', '$corPosicaoCompareceu')";
	
	$inserirPosicaoCompareceu = mysqli_query($con, $comando);
	if ($inserirPosicaoCompareceu == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Situação Contratual
if(isset($_POST['adicionarSituacaoContratual']))	{
	$nomeSituacaoContratual = $_POST['nomeSituacaoContratual'];
	$corSituacaoContratual = $_POST['corSituacaoContratual'];
	
	$comando = "CALL inserirSituacaoContratual('$nomeSituacaoContratual', '$corSituacaoContratual')";
	
	$inserirSituacaoContratual = mysqli_query($con, $comando);
	if ($inserirSituacaoContratual == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}
	
//Adicionar Tipo Cliente
if(isset($_POST['adicionarTipoCliente']))	{
	$tipoCliente = $_POST['tipoCliente'];
	
	$comando = "CALL inserirTipoCliente('$tipoCliente')";
	
	$inserirTipoCliente = mysqli_query($con, $comando);
	if ($inserirTipoCliente == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Sexo
if(isset($_POST['adicionarSexo']))	{
	$sexo = $_POST['sexo'];
	
	$comando = "CALL inserirSexo('$sexo')";
	
	$inserirSexo = mysqli_query($con, $comando);
	if ($inserirSexo == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Estado Civil
if(isset($_POST['adicionarEstadoCivil']))	{
	$estadoCivil = $_POST['estadoCivil'];
	
	$comando = "CALL inserirEstadoCivil('$estadoCivil')";
	
	$inserirEstadoCivil = mysqli_query($con, $comando);
	if ($inserirEstadoCivil == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Tipo Logradouro
if(isset($_POST['adicionarTipoLogradouro']))	{
	$tipoLogradouro = $_POST['tipoLogradouro'];
	
	$comando = "CALL inserirTipoLogradouro('$tipoLogradouro')";
	
	$inserirTipoLogradouro = mysqli_query($con, $comando);
	if ($inserirTipoLogradouro == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Tipo Telefone
if(isset($_POST['adicionarTipoTelefone']))	{
	$tipoTelefone = $_POST['tipoTelefone'];
	
	$comando = "CALL inserirTipoTelefone('$tipoTelefone')";
	
	$inserirTipoTelefone = mysqli_query($con, $comando);
	if ($inserirTipoTelefone == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Fórum
if(isset($_POST['adicionarForum']))	{
	$forum = $_POST['forum'];
	
	$comando = "CALL inserirForum('$forum')";
	
	$inserirForum = mysqli_query($con, $comando);
	if ($inserirForum == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Tipo Ação Judicial
if(isset($_POST['adicionarTipoAcaoJudicial']))	{
	$tipoAcaoJudicial = $_POST['tipoAcaoJudicial'];
	
	$comando = "CALL inserirTipoAcaoJudicial('$tipoAcaoJudicial')";
	
	$inserirTipoAcaoJudicial = mysqli_query($con, $comando);
	if ($inserirTipoAcaoJudicial == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Rito Processual
if(isset($_POST['adicionarRitoProcessual']))	{
	$ritoProcessual = $_POST['ritoProcessual'];
	
	$comando = "CALL inserirRitoProcessual('$ritoProcessual')";
	
	$inserirRitoProcessual = mysqli_query($con, $comando);
	if ($inserirRitoProcessual == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Fase Processual
if(isset($_POST['adicionarFaseProcessual']))	{
	$faseProcessual = $_POST['faseProcessual'];
	
	$comando = "CALL inserirFaseProcessual('$faseProcessual')";
	
	$inserirFaseProcessual = mysqli_query($con, $comando);
	if ($inserirFaseProcessual == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Status Processual
if(isset($_POST['adicionarStatusProcessual']))	{
	$statusProcessual = $_POST['statusProcessual'];
	
	$comando = "CALL inserirStatusProcessual('$statusProcessual')";
	
	$inserirStatusProcessual = mysqli_query($con, $comando);
	if ($inserirStatusProcessual == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Decisão
if(isset($_POST['adicionarDecisao']))	{
	$decisao = $_POST['decisao'];
	
	$comando = "CALL inserirDecisao('$decisao')";
	
	$inserirDecisao = mysqli_query($con, $comando);
	if ($inserirDecisao == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Posição Cliente
if(isset($_POST['adicionarPosicaoCliente']))	{
	$posicaoCliente = $_POST['posicaoCliente'];
	
	$comando = "CALL inserirPosicaoCliente('$posicaoCliente')";
	
	$inserirPosicaoCliente = mysqli_query($con, $comando);
	if ($inserirPosicaoCliente == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Posição Contrário
if(isset($_POST['adicionarPosicaoContrario']))	{
	$posicaoContrario = $_POST['posicaoContrario'];
	
	$comando = "CALL inserirPosicaoContrario('$posicaoContrario')";
	
	$inserirPosicaoContrario = mysqli_query($con, $comando);
	if ($inserirPosicaoContrario == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Posição Advogado
if(isset($_POST['adicionarPosicaoAdvogado']))	{
	$posicaoAdvogado = $_POST['posicaoAdvogado'];
	
	$comando = "CALL inserirPosicaoAdvogado('$posicaoAdvogado')";
	
	$inserirPosicaoAdvogado = mysqli_query($con, $comando);
	if ($inserirPosicaoAdvogado == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Tipo Acompanhamento
if(isset($_POST['adicionarTipoAcompanhamento']))	{
	$tipoAcompanhamento = $_POST['tipoAcompanhamento'];
	
	$comando = "CALL inserirTipoAcompanhamento('$tipoAcompanhamento')";
	
	$inserirTipoAcompanhamento = mysqli_query($con, $comando);
	if ($inserirTipoAcompanhamento == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Advogado Patrono
if(isset($_POST['adicionarAdvogadoPatrono']))	{
	$advogadoPatrono = $_POST['advogadoPatrono'];
	
	$comando = "CALL inserirAdvogadoPatrono('$advogadoPatrono')";
	
	$inserirAdvogadoPatrono = mysqli_query($con, $comando);
	if ($inserirAdvogadoPatrono == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Tipo Audiência
if(isset($_POST['adicionarTipoAudiencia']))	{
	$tipoAudiencia = $_POST['tipoAudiencia'];
	
	$comando = "CALL inserirTipoAudiencia('$tipoAudiencia')";
	
	$inserirTipoAudiencia = mysqli_query($con, $comando);
	if ($inserirTipoAudiencia == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}

//Adicionar Advogado Designado
if(isset($_POST['adicionarAdvogadoDesignado']))	{
	$advogadoDesignado = $_POST['advogadoDesignado'];
	
	$comando = "CALL inserirAdvogadoDesignado('$advogadoDesignado')";
	
	$inserirAdvogadoDesignado = mysqli_query($con, $comando);
	if ($inserirAdvogadoDesignado == false){
		echo'
		<br>
		<div class="alert alert-danger" role=alert">Ocorreu um erro ao cadastrar. Tente novamente.</div>
		';
	}
	else{
		echo '
		<script>
			alert("Dados cadastrados com sucesso!");
		</script>';
	}
}



?>