<?php

$con = mysqli_connect("localhost","root","","franco_adv");
mysqli_set_charset($con, 'utf8');

$conex = new PDO('mysql:host=localhost;dbname=franco_adv;charset=utf8', 'root', '');

//teste de conexão
/* if(!($con)){
	echo 'Erro na conexão';
} */

//Mostra Fórum
$buscaForum = "SELECT * FROM forum";
$exibeForum = $conex->prepare($buscaForum);
$exibeForum->execute();
$foruns = $exibeForum->fetchAll();

//Mostra Tipo Ação Judicial
$buscaTipoAcaoJudicial = "SELECT * FROM tipo_acao_judicial";
$exibeTipoAcaoJudicial = $conex->prepare($buscaTipoAcaoJudicial);
$exibeTipoAcaoJudicial->execute();
$tipo_acoes_judiciais = $exibeTipoAcaoJudicial->fetchAll();

//Mostra Rito Processual
$buscaRitoProcessual = "SELECT * FROM rito_processual";
$exibeRitoProcessual = $conex->prepare($buscaRitoProcessual);
$exibeRitoProcessual->execute();
$ritos_processuais = $exibeRitoProcessual->fetchAll();

//Mostra Fase Processual
$buscaFaseProcessual = "SELECT * FROM fase_processual";
$exibeFaseProcessual = $conex->prepare($buscaFaseProcessual);
$exibeFaseProcessual->execute();
$fases_processuais = $exibeFaseProcessual->fetchAll();

//Mostra Status Processual
$buscaStatusProcessual = "SELECT * FROM status_processual";
$exibeStatusProcessual = $conex->prepare($buscaStatusProcessual);
$exibeStatusProcessual->execute();
$status_processuais = $exibeStatusProcessual->fetchAll();

//Mostra Decisão
$buscaDecisao = "SELECT * FROM decisao";
$exibeDecisao = $conex->prepare($buscaDecisao);
$exibeDecisao->execute();
$decisoes = $exibeDecisao->fetchAll();

//Mostra Cliente
$buscaCliente = "SELECT * FROM cliente";
$exibeCliente = $conex->prepare($buscaCliente);
$exibeCliente->execute();
$clientes = $exibeCliente->fetchAll();

//Mostra Posição Cliente
$buscaPosicaoCliente = "SELECT * FROM posicao_cliente";
$exibePosicaoCliente = $conex->prepare($buscaPosicaoCliente);
$exibePosicaoCliente->execute();
$posicoes_clientes = $exibePosicaoCliente->fetchAll();

//Mostra Posição Contrário
$buscaPosicaoContrario = "SELECT * FROM posicao_contrario";
$exibePosicaoContrario = $conex->prepare($buscaPosicaoContrario);
$exibePosicaoContrario->execute();
$posicoesContrarios = $exibePosicaoContrario->fetchAll();

//Mostra Posição Advogado
$buscaPosicaoAdvogado = "SELECT * FROM posicao_advogado";
$exibePosicaoAdvogado = $conex->prepare($buscaPosicaoAdvogado);
$exibePosicaoAdvogado->execute();
$posicoes_advogados = $exibePosicaoAdvogado->fetchAll();

//Mostra Advogado Patrono
$buscaAdvogadoPatrono = "SELECT * FROM advogado_patrono";
$exibeAdvogadoPatrono = $conex->prepare($buscaAdvogadoPatrono);
$exibeAdvogadoPatrono->execute();
$advogados_patronos = $exibeAdvogadoPatrono->fetchAll();

//Mostra Tipo Acompanhamento
$buscaTipoAcompanhamento = "SELECT * FROM tipo_acompanhamento";
$exibeTipoAcompanhamento = $conex->prepare($buscaTipoAcompanhamento);
$exibeTipoAcompanhamento->execute();
$tipos_acompanhamentos = $exibeTipoAcompanhamento->fetchAll();

//Inserir Contrário


?>

<div id="modalAdicionaContrario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Adicionar Contrário</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="nomeContrario" class="col-sm-4 control-label">Nome do Contrário: </label>
				<input class="col-sm-7" type="text" name="nomeContrario" class="form-control" id="nomeContrario" 
				placeholder="Nome do Contrário...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarContrario" id="adicionarContrario" value="Adicionar" >
		  </div>
	  </form>
    </div>
  </div>
</div>

<?php

//Inserir Contrário
if(isset($_POST['adicionarContrario'])){
	$nome_contrario_processo = $_POST['nomeContrario'];
	$inserirContrario = "INSERT INTO contrario_processo(nome_contrario_processo) value('$nome_contrario_processo')";
	$executarInserirContrario = $conex->prepare($inserirContrario);
	$executarInserirContrario->execute();
}

