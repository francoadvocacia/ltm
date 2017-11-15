<!-- Modais de Inserção -->

<?php include('pages/gerenciamento/confirmacoes.php'); ?>

<!-- Sistema -->
<!-- Adicionar Usuário -->
 
 <div id="modalAdicionaUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Sistema - Adicionar Usuário</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="nomeUsuario" class="col-sm-3 control-label">Nome do Usuário: </label>
				<input class="col-sm-8" type="text" name="nomeUsuario" class="form-control" id="nomeUsuario" 
				placeholder="Nome do Usuário...">
			</div>
			<div class="form-group">
				<label for="emailUsuario" class="col-sm-3 control-label">E-mail do Usuário: </label>
				<input class="col-sm-8" type="email" name="emailUsuario" class="form-control" id="emailUsuario" placeholder="E-mail do Usuário:...">
			</div>
			<div class="form-group">
				<label for="cpfUsuario" class="col-sm-3 control-label">CPF do Usuário: </label>
				<input class="col-sm-3" type="text" name="cpfUsuario" class="form-control" id=
				"cpfUsuario" placeholder="CPF do Usuário..." data-mask="000.000.000-00">
				<label for="dataNascimentoUsuario" class="col-sm-2 control-label">Data Nascimento:</label>
				<input class="col-sm-3" type="text" name="dataNascimentoUsuario" class="form-control" id="dataNascimentoUsuario" placeholder="Data de Nascimento" data-mask="00/00/0000">
			</div>
			<div class="form-group">
				<label for="nivelAcessoUsuario" class="col-sm-3 control-label">Nível de Acesso do Usuário: </label>
				<select class="col-sm-1 form-control" name="nivelAcessoUsuario" id="nivelAcessoUsuario">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		  </div>
		  <div class="modal-footer">
		  	
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarUsuario" id="adicionarUsuario" value="Adicionar" >
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Agendamentos -->
<!-- Agendadores -->

 <div id="modalAdicionaAgendador" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Agendamentos - Agendador</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="nomeAgendador" class="col-sm-3 control-label">Nome: </label>
				<input class="col-sm-8 form-control" type="text" name="nomeAgendador" id="nomeAgendador" 
				placeholder="Nome...">
			</div>
			<div class="form-group">
				<label for="corAgendador" class="col-sm-3 control-label">Cor: </label>
				<div id="corAgendador" class="input-group colorpicker-component col-sm-8">
					<input type="text" value="" class="form-control" id="corAgendador" name="corAgendador">
					<span class="input-group-addon"><i></i></span>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarAgendador" id="adicionarAgendador" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Cliente Compareceu? -->

 <div id="modalAdicionaPosicaoCompareceu" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Agendamentos - Cliente Compareceu?</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="nomePosicaoCompareceu" class="col-sm-3 control-label">Posição: </label>
				<input class="col-sm-8" type="text" name="nomePosicaoCompareceu" class="form-control" id="nomePosicaoCompareceu" 
				placeholder="Cliente Compareceu?...">
		  	</div>
		  	<div class="form-group">
				<label for="corPosicaoCompareceu" class="col-sm-3 control-label">Cor: </label>
				<div id="corPosicaoCompareceu" class="input-group colorpicker-component col-sm-8">
					<input type="text" value="" class="form-control" id="corPosicaoCompareceu" name="corPosicaoCompareceu">
					<span class="input-group-addon"><i></i></span>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarPosicaoCompareceu" id="adicionarPosicaoCompareceu" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Situação Contratual -->

 <div id="modalAdicionaSituacaoContratual" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Agendamentos - Situação Contratual</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="nomeSituacaoContratual" class="col-sm-3 control-label">Situação: </label>
				<input class="col-sm-8" type="text" name="nomeSituacaoContratual" class="form-control" id="nomeSituacaoContratual" 
				placeholder="Adiciona Situação...">
			</div>
			<div class="form-group">
				<label for="corSituacaoContratual" class="col-sm-3 control-label">Cor: </label>
				<div id="corSituacaoContratual" class="input-group colorpicker-component col-sm-8">
					<input type="text" value="" class="form-control" id="corSituacaoContratual" name="corSituacaoContratual">
					<span class="input-group-addon"><i></i></span>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarSituacaoContratual" id="adicionarSituacaoContratual" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Clientes -->
