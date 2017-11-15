<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2017 <a href="#">Legal Task Manager</a>. </div>
      </div>
    </div>
  </div>
</div>

<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/base.js"></script> 


<?php if(!isset($_GET['acao'])){
	echo '<script src="js/jquery.js"></script>';
	echo '<script src="js/bootstrap.js"></script>';
	echo '<script src="js/moment.js"></script>';
}
else if (isset($_GET['acao'])) {
	$acao = $_GET['acao'];
	if (($acao == "boasvindas")||($acao == "visualizacliente")||($acao == "visualizaaudiencia")||($acao == "sempermissao")) {
		echo '<script src="js/jquery.js"></script>';
		echo '<script src="js/bootstrap.js"></script>';
		echo '<script src="js/moment.js"></script>';
	}
	else if($acao == 'adicionacliente'){
		echo '<script src="js/jquery.js"></script>';
		echo '<script src="js/bootstrap.js"></script>';
		echo '<script src="js/moment.js"></script>';
		echo '<script src="js/bootstrap-datetimepicker.js"></script>';
		echo '<script src="js/jquery.mask.js"></script>';
		echo '<script src="js/standalone/selectize.js"></script>';
		echo '<script src="js/locastyle.js"></script>';
		?>
		<script>
			$('.inputdinheiro').mask('000.000.000,00', {reverse: true});
			$('.inputdata').mask('00/00/0000', {reverse: true});
			$('.inputtelefone').mask('0.0000-0000', {reverse: true});
			$('.inputcep').mask('00000-000', {reverse: true});
			$('.inputcpf').mask('000.000.000-00', {reverse: true});
			
			//Datetime Picker
			$(function(){
				$('#datepicker-nascimento').datetimepicker({
					viewMode: 'years',
					format: 'DD/MM/YYYY'
				});	
			});
			
			//Tipo Cliente
			$('#tipo_cliente').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
						field: 'nomeTipoCliente',
						direction: 'asc'
					},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codTipoCliente',
				labelField: 'nomeTipoCliente',
				searchField: 'nomeTipoCliente',
				options: [
					<?php foreach($tipos_clientes as $tipo_cliente): ?>
					{
						codTipoCliente: '<?php echo $tipo_cliente["cod_tipo_cliente"] ?>',
						nomeTipoCliente: '<?php echo $tipo_cliente["nome_tipo_cliente"] ?>',
					},
					<?php endforeach; ?>
				],
			});
			
			//Sexo
			$('#sexo').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeSexo',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codSexo',
				labelField: 'nomeSexo',
				searchField: 'nomeSexo',
				options: [
					<?php foreach($sexos as $sexo): ?>
					{
						codSexo: '<?php echo $sexo["cod_sexo"] ?>',
						nomeSexo: '<?php echo $sexo["nome_sexo"] ?>',
					},
					<?php endforeach; ?>
				],
			});
			
			//Estado Civil
			$('#estado_civil').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeEstadoCivil',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codEstadoCivil',
				labelField: 'nomeEstadoCivil',
				searchField: 'nomeEstadoCivil',
				options: [
					<?php foreach($estados_civil as $estado_civil): ?>
					{
						codEstadoCivil: '<?php echo $estado_civil["cod_estado_civil"] ?>',
						nomeEstadoCivil: '<?php echo $estado_civil["nome_estado_civil"] ?>',
					},
					<?php endforeach; ?>
				],
			});
			
			//Tipo Logradouro
			$('#tipo_logradouro').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeTipoLogradouro',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codTipoLogradouro',
				labelField: 'nomeTipoLogradouro',
				searchField: 'nomeTipoLogradouro',
				options: [
					<?php foreach($tipos_logradouros as $tipo_logradouro): ?>
					{
						codTipoLogradouro: '<?php echo $tipo_logradouro["cod_tipo_logradouro"] ?>',
						nomeTipoLogradouro: '<?php echo $tipo_logradouro["nome_tipo_logradouro"] ?>',
					},
					<?php endforeach; ?>
				],
			});
			
			//Tipo Telefone
			<?php for($i=1; $i<5; $i++){ ?>
			
				$('#tipo_<?php echo $i; ?>_telefone').selectize({
					maxItems: 1,
					placeholder: 'Selecione...',
					sortField: {
						field: 'nomeTipoTelefone',
						direction: 'asc'
					},
					closeAfterSelect:'true',
					selectOnTab: 'true',
					valueField: 'codTipoTelefone',
					labelField: 'nomeTipoTelefone',
					searchField: 'nomeTipoTelefone',
					options: [
						<?php foreach($tipos_telefones as $tipo_telefone): ?>
						{
							codTipoTelefone: '<?php echo $tipo_telefone["cod_tipo_telefone"] ?>',
							nomeTipoTelefone: '<?php echo $tipo_telefone["nome_tipo_telefone"] ?>',
						},
						<?php endforeach; ?>
					],
				});
			
			<?php } ?>

			
		</script>
	<?php
	}
	
	else if($acao == "adicionaaudiencia"){
		echo '<script src="js/jquery.js"></script>';
		echo '<script src="js/bootstrap.js"></script>';
		echo '<script src="js/moment.js"></script>';
		echo '<script src="js/locastyle.js"></script>';
	}
	
	else if($acao == 'adicionaprocesso'){
		echo '<script src="js/jquery.js"></script>';
		echo '<script src="js/jquery.mask.js"></script>';
		echo '<script src="js/bootstrap.js"></script>';
		echo '<script src="js/moment.js"></script>';
		echo '<script src="js/bootstrap-datetimepicker.js"></script>';
		echo '<script src="js/standalone/selectize.js"></script>';
		?>
		<script>
			
			$('.inputdinheiro').mask('000.000.000,00', {reverse: true});
			$('.inputdata').mask('00/00/0000', {reverse: true});
			
			//Datetime Picker
			$(function(){
				$('#datepicker-distribuicao').datetimepicker({
					format: 'DD/MM/YYYY',
					focusOnShow: true
				});	
				$('#datepicker-admissao').datetimepicker({
					format: 'DD/MM/YYYY',
					focusOnShow: true
				});	
				$('#datepicker-demissao').datetimepicker({
					format: 'DD/MM/YYYY',
					focusOnShow: true
				});	
			});
			
			//Fóruns
			$('#forum_processo').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: 'asc',
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codForum',
				labelField: 'nomeForum',
				searchField: 'nomeForum',
				options: [
					<?php foreach($foruns as $forum): ?>
					{
						codForum: '<?php echo $forum["cod_forum_processo"] ?>',
						nomeForum: '<?php echo $forum["nome_forum_processo"] ?>',
					},
					<?php endforeach; ?>
				],
			});		

			//Tipo Ação Judicial
			$('#tipo_acao_judicial').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeTipoAcaoJudicial',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codTipoAcaoJudicial',
				labelField: 'nomeTipoAcaoJudicial',
				searchField: 'nomeTipoAcaoJudicial',
				options: [
					<?php foreach($tipo_acoes_judiciais as $tipo_acao_judicial): ?>
					{
						codTipoAcaoJudicial: '<?php echo $tipo_acao_judicial["cod_tipo_acao_judicial"] ?>',
						nomeTipoAcaoJudicial: '<?php echo $tipo_acao_judicial["nome_tipo_acao_judicial"] ?>',
					},
					<?php endforeach; ?>
				],
			});	

			//Rito Processual
			$('#rito_processual').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeRitoProcessual',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codRitoProcessual',
				labelField: 'nomeRitoProcessual',
				searchField: 'nomeRitoProcessual',
				options: [
					<?php foreach($ritos_processuais as $rito_processual): ?>
					{
						codRitoProcessual: '<?php echo $rito_processual["cod_rito_processual"] ?>',
						nomeRitoProcessual: '<?php echo $rito_processual["nome_rito_processual"] ?>',
					},
					<?php endforeach; ?>
				],
			});

			//Fase Processual
			$('#fase_processual').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeFaseProcessual',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codFaseProcessual',
				labelField: 'nomeFaseProcessual',
				searchField: 'nomeFaseProcessual',
				options: [
					<?php foreach($fases_processuais as $fase_processual): ?>
					{
						codFaseProcessual: '<?php echo $fase_processual["cod_fase_processual"] ?>',
						nomeFaseProcessual: '<?php echo $fase_processual["nome_fase_processual"] ?>',
					},
					<?php endforeach; ?>
				],
			});

			//Status Processual
			$('#status_processual').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeStatusProcessual',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codStatusProcessual',
				labelField: 'nomeStatusProcessual',
				searchField: 'nomeStatusProcessual',
				options: [
					<?php foreach($status_processuais as $status_processual): ?>
					{
						codStatusProcessual: '<?php echo $status_processual["cod_status_processual"] ?>',
						nomeStatusProcessual: '<?php echo $status_processual["nome_status_processual"] ?>',
					},
					<?php endforeach; ?>
				],
			});

			//Decisão
			$('#decisao').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeDecisao',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codDecisao',
				labelField: 'nomeDecisao',
				searchField: 'nomeDecisao',
				options: [
					<?php foreach($decisoes as $decisao): ?>
					{
						codDecisao: '<?php echo $decisao["cod_decisao"] ?>',
						nomeDecisao: '<?php echo $decisao["nome_decisao"] ?>',
					},
					<?php endforeach; ?>
				],
			});

			//Cliente
			$('#cliente_processo').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeCliente',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codCliente',
				labelField: 'nomeCliente',
				searchField: 'nomeCliente',
				options: [
					<?php foreach($clientes as $cliente): ?>
					{
						codCliente: '<?php echo $cliente["cod_cliente"] ?>',
						nomeCliente: '<?php echo $cliente["nome_cliente"] ?>',
					},
					<?php endforeach; ?>
				],
			});

			//Posição Cliente
			$('#posicao_cliente').selectize({
				maxItems: 1,
				create: 'true',
				closeAfterSelect:'true',
				sortField: {
					field: 'nomePosicaoCliente',
					direction: 'asc'
				},
				selectOnTab: 'true',
				placeholder: 'Selecione...',
				valueField: 'codPosicaoCliente',
				labelField: 'nomePosicaoCliente',
				searchField: 'nomePosicaoCliente',
				options: [
					<?php foreach($posicoes_clientes as $posicao_cliente): ?>
					{
						codPosicaoCliente: '<?php echo $posicao_cliente["cod_posicao_cliente"] ?>',
						nomePosicaoCliente: '<?php echo $posicao_cliente["nome_posicao_cliente"] ?>',
					},
					<?php endforeach; ?>
				],
			});		

			//Contrário
			<?php for($i=1;$i<5;$i++){ ?>
				//Adicionar Contrário
				$('#contrario<?php echo $i ?>_processo').selectize({
					maxItems: 1,
					placeholder: 'Selecione...',
					create: 'true',
					sortField: {
						field: 'nomePosicaoContrario',
						direction: 'asc'
					},
					closeAfterSelect:'true',
					selectOnTab: 'true',
					valueField: 'codContrario',
					labelField: 'nomeContrario',
					searchField: 'nomeContrario',
					options: [
						<?php foreach($contrarios as $contrario): ?>
						{
							codContrario: '<?php echo $contrario["cod_contrario_processo"] ?>',
							nomeContrario: '<?php echo $contrario["nome_contrario_processo"] ?>',
						},
						<?php endforeach; ?>
					]
				})
			<?php } ?>

			//Posição Contrário
			<?php for($i=1;$i<5;$i++){ ?>
				//Posição Contrário
				$('#posicao_contrario<?php echo $i; ?>').selectize({
					maxItems: 1,
					placeholder: 'Selecione...',
					closeAfterSelect:'true',
					sortField: 'asc',
					selectOnTab: 'true',
					valueField: 'codPosicaoContrario',
					labelField: 'nomePosicaoContrario',
					searchField: 'nomePosicaoContrario',
					options: [
						<?php foreach($posicoesContrarios as $posicaoContrario): ?>
						{
							codPosicaoContrario: '<?php echo $posicaoContrario["cod_posicao_contrario"] ?>',
							nomePosicaoContrario: '<?php echo $posicaoContrario["nome_posicao_contrario"] ?>',
						},
						<?php endforeach; ?>
					]
				});
			<?php }; ?>

			//Advogado Patrono
			$('#advogado_patrono').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeAdvogadoPatrono',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codAdvogadoPatrono',
				labelField: 'nomeAdvogadoPatrono',
				searchField: 'nomeAdvogadoPatrono',
				options: [
					<?php foreach($advogados_patronos as $advogado_patrono): ?>
					{
						codAdvogadoPatrono: '<?php echo $advogado_patrono["cod_advogado_patrono"] ?>',
						nomeAdvogadoPatrono: '<?php echo $advogado_patrono["nome_advogado_patrono"] ?>',
					},
					<?php endforeach; ?>
				],
			});	

			//Posição Advogado
			$('#posicao_advogado').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomePosicaoAdvogado',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				sortField: 'asc',
				selectOnTab: 'true',
				valueField: 'codPosicaoAdvogado',
				labelField: 'nomePosicaoAdvogado',
				searchField: 'nomePosicaoAdvogado',
				options: [
					<?php foreach($posicoes_advogados as $posicao_advogado): ?>
					{
						codPosicaoAdvogado: '<?php echo $posicao_advogado["cod_posicao_advogado"] ?>',
						nomePosicaoAdvogado: '<?php echo $posicao_advogado["nome_posicao_advogado"] ?>',
					},
					<?php endforeach; ?>
				],
			});	

			//Tipo Acompanhamento
			$('#tipo_acompanhamento').selectize({
				maxItems: 1,
				placeholder: 'Selecione...',
				sortField: {
					field: 'nomeTipoAcompanhamento',
					direction: 'asc'
				},
				closeAfterSelect:'true',
				selectOnTab: 'true',
				valueField: 'codTipoAcompanhamento',
				labelField: 'nomeTipoAcompanhamento',
				searchField: 'nomeTipoAcompanhamento',
				options: [
					<?php foreach($tipos_acompanhamentos as $tipo_acompanhamento): ?>
					{
						codTipoAcompanhamento: '<?php echo $tipo_acompanhamento["cod_tipo_acompanhamento"] ?>',
						nomeTipoAcompanhamento: '<?php echo $tipo_acompanhamento["nome_tipo_acompanhamento"] ?>',
					},
					<?php endforeach; ?>
				],
			});

			//Modal Inserir Contrário
			$("#adicionaContrario").click(function(){
				$('#modalAdicionaContrario').modal('show');

			});

		</script>
		}
	<?php	
	}
	else if($acao == "gerenciamento"){
		echo '<script src="js/jquery.js"></script>';
		echo '<script src="js/bootstrap.js"></script>';
		echo '<script src="js/moment.js"></script>';
		echo '<script src="js/locastyle.js"></script>';
		echo '<script src="js/gerenciamento.js"></script>';
		echo '<script src="js/bootstrap-colorpicker.js"></script>';
		
	}
}
?>