//Mostra Contrário
$buscaContrario = "SELECT * FROM contrario_processo";
$exibeContrario = $conex->prepare($buscaContrario);
$exibeContrario->execute();
$contrarios = $exibeContrario->fetchAll();

if(isset($_POST['btn_cadastrar_processo'])){
	$forum_processo = $_POST['forum_processo'];
	$vara_processo = $_POST['vara_processo'];
	$numero_processo = $_POST['numero_processo'];
	$processo_numero_antigo = $_POST['processo_numero_antigo'];
	$tipo_acao_judicial = $_POST['tipo_acao_judicial'];
	$rito_processual = $_POST['rito_processual'];
	$fase_processual = $_POST['fase_processual'];
	$status_processual = $_POST['status_processual'];
	$decisao = $_POST['decisao'];
	$cliente_processo = $_POST['cliente_processo'];
	$posicao_cliente = $_POST['posicao_cliente'];
	$contrario1_processo = $_POST['contrario1_processo'];
	$posicao_contrario1 = $_POST['posicao_contrario1'];
	$contrario2_processo = $_POST['contrario2_processo'];
	$posicao_contrario2 = $_POST['posicao_contrario2'];
	$contrario3_processo = $_POST['contrario3_processo'];
	$posicao_contrario3 = $_POST['posicao_contrario3'];
	$contrario4_processo = $_POST['contrario1_processo'];
	$posicao_contrario4 = $_POST['posicao_contrario4'];
	$advogado_patrono = $_POST['advogado_patrono'];
	$posicao_advogado = $_POST['posicao_advogado'];
	$funcao_contrato = $_POST['funcao_contrato'];
	$ultimosalario_contrato = $_POST['ultimosalario_contrato'];
	$localdetrabalho_contrato = $_POST['localdetrabalho_contrato'];
	$admissao_contrato = $_POST['admissao_contrato'];
	$demissao_contrato = $_POST['demissao_contrato'];
	
	if($contrario4_processo > 0){
		$comandoInserirProcesso = "CALL inserirProcesso4($forum_processo, $vara_processo, '$numero_processo', '$processo_numero_antigo', $tipo_acao_judicial, $rito_processual, $fase_processual, $status_processual, $decisao, $cliente_processo, $posicao_cliente, $contrario1_processo, $posicao_contrario1, $contrario2_processo, $posicao_contrario2, $contrario3_processo, $posicao_contrario3, $contrario4_processo, $posicao_contrario4, $advogado_patrono, $posicao_advogado, '$funcao_contrato', '$ultimosalario_contrato', '$localdetrabalho_contrato', '$admissao_contrato', '$demissao_contrato')";
	}
	else if($contrario3_processo > 0){
		$comandoInserirProcesso = "CALL inserirProcesso3($forum_processo, $vara_processo, '$numero_processo', '$processo_numero_antigo', $tipo_acao_judicial, $rito_processual, $fase_processual, $status_processual, $decisao, $cliente_processo, $posicao_cliente, $contrario1_processo, $posicao_contrario1, $contrario2_processo, $posicao_contrario2, $contrario3_processo, $posicao_contrario3, $advogado_patrono, $posicao_advogado, '$funcao_contrato', '$ultimosalario_contrato', '$localdetrabalho_contrato', '$admissao_contrato', '$demissao_contrato')";
	}
	else if($contrario2_processo > 0){
		$comandoInserirProcesso = "CALL inserirProcesso2($forum_processo, $vara_processo, '$numero_processo', '$processo_numero_antigo', $tipo_acao_judicial, $rito_processual, $fase_processual, $status_processual, $decisao, $cliente_processo, $posicao_cliente, $contrario1_processo, $posicao_contrario1, $contrario2_processo, $posicao_contrario2, $advogado_patrono, $posicao_advogado, '$funcao_contrato', '$ultimosalario_contrato', '$localdetrabalho_contrato', '$admissao_contrato', '$demissao_contrato')";
	}
	else if($contrario1_processo > 0){
		$comandoInserirProcesso = "CALL inserirProcesso1($forum_processo, $vara_processo, '$numero_processo', '$processo_numero_antigo', $tipo_acao_judicial, $rito_processual, $fase_processual, $status_processual, $decisao, $cliente_processo, $posicao_cliente, $contrario1_processo, $posicao_contrario1, $advogado_patrono, $posicao_advogado, '$funcao_contrato', '$ultimosalario_contrato', '$localdetrabalho_contrato', '$admissao_contrato', '$demissao_contrato')";
	}
	
	$inserirProcesso = $conex->prepare($comandoInserirProcesso);
	$inserirProcesso->execute();
	if ($inserirProcesso){
		echo '
		<script>
			alert("Processo cadastrado com sucesso!");
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


