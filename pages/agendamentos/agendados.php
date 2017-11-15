<?php

header('Content-Type: text/html; charset=utf-8');

require_once('conexao/conecta-agendamento.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Agendamentos Franco Advocacia</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/datatables.css">
	
	<style type="text/css">
		#corpo{
			
			padding-bottom: 20px;
		}
	</style>
</head>
<body>

<div id="corpo" class="content">
	<div class="row">
		<div class="col-md-1 col-sm-1 col-lg-1"></div>
		<div class="col-md-10 col-sm-10 col-lg-10">
			<table id="franco" class="display compact table table-striped table-hover table-condensed table-responsive">
			    <thead>
			      <tr>
			        <th>Cliente</th>
			        <th>Hora Marcada</th>
			        <th>Agente Comercial</th>
			        <th>Compareceu?</th>
			        <th>Fechou contrato?</th>
			        <th>Observações</th>
			        <th>Excluir</th>
			      </tr>
			    </thead>
			    <tfoot>
			      <tr>
			        <th>Cliente</th>
			        <th>Hora Marcada</th>
			        <th>Agente Comercial</th>
			        <th>Compareceu?</th>
			        <th>Fechou contrato?</th>
			        <th></th>
			        <th></th>
			      </tr>
			    </tfoot>
			    <tbody>
				    <?php while ($agendados = $execute->fetch_assoc()) { ?>
				    	<tr>
				        	<td id="title"><?php echo $agendados['title'];?></td>
				        	<td id="start"><?php 
								$start = $agendados['start'];
								$separar = explode(" ", $start);
								$data = $separar[0];
								$hora = $separar[1];
								$dataMySQL = implode("-", array_reverse(explode("/", $data)));
								$inicio = $dataMySQL . " " . $hora; 
								echo $inicio; ?></td>
				        	<td id="agente_comercial"><?php echo $agendados['agente_comercial'];?></td>
				        	<td id="compareceu_agendado"><?php echo $agendados['compareceu_agendado'];?></td>
				        	<td id="status_contrato"><?php echo $agendados['status_contrato'];?></td>
				        	<td id="observacao_agendado"><?php echo $agendados['observacao_agendado'];?></td>
				        	<td id="deletar"><a href="deletar.php?id=<?php echo $agendados['id']; ?>"><button type="button" class="btn btn-xs btn-danger">Deletar</button></a></td>
				      	</tr>
				    <?php } ?>
			    </tbody>
			</table>
			<p></p>
			<div>
				Ocultar/Mostrar colunas: <a class="toggle-vis" data-column="0">Cliente</a> - <a class="toggle-vis" data-column="1">Hora Marcada</a> - <a class="toggle-vis" data-column="2">Agente Comercial</a> - <a class="toggle-vis" data-column="3">Compareceu?</a> - <a class="toggle-vis" data-column="4">Fechou Contrato</a> - <a class="toggle-vis" data-column="5">Observações</a> - <a class="toggle-vis" data-column="6">Excluir</a>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="editaTabela" tabindex="-1" role="dialog" aria-labelledby="editaTabela" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Editar agendamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        		<span aria-hidden="true">&times;</span>
        		</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="form-control-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="form-control-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/moment.js"></script>
<script type="text/javascript" charset="utf8" src="js/datatables.js"></script>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#franco').DataTable(
			{
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select><option value="">Selecione...</option></select>')
							.appendTo( $(column.footer()).empty() )
							.on( 'change', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);

								column
									.search( val ? '^'+val+'$' : '', true, false )
									.draw();
							} );

						column.data().unique().sort().each( function ( d, j ) {
							if(column.search() === '^'+d+'$'){
								select.append( '<option value="'+d+'" selected="selected">'+d+'</option>' )
							} else {
								select.append( '<option value="'+d+'">'+d+'</option>' )
							}
						} );
					} );
				},
				pagingType: "simple_numbers",
				lengthMenu: [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ],
				stateSave: true,
				scrollY: "450px",
				scrollX: false,
				scrollCollapse: true,
				language: {	
					"sEmptyTable": "Nenhum registro encontrado",
					"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
					"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
					"sInfoFiltered": "(Filtrados de _MAX_ registros)",
					"sInfoPostFix": "",
					"sInfoThousands": ".",
					"sLengthMenu": "Mostrar _MENU_ resultados por página",
					"sLoadingRecords": "Carregando...",
					"sProcessing": "Processando...",
					"sZeroRecords": "Nenhum registro encontrado",
					"sSearch": "Pesquisar",
					"oPaginate": {
						"sNext": "Próximo",
						"sPrevious": "Anterior",
						"sFirst": "Primeiro",
						"sLast": "Último"
					},
					"oAria": {
						"sSortAscending": ": Ordenar colunas de forma ascendente",
						"sSortDescending": ": Ordenar colunas de forma descendente"
					}
				}
			}
		);

		var table = $('#franco').DataTable();
		$('#franco tbody').on('dblclick', 'tr', function () {
			var data = table.row( this ).data();
			if (data[5] == ""){
				$obs = 'Nenhuma observação';
			}
			else {
				$obs = data[5];
			}
			alert('Cliente: '+ data[0] +
				'\nHorário marcado: ' + data[1] +
				'\nAgente Comercial: ' + data[2] +
				'\nCliente compareceu?: ' + data[3] + 
				'\nFechou contrato?: ' + data[4] +
				'\nObservações: ' + $obs );
		} );

		var table = $('#franco').DataTable();
		$('a.toggle-vis').on( 'click', function (e) {
			e.preventDefault();

			// Get the column API object
			var column = table.column( $(this).attr('data-column') );

			// Toggle the visibility
			column.visible( ! column.visible() );
		} );
	});

</script>


</body>
</html>