<!-- Tipo Clientes -->

 <div id="modalAdicionaTipoCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Clientes - Adicionar Tipo</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="tipoCliente" class="col-sm-3 control-label">Tipo Cliente: </label>
				<input class="col-sm-8" type="text" name="tipoCliente" class="form-control" id="tipoCliente" 
				placeholder="Tipo Cliente...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarTipoCliente" id="adicionarSituacaoContratual" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Sexo -->

 <div id="modalAdicionaSexo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Clientes - Sexo</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="sexo" class="col-sm-3 control-label">Sexo: </label>
				<input class="col-sm-8" type="text" name="sexo" class="form-control" id="sexo" 
				placeholder="Sexo...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarSexo" id="adicionarSexo" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Estado Civil -->

 <div id="modalAdicionaEstadoCivil" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Clientes - Estado Civil</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="estadoCivil" class="col-sm-3 control-label">Estado Civil: </label>
				<input class="col-sm-8" type="text" name="estadoCivil" class="form-control" id="estadoCivil" 
				placeholder="Estado Civil...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarEstadoCivil" id="adicionarEstadoCivil" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Tipo Logradouro -->

 <div id="modalAdicionaTipoLogradouro" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Clientes - Logradouro</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="tipoLogradouro" class="col-sm-3 control-label">Tipo Logradouro: </label>
				<input class="col-sm-8" type="text" name="tipoLogradouro" class="form-control" id="tipoLogradouro" 
				placeholder="Tipo Logradouro...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarTipoLogradouro" id="adicionarTipoLogradouro" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Tipo Telefone -->

 <div id="modalAdicionaTipoTelefone" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Clientes - Tipo Telefone</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="tipoTelefone" class="col-sm-3 control-label">Tipo Telefone: </label>
				<input class="col-sm-8" type="text" name="tipoTelefone" class="form-control" id="tipoTelefone" 
				placeholder="Tipo Telefone...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarTipoTelefone" id="adicionarTipoTelefone" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Processos -->
<!-- Fórum -->

 <div id="modalAdicionaForum" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Fórum</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="forum" class="col-sm-3 control-label">Fórum: </label>
				<input class="col-sm-8" type="text" name="forum" class="form-control" id="forum" 
				placeholder="Fórum...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarForum" id="adicionarForum" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Tipo Ação Judicial -->

 <div id="modalAdicionaTipoAcaoJudicial" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Tipo Ação Judicial</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="tipoAcaoJudicial" class="col-sm-3 control-label">Tipo Ação Judicial: </label>
				<input class="col-sm-8" type="text" name="tipoAcaoJudicial" class="form-control" id="tipoAcaoJudicial" 
				placeholder="Tipo Ação Judicial...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarTipoAcaoJudicial" id="adicionarTipoAcaoJudicial" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Rito Processual -->

 <div id="modalAdicionaRitoProcessual" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Rito Processual</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="ritoProcessual" class="col-sm-3 control-label">Rito Processual: </label>
				<input class="col-sm-8" type="text" name="ritoProcessual" class="form-control" id="ritoProcessual" 
				placeholder="Rito Processual...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarRitoProcessual" id="adicionarRitoProcessual" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Fase Processual -->

 <div id="modalAdicionaFaseProcessual" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Fase Processual</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="faseProcessual" class="col-sm-3 control-label">Fase Processual: </label>
				<input class="col-sm-8" type="text" name="faseProcessual" class="form-control" id="faseProcessual" 
				placeholder="Fase Processual...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarFaseProcessual" id="adicionarFaseProcessual" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Status Processual -->

 <div id="modalAdicionaStatusProcessual" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Status Processual</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="statusProcessual" class="col-sm-3 control-label">Status Processual: </label>
				<input class="col-sm-8" type="text" name="statusProcessual" class="form-control" id="statusProcessual" placeholder="Status Processual...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarStatusProcessual" id="adicionarStatusProcessual" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Decisão -->

