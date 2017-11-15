<style>
	#acompanhamentoProcesso	{
		padding-right: 100px;
	}
</style>

<?php include('pages/processos/confirmacoesprocessos.php');?>

<script language="JavaScript">

	function validaProcesso(){
		
		//Valida forum
		pro = document.formulario_adiciona_processo;
		if(pro.forum_processo.value <= 0){
			alert("Selecione o Fórum!");
			pro.forum_processo.focus();
			return false;
		}
		
		//Valida número da vara
		if(pro.vara_processo.value == ""){
			alert("Digite o número da vara!");
			pro.vara_processo.focus();
			return false;
		}
		
		//Valida número do proceso
		if(pro.numero_processo.value == ""){
			alert("Digite o número do processo!");
			pro.numero_processo.focus();
			return false;
		}
		
		//Valida data de distribuição
		erro=0;
		hoje = new Date();
		anoAtual = hoje.getFullYear();
		barras = pro.data_distribuicao_processo.value.split("/");
		if (barras.length == 3){
			dia = barras[0];
			mes = barras[1];
			ano = barras[2];
			resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && 
			(!isNaN(ano) && (ano.length == 4) && (ano <= anoAtual && ano >= 2010));	
			if (!resultado) {
				alert("Formato de data inválido!");
				pro.data_distribuicao_processo.focus();
				return false;
			}
			
		} 
		else {
			alert("Formato de data inválido!");
			pro.data_distribuicao_processo.focus();
			return false;
		}
		
		//Valida processo antigo
		if(pro.processo_numero_antigo.value == ""){
			alert("Digite o número do antigo processo!");
			pro.processo_numero_antigo.focus();
			return false;
		}
		
		//Valida tipo de ação judicial
		if(pro.tipo_acao_judicial.value <= 0){
			alert("Selecione o tipo de ação judicial!");
			pro.tipo_acao_judicial.focus();
			return false;
		}
		
		//Valida rito
		if(pro.rito_processual.value <= 0){
			alert("Selecione o rito!");
			pro.rito_processual.focus();
			return false;
		}
		
		//Valida fase processo
		if(pro.fase_processual.value <= 0){
			alert("Selecione a fase do processo!");
			pro.fase_processual.focus();
			return false;
		}
		
		//Valida status processo
		if(pro.status_processual.value <= 0){
			alert("Selecione o status do processo!");
			pro.status_processual.focus();
			return false;
		}
		
		//Valida decisao
		if(pro.decisao.value <= 0){
			alert("Selecione a decisão!");
			pro.decisao.focus();
			return false;
		}
		
		//Valida valor da causa
		if(pro.valor_processo.value == ""){
			alert("Digite o valor da causa!");
			return false;
			pro.valor_processo.focus();
		}
		
		
		
		
		//Valida partes envolvidas
		//Valida cliente
		if(pro.cliente_processo.value <= 0){
			alert("Selecione o nome do cliente!");
			pro.cliente_processo.focus();
			return false;
		}
		
		//Valida posicao_cliente
		if(pro.posicao_cliente.value <= 0){
			alert("Selecione a posição do cliente!");
			pro.posicao_cliente.focus();
			return false;
		}
		
		//Valida contrario
		if(pro.contrario1_processo.value <= 0){
			alert("Selecione o contrário!");
			pro.contrario1_processo.focus();
			return false;
		}
		
		//Valida posicao_contrario
		if(pro.posicao_contrario1.value <= 0){
			alert("Selecione a posição do contrário!");
			pro.posicao_contrario1.focus();
			return false;
		}
		
		
		//Valida Advogado Patrono
		//Valida nome advogado
		if(pro.advogado_patrono.value <= 0){
			alert("Selecione o advogado patrono!");
			pro.advogado_patrono.focus();
			return false;
		}
		
		//Valida posição do advogado
		if(pro.posicao_advogado.value <= 0){
			alert("Selecione a posição do advogado!");
			pro.posicao_advogado.focus();
			return false;
		}
		
		
		//Valida Contrato de trablaho
		//Valida função
		if(pro.funcao_contrato.value == ""){
			alert("Digite a função!");
			pro.funcao_contrato.focus();
			return false;
		}
		
		//Valida ultimo salario
		if(pro.ultimosalario_contrato.value <= 0){
			alert("Digite o último salário!");
			pro.ultimosalario_contrato.focus();
			return false;		
		}
		
		//Valida data de admissao
		erro=0;
		hoje = new Date();
		anoAtual = hoje.getFullYear();
		barras = pro.admissao_contrato.value.split("/");
		if (barras.length == 3){
			dia = barras[0];
			mes = barras[1];
			ano = barras[2];
			resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && 
			(!isNaN(ano) && (ano.length == 4) && (ano <= anoAtual && ano >= 1980));	
			if (!resultado) {
				alert("Formato de data inválido!");
				pro.admissao_contrato.focus();
				return false;
			}
			
		} 
		else {
			alert("Formato de data inválido!");
			pro.admissao_contrato.focus();
			return false;
		}		
		
		//Valida Local de trabalho
		if(pro.localdetrabalho_contrato.value == ""){
			alert("Digite o local de trablaho!");
			pro.localdetrabalho_contrato.focus();
			return false;
		}
		
		//Valida data de demissao
		erro=0;
		hoje = new Date();
		anoAtual = hoje.getFullYear();
		barras = pro.demissao_contrato.value.split("/");
		if (barras.length == 3){
			dia = barras[0];
			mes = barras[1];
			ano = barras[2];
			resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && 
			(!isNaN(ano) && (ano.length == 4) && (ano <= anoAtual));	
			if (!resultado) {
				alert("Formato de data inválido!");
				pro.demissao_contrato.focus();
				return false;
			}
			
		} 
		else {
			alert("Formato de data inválido!");
			pro.demissao_contrato.focus();
			return false;
		}
		

</script>

<div class="container">
	<div class="content clearfix">
		<form action="#" method="post" id="formulario_adiciona_processo">
			<h1>Adicionar Processo: </h1>
			<br>
			<div class="form-horizontal">
				<div class="jumbotron">
					<h3>Dados Processuais</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="forum_processo" class="col-xs-10 col-sm-1 text-right">Fórum:</label>
								<select class="col-xs-10 col-sm-3" id="forum_processo" name="forum_processo">
								</select>
								<label for="vara_processo" class="col-xs-10 col-sm-2 text-right">Número da Vara:</label>
								<input class="form-control col-xs-10 col-sm-1" id="vara_processo" name="vara_processo" placeholder="Nº Vara..." type="text" data-mask="00">
								<label for="numero_processo" class="col-xs-10 col-sm-2 text-right">Nº Processo:</label>
								<input class="form-control col-xs-10 col-sm-3" id="numero_processo" name="numero_processo" placeholder="Número do Processo..." type="text" data-mask="0000000-00.0000.0.00.0000">
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="processo_numero_antigo" class="col-xs-10 col-sm-1 text-right">Processo Antigo:</label>
								<input class="form-control col-xs-10 col-sm-3" id="processo_numero_antigo" name="processo_numero_antigo" placeholder="Nº Processo Antigo..." type="text" data-mask="0000000-00.0000.0.00.0000">
								<label for="tipo_acao_judicial" class="col-xs-10 col-sm-2 text-right">Tipo de Ação Judicial:</label>
								<select class="col-xs-10 col-sm-3" id="tipo_acao_judicial" name="tipo_acao_judicial">
								</select>
								<label for="rito_processual" class="col-xs-10 col-sm-1 text-right">Rito:</label>
								<select class="col-xs-10 col-sm-2" id="rito_processual" name="rito_processual">
								</select>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="fase_processual" class="col-xs-10 col-sm-1 text-right">Fase Processo:</label>
								<select class="col-xs-10 col-sm-3" id="fase_processual" name="fase_processual">
								</select>
								<label for="status_processo" class="col-xs-10 col-sm-2 text-right">Status Processo:</label>
								<select class="col-xs-10 col-sm-2" id="status_processual" name="status_processual">
								</select>
								<label for="decisao" class="col-xs-10 col-sm-1 text-right">Decisão:</label>
								<select class="col-xs-10 col-sm-3" id="decisao" name="decisao">
								</select>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="valor_processo" class="col-xs-10 col-sm-2 text-right">Valor da Causa:</label>
								<input type="text" class="form-control col-xs-10 col-sm-2 dinheiro inputdinheiro" id="valor_processo" name="valor_processo" placeholder="Valor da Causa...">
								<label for="data_distribuicao_processo" class="col-xs-10 col-sm-2 text-right">Data distribuição:</label>
								<div class="input-group date col-xs-10 col-sm-2" id="datepicker-distribuicao">	
									<input class="form-control inputdata" id="data_distribuicao_processo" name="data_distribuicao_processo" placeholder="Data de Distribuição..." type="text">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>	
							</div>
						</div>
					</div>
					<hr>
					<h3>Partes envolvidas</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="cliente_processo" class="col-xs-10 col-sm-1 text-right">Cliente:</label>
								<select class="col-xs-10 col-sm-4" id="cliente_processo" name="cliente_processo">
								</select>
								<label for="posicao_cliente" class="col-xs-10 col-sm-2 text-right">Posição do Cliente:</label>
								<select class="col-xs-10 col-sm-4" id="posicao_cliente" name="posicao_cliente">
								</select>
							</div>
						</div>
					</div>
					<div class='field'>
						<div class="collapse-in" id='grupocontrario1'>
							<div class='row'>
								<div class='form-group'>
									<label for='contrario1-processo' class='col-xs-10 col-sm-1 text-right'>Contrário:</label>
									<div class="col-xs-10 col-sm-4">
										<select class='col-xs-10 col-sm-10' id='contrario1_processo' name='contrario1_processo'>
										</select>
										<button type="button" id="adicionaContrario" class="btn">
										  <span class="glyphicon glyphicon-plus adiciona-contrario"></span>
										</button>
									</div>
									<label for='posicao_contrario1' class='col-xs-10 col-sm-2 text-right'>Posição do Contrário:</label>
									<select class='col-xs-10 col-sm-3' id='posicao_contrario1' name='posicao_contrario1'>
									</select>
									<button type='button' class='btn btn-xs btn-link col-xs-10 col-sm-1 ' id='adicionaContrario1' data-toggle='collapse' data-target='#grupocontrario2' aria-expanded='true' aria-controls='grupocontrario2'>+ contrário</button>
								</div>
							</div>
						</div>
						
						<?php
					$maxContrarios = 4;
					
					for($i = 2; $i <= $maxContrarios; $i++){
						echo "	<div class='collapse' id='grupocontrario" . $i . "'>
										<div class='row'>
											<div class='form-group'>";
												echo "
												<label for='contrario".$i."-processo' class='col-xs-10 col-sm-1'>Contrário:</label>
												<select class='form-control col-xs-10 col-sm-4' id='contrario".$i."-processo' name='contrario".$i."-processo'>
													<!--colocar código para puxar opções do BD-->
												</select>
												<label for='posicao_contrario".$i."' class='col-xs-10 col-sm-2'>Posição do Contrário:</label>
												<select class='col-xs-10 col-sm-4' id='posicao_contrario".$i."' name='posicao_contrario".$i."' style='width: 25%'>
												</select>";
												if($i < $maxContrarios){
													echo "<button type='button' class='btn btn-xs btn-link col-xs-10 col-sm-1' id='adicionaContrario' data-toggle='collapse' data-target='#grupocontrario". ($i + 1) . "' aria-expanded='false' aria-controls='grupocontrario". ($i + 1) . "'>+ contrário</button>";
													}
												echo"
												</div>
											</div>
										</div>";
					}
					?>
						
					</div>
								
					<hr>
					<h3>Advogado Patrono</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="advogado_patrono" class="col-xs-10 col-sm-2 text-right">Nome Advogado:</label>
								<select class="col-xs-10 col-sm-4" id="advogado_patrono" name="advogado_patrono">
								</select>
								<label for="posicao_advogado" class="col-xs-10 col-sm-2 text-right">Posição do Advogado:</label>
								<select class="col-xs-10 col-sm-4" id="posicao_advogado" name="posicao_advogado">
								</select>
							</div>
						</div>
					</div>
					<hr>
					<h3>Contrato de Trabalho</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="funcao_contrato" class="col-xs-10 col-sm-1 text-right">Função:</label>
								<input class="form-control col-xs-10 col-sm-3" id="funcao_contrato" name="funcao_contrato" placeholder="Função..." type="text">
								<label for="ultimosalario_contrato" class="col-xs-10 col-sm-2 text-right">Último Salário:</label>
								<input class="form-control col-xs-10 col-sm-2" id="ultimosalario_contrato" name="ultimosalario_contrato" placeholder="Último Salário..." type="text">
								<label for="admissao_contrato" class="col-xs-10 col-sm-2 text-right">Data de Admissão:</label>
								<div class="input-group date col-xs-10 col-sm-2" id="datepicker-admissao">
									<input class="form-control col-xs-10 col-sm-2" id="admissao_contrato" name="admissao_contrato" placeholder="Data de Admissão..." data-mask="00/00/0000" type="text">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="localdetrabalho_contrato" class="col-xs-10 col-sm-2 text-right">Local de Trabalho:</label>
								<input class="form-control col-xs-10 col-sm-2" id="localdetrabalho_contrato" name="localdetrabalho_contrato" placeholder="Local de Trabalho..." type="text">
								<label for="meses_contrato" class="col-xs-10 col-sm-2 text-right">Meses trabalhados:</label>
								<input class="form-control col-xs-10 col-sm-2" id="meses_contrato" name="meses_contrato" placeholder="Meses Trabalhados..." type="text" readonly>
								<label for="demissao_contrato" class="col-xs-10 col-sm-2 text-right">Data de Demissão:</label>
								<div class="input-group date col-xs-10 col-sm-2" id="datepicker-demissao">
									<input class="form-control inputdata" id="demissao_contrato" name="demissao_contrato" placeholder="Data de Demissão..." data-mask="00/00/0000" type="text">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
			<div class="login-actions">
				<input value="Cadastrar Processo" class="button btn btn-primary btn-lg" name="btn_cadastrar_processo" id="btn_cadastrar_processo" type="submit">
			</div>
		</form>
	</div>
</div>
<br>
					
					<h3>Acompanhamentos</h3>
					<br>
					<div class="field">
						<div class='row'>
							<div class='form-group'>
								<label for='tipo_acompanhamento' class='col-xs-10 col-sm-3 text-right'>Tipo de Acompanhamento:</label>
								<select class='col-xs-10 col-sm-3' id='tipo_acompanhamento' name='tipo_acompanhamento'>
								</select>
								<label for="data_acompanhamento" class="col-xs-10 col-sm-3 text-right">Data do Acompanhamento:</label>
								<input class="form-control col-xs-10 col-sm-3" id="data_acompanhamento" name="data_acompanhamento" placeholder="Data do Acompanhamento..." data-mask="00/00/0000" type="text">
							</div>
						</div>
						<div class='row'>
							<div class='form-group'>	
								<textarea class='form-control col-xs-10 col-sm-12' id='acompanhamento_processo' name='acompanhamento_processo' rows='5'></textarea>
							</div>
							<div class='form-group'>	
								<button type='button' class='btn btn-primary' id='btn_adiciona_acompanhamento' name='btn_adiciona_acompanhamento'>Salvar Acompanhamento</button>
							</div>
						</div>
					</div>
					<br>
				
