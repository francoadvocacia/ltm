<style>
	#acompanhamentoProcesso	{
		padding-right: 100px;
	}
</style>

<div class="container">
	<div class="content clearfix">
		<form action="#" method="post" id="formulario">
			<h1>Adicionar Audiência: </h1>
			<br>
			<div class="form-horizontal">
				<div class="jumbotron">
					<h3>Associar Processo</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label class="col-xs-10 col-sm-2">Pesquisar:</label>
								<div class="col-xs-10 col-sm-3">
									<label class="radio-inline" for="optpesquisa-audiencia"><input type="radio" name="optpesquisa-audiencia">Nome</input></label>
									<label class="radio-inline" for="optpesquisa-audiencia"><input type="radio" name="optpesquisa-audiencia">Número Processo</input></label>
								</div>	
								<input class="form-control col-xs-10 col-sm-5" id="vara-processo" name="vara-processo" placeholder="Valor para pesquisar..." type="text">
								<div class="col-xs-10 col-sm-1">
									<button type='button' class='btn btn-primary' id='adicionaContrario' data-toggle='collapse' data-target='#grupocontrario2'>Pesquisar</button>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="cliente-audiencia" class="col-xs-10 col-sm-2">Cliente:</label>
								<input class="form-control col-xs-10 col-sm-3" id="numero-processo" name="numero-processo" placeholder="Cliente..." type="text">
								<label for="numero-processo" class="col-xs-10 col-sm-2">Nº Processo:</label>
								<input class="form-control col-xs-10 col-sm-3" id="numero-processo" name="numero-processo" placeholder="Número do Processo..." type="text" data-mask="0000000-00.0000.0.00.0000">
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="cliente-audiencia" class="col-xs-10 col-sm-2">Resumo do processo:</label>
								<textarea class="col-xs-10 col-sm-8" rows="6" readonly></textarea>
							</div>
						</div>
					</div>
								
					<hr>
					<h3>Dados Audiência</h3>
					<br>
					<div class="field">
						<div class="row">
							<div class="form-group">
								<label for="advogado-processo" class="col-xs-10 col-sm-2">Data Audiência:</label>
								<input class="form-control col-xs-10 col-sm-2" id="vara-processo" name="vara-processo" placeholder="Data Audiência..." type="text" data-mask="00/00/0000">
								<label for="posicaoadvogado-processo" class="col-xs-10 col-sm-2">Horário da Audiência:</label>
								<input class="form-control col-xs-10 col-sm-2" id="vara-processo" name="vara-processo" placeholder="Horário Audiência..." type="text" data-mask="00:00">
								<label for="posicaoadvogado-processo" class="col-xs-10 col-sm-2">Tipo Audiência:</label>
								<select class="form-control col-xs-10 col-sm-2" id="posicaoadvogado-processo" name="posicaoadvogado-processo">
									<!--colocar código para puxar opções do BD-->
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="advogado-processo" class="col-xs-10 col-sm-2">Número da Vara:</label>
								<input class="form-control col-xs-10 col-sm-2" id="vara-processo" name="vara-processo" placeholder="Nº Vara..." type="text" data-mask="00">
								<label for="posicaoadvogado-processo" class="col-xs-10 col-sm-2">Fórum:</label>
								<select class="form-control col-xs-10 col-sm-2" id="posicaoadvogado-processo" name="posicaoadvogado-processo">
									<!--colocar código para puxar opções do BD-->
								</select>
								<label for="posicaoadvogado-processo" class="col-xs-10 col-sm-2">Advogado Designado:</label>
								<select class="form-control col-xs-10 col-sm-2" id="posicaoadvogado-processo" name="posicaoadvogado-processo">
									<!--colocar código para puxar opções do BD-->
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="login-actions">
				<input value="Cadastrar Audiência" class="button btn btn-primary btn-lg" name="btn-cadastraraudiencia" id="btn-cadastraraudiencia" type="submit">
			</div>
		</form>
	</div>
</div>
<br>