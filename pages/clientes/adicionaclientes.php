<!-- Validações -->
<script language="JavaScript">

	function validaCliente(){
		
		//Valida tipo cliente
		cli = document.formulario_adiciona_cliente;
		if(cli.tipo_cliente.value <= 0){
			alert("Selecione o tipo de cliente!");
			cli.tipo_cliente.focus();
			return false;
		}
		
		//Valida nome cliente
		if(cli.nome_cliente.value == ""){
			alert("Digite o nome do cliente!");
			cli.nome_cliente.focus();
			return false;
		}
		
		//Valida nacionalidade
		if(cli.nacionalidade_cliente.value == ""){
			alert("Digite a nacionalidade do cliente!");
			cli.nacionalidade_cliente.focus();
			return false;
		}
		
		//Valida data de nascimento
		erro=0;
		hoje = new Date();
		anoAtual = hoje.getFullYear();
		barras = cli.data_nascimento_cliente.value.split("/");
		if (barras.length == 3){
			dia = barras[0];
			mes = barras[1];
			ano = barras[2];
			if(ano > anoAtual){
				alert("Impossível o cliente ter nascido no ano que ainda está por vir");
				cli.data_nascimento_cliente.focus();
				return false;
			}
			if(ano > (anoAtual - 18)){
				alert("Cliente precisa ser maior de idade para entrar com processo");
				cli.data_nascimento_cliente.focus();
				return false;
			}
			resultado = (!isNaN(dia) && (dia > 0) && (dia < 32)) && (!isNaN(mes) && (mes > 0) && (mes < 13)) && 
			(!isNaN(ano) && (ano.length == 4) && (ano <= (anoAtual - 18) && ano >= 1930));	
			if (!resultado) {
				alert("Formato de data inválido!");
				cli.data_nascimento_cliente.focus();
				return false;
			}
			
		} 
		else {
			alert("Formato de data inválido!");
			cli.data_nascimento_cliente.focus();
			return false;
		}
		
		//Valida sexo
		if(cli.sexo.value <= 0){
			alert("Selecione o sexo!");
			cli.sexo.focus();
			return false;
		}
		
		//Valida Estado Civil
		if(cli.estado_civil.value <= 0){
			alert("Selecione o estado civil!");
			cli.estado_civil.focus();
			return false;
		}
		
		//Valida Profissão Cliente
		if(cli.profissao_cliente.value == ""){
			alert("Digite a profissão do cliente!");
			cli.profissao_cliente.focus();
			return false;
		}
		
		//Valida Documentos Pessoais
		//Valida CPF
		if(cli.cpf_cliente.value == ""){
			alert("Digite o CPF do cliente!");
			cli.cpf_cliente.focus();
			return false;
		}
		
		//Valida RG
		if(cli.rg_cliente.value == ""){
			alert("Digite o RG do cliente!");
			cli.rg_cliente.focus();
			return false;
		}
		
		//Valida PIS
		if(cli.pis_cliente.value == ""){
			alert("Digite o PIS do cliente!");
			cli.pis_cliente.focus();
			return false;
		}
		
		//Valida CTPS
		if(cli.ctps_cliente.value == ""){
			alert("Digite o CTPS do cliente!");
			cli.ctps_cliente.focus();
			return false;
		}
		
		//Valida Série CTPS
		if(cli.serie_ctps_cliente.value == ""){
			alert("Digite a série da CTPS do cliente!");
			cli.serie_ctps_cliente.focus();
			return false;
		}
		
		//Valida Endereço
		//Valida Tipo Logradouro
		if(cli.tipo_logradouro.value <= 0){
			alert("Digite o tipo de logradouro do cliente!");
			cli.tipo_logradouro.focus();
			return false;
		}
		
		//Valida Nome Logradouro
		if(cli.nome_logradouro.value == ""){
			alert("Digite o nome do logradouro do cliente!");
			cli.nome_logradouro.focus();
			return false;
		}
		
		//Valida Número
		if(cli.numero_logradouro.value == ""){
			alert("Digite o número do logradouro do cliente!");
			cli.numero_logradouro.focus();
			return false;
		}
		
		//Valida Bairro
		if(cli.bairro_logradouro.value == ""){
			alert("Digite o bairro do cliente!");
			cli.bairro_logradouro.focus();
			return false;
		}
		
		//Valida CEP
		if(cli.cep_logradouro.value == ""){
			alert("Digite o CEP do cliente!");
			cli.cep_logradouro.focus();
			return false;
		}
		
		//Valida Cidade
		if(cli.cidade_logradouro.value == ""){
			alert("Digite a cidade do cliente!");
			cli.cidade_logradouro.focus();
			return false;
		}
		
		//Valida Estado
		if(cli.estado_logradouro.value == ""){
			alert("Digite o estado do cliente!");
			cli.estado_logradouro.focus();
			return false;
		}
		
		//Valida Contatos
		//Valida Email
		if(cli.email_cliente.value == ""){
			alert("Digite o E-mail do cliente!");
			cli.email_cliente.focus();
			return false;
		}
		//Valida Tipo de Telefone
		if(cli.tipo_1_telefone.value <= 0){
			alert("Digite o número do telefone do cliente!");
			cli.tipo_1_telefone.focus();
			return false;		
		}
		
		//Valida DDD
		if(cli.ddd_1_telefone.value == ""){
			alert("Digite o DDD do cliente!");
			cli.ddd_1_telefone.focus();
			return false;
		}
		
		//Valida Número
		if(cli.numero_1_telefone.value == ""){
			alert("Digite o número do telefone do cliente!");
			cli.numero_1_telefone.focus();
			return false;
		}
		
		//Valida telefones extras
		<?php
		for($i = 2; $i < 5; $i++){?>
			if(cli.tipo_<?php echo $i; ?>_telefone.value > 0){
				if(cli.ddd_<?php echo $i; ?>_telefone.value == ""){
					alert("Digite o DDD do <?php echo $i; ?>º telefone do cliente!");
					cli.ddd_<?php echo $i; ?>_telefone.focus();
					return false;
				}
				if(cli.numero_<?php echo $i; ?>_telefone.value == ""){
					alert("Digite o número do <?php echo $i; ?>º telefone do cliente!");
					cli.numero_<?php echo $i; ?>_telefone.focus();
					return false;
				}
			
			}
		<?php
		}
		?>
		
		
		return true;
	}

