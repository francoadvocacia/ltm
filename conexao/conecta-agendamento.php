<?php

$con = mysqli_connect("localhost","root","","bd_calendario");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	/*Comandos para buscar dados no banco de dados que utilizam nos forms do FullCalendar*/
	$buscar_agentes = "SELECT * FROM agente_comercial";
	$exibir_agentes = mysqli_query($con, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	$exibir_agentes = mysqli_query($con, $buscar_agentes);
	$buscar_status = "SELECT * FROM status_agendamento";
	$exibir_status_agentamento = mysqli_query($con, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	$exibir_status_agentamento = mysqli_query($con, $buscar_status);
	$buscar_compareceu = "SELECT * FROM compareceu_agendado";
	$exibir_compareceu = mysqli_query($con, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	$exibir_compareceu = mysqli_query($con, $buscar_compareceu);

	/*Comandos para o Data Table*/
	$sql_code = $con->query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	$sql_code = "SELECT events.id AS id, 
	events.title AS title, 
	events.start AS start, 
	events.end AS end, 
	events.color_evento AS color, 
	compareceu_agendado.nome_compareceu_agendado AS compareceu_agendado, 
	status_agendamento.nome_status AS status_contrato, 
	events.observacao_agendado AS observacao_agendado, 
	agente_comercial.nome_agente_comercial AS agente_comercial FROM events
	  LEFT JOIN compareceu_agendado ON events.compareceu_agendado = compareceu_agendado.cod_compareceu_agendado
	  LEFT JOIN status_agendamento ON events.status_contrato = status_agendamento.cod_status
	  LEFT JOIN agente_comercial ON events.agente_comercial = agente_comercial.cod_agente_comercial ORDER BY events.start";

	$execute = $con->query($sql_code) or die($con->error);


?>
		<!-- Modais que interagem com Full Calendar -->
		<!-- ModalAdd -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form class="form-horizontal" method="POST" action="pages/agendamentos/addEvent.php">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Adicionar Agendamento</h4>
			  		</div>
			  		<div class="modal-body">
				  		<div class="form-group">
						<label for="title" class="col-sm-4 control-label">Nome cliente: </label>
							<div class="col-sm-8">
					  		<input type="text" name="title" class="form-control" id="title" placeholder="Cliente">
							</div>
						</div>
				  		<div class="form-group">
							<label for="color" class="col-sm-4 control-label">Agendado por: </label>
							<div class="col-sm-8">
					  			<select name="color" class="form-control" id="color">
									<?php
										while ($opcao_agente = mysqli_fetch_assoc($exibir_agentes)) {
											echo "<option style='color:" . $opcao_agente['color_agente'] . ";' value=" . $opcao_agente['color_agente'] . ">&#9724;" . $opcao_agente['nome_agente_comercial'] . "</option>";
										}
									?>
								</select>
							</div>
				  		</div>
						<div class="form-group">
						<label for="start" class="col-sm-4 control-label">Horário Marcado: </label>
							<div class="col-sm-8">
								<div class='input-group date' id='datetimepicker10'>
		           					<input type='text' class="form-control" name="start" id="start">
		           						<span class="input-group-addon">
		           							<span class="glyphicon glyphicon-calendar">
		               						</span>
		           						</span>
		           				</div>
		           			</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>
				</form>
				</div>
			</div>
		</div>


		<!-- ModalEdit -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form class="form-horizontal" method="POST" action="pages/agendamentos/editEventTitle.php">
			  		<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Editar Informações</h4>
			  		</div>
			  		<div class="modal-body">
				  		<div class="form-group">
							<label for="title" class="col-sm-4 control-label">Cliente: </label>
							<div class="col-sm-8">
					  			<input type="text" name="title" class="form-control" id="title" placeholder="Cliente">
							</div>
				  		</div>
				  		<div class="form-group">
							<label for="start" class="col-sm-4 control-label">Horário Marcado: </label>
							<div class="col-sm-8">								
								<div class='input-group date' id='datetimepicker10'>
            						<input type='text' class="form-control" name="start" id="start">
               						<span class="input-group-addon">
	               						<span class="glyphicon glyphicon-calendar">
    	               					</span>
        	       					</span>
        	       				</div>
            				</div>
				  		</div>
				  		<div class="form-group">
				  			<label for="compareceu_agendado" class="col-sm-4 control-label">Cliente compareceu? </label>
				  			<div class="col-sm-8">
				  				<select name="compareceu_agendado" class="form-control" id="compareceu_agendado">
				  					<?php
				  						while ($opcao_compareceu = mysqli_fetch_assoc($exibir_compareceu)) {
				  							echo "<option style='color:" . $opcao_compareceu['color_compareceu_agendado'] . ";' value=" . $opcao_compareceu['cod_compareceu_agendado'] . ">&#9724;" . $opcao_compareceu['nome_compareceu_agendado'] . "</option>";
				  						}
				  					?>
				  				</select>
				  			</div>
				  		</div>
				  		<div class="form-group">
				  			<label for="status_contrato" class="col-sm-4 control-label">Fechou contrato? </label>
				  			<div class="col-sm-8">
				  				<select name="status_contrato" class="form-control" id="status_contrato">
				  					<?php
										while ($opcao_status = mysqli_fetch_assoc($exibir_status_agentamento)) {
											echo "<option style='color:" . $opcao_status['color_status'] . ";' value=" . $opcao_status['cod_status'] . ">&#9724;" . $opcao_status['nome_status'] . "</option>";
										}
									?>
				  				</select>
				  			</div>
				  		</div>
				  		<div class="form-group">
							<label for="observacao_agendado" class="col-sm-4 control-label">Observações: </label>
							<div class="col-sm-8">
					  			<input type="text" name="observacao_agendado" class="form-control" id="observacao_agendado" placeholder="Observações">
							</div>
				  		</div>
				   		<div class="form-group"> 
							<div class="col-sm-offset-4 col-sm-8">
						  		<div class="checkbox">
									<label class="text-danger"><input type="checkbox"  name="delete">Excluir agendamento</label>
						  		</div>
							</div>
						</div>
						<input type="hidden" name="id" class="form-control" id="id">
			  		</div>
			  		<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-primary">Salvar alterações</button>
			  		</div>
				</form>
				</div>
		  </div>
		</div>