<div id="modalAdicionaDecisao" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Decisão</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="decisao" class="col-sm-3 control-label">Decisão: </label>
				<input class="col-sm-8" type="text" name="decisao" class="form-control" id="decisao" placeholder="Decisão...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarDecisao" id="adicionarDecisao" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Posição do Cliente -->

<div id="modalAdicionaPosicaoCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Posição do Cliente</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="posicaoCliente" class="col-sm-4 control-label">Posição do Cliente: </label>
				<input class="col-sm-7" type="text" name="posicaoCliente" class="form-control" id="posicaoCliente" placeholder="Posição do Cliente...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarPosicaoCliente" id="adicionarPosicaoCliente" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Posição do Contrário -->

<div id="modalAdicionaPosicaoContrario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Posição do Contrário</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="posicaoContrario" class="col-sm-4 control-label">Posição do Contrário: </label>
				<input class="col-sm-7" type="text" name="posicaoContrario" class="form-control" id="posicaoContrario" placeholder="Posição do Contrário...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarPosicaoContrario" id="adicionarPosicaoContrario" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Posição do Advogado -->

<div id="modalAdicionaPosicaoAdvogado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Posição do Advogado</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="posicaoAdvogado" class="col-sm-4 control-label">Posição do Advogado: </label>
				<input class="col-sm-7" type="text" name="posicaoAdvogado" class="form-control" id="posicaoAdvogado" placeholder="Posição do Advogado...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarPosicaoAdvogado" id="adicionarPosicaoAdvogado" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Tipo de Acompanhamento -->

<div id="modalAdicionaTipoAcompanhamento" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Tipo de Acompanhamento</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="tipoAcompanhamento" class="col-sm-5 control-label">Tipo de Acompanhamento: </label>
				<input class="col-sm-6" type="text" name="tipoAcompanhamento" class="form-control" id="tipoAcompanhamento" placeholder="Tipo de Acompanhamento...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarTipoAcompanhamento" id="adicionarTipoAcompanhamento" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Advogado Patrono -->

<div id="modalAdicionaAdvogadoPatrono" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Processos - Advogado Patrono</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="advogadoPatrono" class="col-sm-4 control-label">Advogado Patrono: </label>
				<input class="col-sm-7" type="text" name="advogadoPatrono" class="form-control" id="advogadoPatrono" placeholder="Advogado Patrono...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarAdvogadoPatrono" id="adicionarAdvogadoPatrono" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Audiências -->
<!-- Tipo Audiência -->

<div id="modalAdicionaTipoAudiencia" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Audiências - Tipo de Audiência</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="tipoAudiencia" class="col-sm-3 control-label">Tipo de Audiência: </label>
				<input class="col-sm-8" type="text" name="tipoAudiencia" class="form-control" id="tipoAudiencia" placeholder="Tipo de Audiência...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarTipoAudiencia" id="adicionarTipoAudiencia" value="Adicionar" >
			
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Advogado Designado -->

<div id="modalAdicionaAdvogadoDesignado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form class="form-horizontal" method="POST" action="#">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Audiências - Advogado Designado</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group">
				<label for="advogadoDesignado" class="col-sm-4 control-label">Advogado Designado: </label>
				<input class="col-sm-7" type="text" name="advogadoDesignado" class="form-control" id="advogadoDesignado" placeholder="Advogado Designado...">
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<input type="submit" class="btn btn-primary" name="adicionarAdvogadoDesignado" id="adicionarAdvogadoDesignado" value="Adicionar" >
		  </div>
	  </form>
    </div>
  </div>
</div>

<!-- Modais de Exibição -->