</script>

<div class="container">
	<div class="content clearfix">
		<form action="#" method="post" id="formulario_adiciona_cliente" name="formulario_adiciona_cliente" onSubmit="return validaCliente()">
			<h1>Adicionar Cliente: </h1>
			<br>
			<div class="form-horizontal">
				<div class="jumbotron">
					<h3>Dados Pessoais</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="tipo_cliente" class="col-xs-10 col-sm-1">Tipo Cliente:</label>
								<select class="col-xs-10 col-sm-3" id="tipo_cliente" name="tipo_cliente">
								</select>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="nome_cliente" class="col-xs-10 col-sm-1">Nome:</label>
								<input class="form-control col-xs-10 col-sm-3" id="nome_cliente" name="nome_cliente" placeholder="Nome..." type="text">
								<label for="nacionalidade_cliente" class="col-xs-10 col-sm-2">Nacionalidade: </label>
								<input class="form-control col-xs-10 col-sm-2" id="nacionalidade_cliente" name="nacionalidade_cliente" placeholder="Nacionalidade..." type="text">
								<label for="data_nascimento_cliente" class="col-xs-10 col-sm-2">Data de Nascimento:</label>
								<div class="input-group date" id="datepicker-nascimento">
									<input class="form-control col-xs-10 col-sm-2" id="data_nascimento_cliente" name="data_nascimento_cliente" placeholder="Data Nascimento..." data-mask="00/00/0000" type="text">
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="sexo" class="col-xs-10 col-sm-1">Sexo:</label>
								<select class="col-xs-10 col-sm-3" id="sexo" name="sexo">
								</select>
								<label for="estado_civil" class="col-xs-10 col-sm-2">Estado Civil:</label>
								<select class="col-xs-10 col-sm-2" id="estado_civil" name="estado_civil">
								</select>
								<label for="profissao_cliente" class="col-xs-10 col-sm-2">Profissão:</label>
								<input class="form-control col-xs-10 col-sm-2" id="profissao_cliente" name="profissao_cliente" placeholder="Profissão..." type="text">
							</div>
						</div>
					</div>
					<hr>
					<h3>Documentos Pessoais</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="cpf_cliente" class="col-xs-10 col-sm-1">CPF:</label>
								<input class="form-control col-xs-10 col-sm-3" id="cpf_cliente" name="cpf_cliente" placeholder="CPF..." data-mask="000.000.000-00" type="text">
								<label for="rg_cliente" class="col-xs-10 col-sm-1">RG:</label>
								<input class="form-control col-xs-10 col-sm-3" id="rg_cliente" name="rg_cliente" placeholder="RG..." data-mask="00000000000" type="text">
								<label for="pis_cliente" class="col-xs-10 col-sm-1">PIS:</label>
								<input class="form-control col-xs-10 col-sm-3" id="pis_cliente" name="pis_cliente" placeholder="PIS..." data-mask="000.00000.00-0" type="text">
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="ctps_cliente" class="col-xs-10 col-sm-1">CTPS:</label>
								<input class="form-control col-xs-10 col-sm-3" id="ctps_cliente" name="ctps_cliente" placeholder="CTPS..." data-mask="00000000" type="text">
								<label for="serie_ctps_cliente" class="col-xs-10 col-sm-1">Série:</label>
								<input class="form-control col-xs-10 col-sm-3" id="serie_ctps_cliente" name="serie_ctps_cliente" placeholder="Série..." data-mask="00000AA" type="text">
							</div>
						</div>
					</div>
					<hr>
					<h3>Endereço</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="tipo_logradouro" class="col-xs-10 col-sm-2">Logradouro Cliente:</label>
								<select class="col-xs-10 col-sm-2" id="tipo_logradouro" name="tipo_logradouro"
								</select>
								<label for="nome_logradouro" class="col-xs-10 col-sm-1">Nome:</label>
								<input class="form-control col-xs-10 col-sm-5" id="nome_logradouro" name="nome_logradouro" placeholder="Nome..." type="text">
								<label for="numero_logradouro" class="col-xs-10 col-sm-1">Nº:</label>
								<input class="form-control col-xs-10 col-sm-1" id="numero_logradouro" name="numero_logradouro" placeholder="Nº..." data-mask="00000000" type="text">
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="complemente_logradouro" class="col-xs-10 col-sm-2">Complemento:</label>
								<input class="form-control col-xs-10 col-sm-2" id="complemento_logradouro" name="complemento_logradouro" placeholder="Complemento..." type="text">
								<label for="bairro_logradouro" class="col-xs-10 col-sm-1">Bairro:</label>
								<input class="form-control col-xs-10 col-sm-3" id="bairro_logradouro" name="bairro_logradouro" placeholder="Bairro..." type="text">
								<label for="cep_logradouro" class="col-xs-10 col-sm-1">CEP:</label>
								<input class="form-control col-xs-10 col-sm-3" id="cep_logradouro" name="cep_logradouro" placeholder="CEP..." data-mask="00000-000" type="text">
							</div>
						</div>
					</div>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="cidade_logradouro" class="col-xs-10 col-sm-1 col-sm-offset-4">Cidade:</label>
								<input class="form-control col-xs-10 col-sm-3" id="cidade_logradouro" name="cidade_logradouro" placeholder="Cidade..." type="text">
								<label for="estado_logradouro" class="col-xs-10 col-sm-1">Estado:</label>
								<input class="form-control col-xs-10 col-sm-3" id="estado_logradouro" name="estado_logradouro" placeholder="Estado..." data-mask="AA" type="text">
							</div>
						</div>
					</div>
					<hr>
					<h3>Contatos</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="email_cliente" class="col-xs-10 col-sm-1">Email:</label>
								<input class="form-control col-xs-10 col-sm-5" id="email_cliente" name="email_cliente" placeholder="Email..." type="email">
							</div>
						</div>
					</div>
					<h4>Telefone</h4>
					<br>
					<div class="field">
						<div class='row'>
							<div class='form-group'>
								<label for='tipo_1_telefone' class='col-xs-10 col-sm-1'>Tipo:</label>
								<select class='col-xs-10 col-sm-2' id='tipo_1_telefone' name='tipo_1_telefone'>
								</select>
								<label for='ddd_1_telefone' class='col-xs-10 col-sm-1'>DDD:</label>
								<input class='form-control col-xs-10 col-sm-1' id='ddd_1_telefone' name='ddd_1_telefone' placeholder='DDD...' data-mask='00' type='text'>
								<label for='numero_1_telefone' class='col-xs-10 col-sm-1'>Número:</label>
								<input class='form-control col-xs-10 col-sm-2 inputtelefone' id='numero_1_telefone' name='numero_1_telefone' placeholder='Número...' type='text'>
								<label for='falar_com_1_telefone' class='col-xs-10 col-sm-2'>Falar com:</label>
								<input class='form-control col-xs-10 col-sm-2' id='falar_com_1_telefone' name='falar_com_1_telefone' placeholder='Falar com...' type='text'>
							</div>
						</div>
						<div class='row'>
							<div class='form-group'>
								<button type='button' class='btn btn-xs btn-link col-sm-offset-9' id='adicionaTelefone' data-toggle='collapse' data-target='#grupotelefone2'>Adicionar telefone</button>
							</div>
						</div>
						<?php
							$limite = 4;
							for($i = 2; $i  <= $limite; $i++){
								echo "<div class='collapse' id='grupotelefone" . $i . "'>
									<div class='row'>
										<div class='form-group'>
											<label for='tipo_" . $i . "_telefone' class='col-xs-10 col-sm-1'>Tipo:</label>
											<select class='col-xs-10 col-sm-2' id='tipo_" . $i . "_telefone' name='tipo_" . $i . "_telefone'>
											</select>
											<label for='ddd_" . $i . "_telefone' class='col-xs-10 col-sm-1'>DDD:</label>
											<input class='form-control col-xs-10 col-sm-1' id='ddd_" . $i . "_telefone' name='ddd_" . $i . "_telefone' placeholder='DDD...' data-mask='00' type='text'>
											<label for='numero_" . $i . "_telefone' class='col-xs-10 col-sm-1'>Número:</label>
											<input class='form-control col-xs-10 col-sm-2 inputtelefone' id='numero_" . $i . "_telefone' name='numero_" . $i . "_telefone' placeholder='Número...' type='text'>
											<label for='falar_com_" . $i . "_telefone' class='col-xs-10 col-sm-2'>Falar com:</label>
											<input class='form-control col-xs-10 col-sm-2' id='falar_com_" . $i . "_telefone' name='falar_com_" . $i . "_telefone' placeholder='Falar com...' type='text'>
										</div>
									</div>";
								if($i<$limite){
									echo "<div class='row'>
										<div class='form-group'>
											<button type='button' class='btn btn-xs btn-link col-sm-offset-9' id='adicionaTelefone' data-toggle='collapse' data-target='#grupotelefone". ($i + 1) . "'>Adicionar/Remover telefone</button>
										</div>
									</div>
								</div> <!-- Finaliza loop -->";	
								}
								else{
									echo "</div>
									</div>";
								}
							}
						?>
					</div>
				</div>
			</div>
			<div class="login-actions">
				<input value="Cadastrar Cliente" class="button btn btn-primary btn-lg" name="btn_cadastrar_cliente" id="btn_cadastrar_cliente" type="submit">
			</div>
		</form>
	</div>
</div>
<br>

<?php include('pages/clientes/confirmacoesclientes.php');?>