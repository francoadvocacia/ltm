<?php
require_once('conexao/conecta-agendamento-pdo.php');
require_once('conexao/conecta-agendamento.php');

$sql = "SELECT id, title, start, end, color_evento, compareceu_agendado, status_contrato, observacao_agendado, agente_comercial FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Setor Comercial</title>


    <style>
    #calendar {
		max-width: 950px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-10 text-center">
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
    </div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src='js/moment.js'></script>
	<script src='js/fullcalendar.js'></script>
	<script src='js/bootstrap-datetimepicker.js'></script>
	<script src='js/locale/pt-br.js'></script>
	
	
	<script type="text/javascript">
    	$(function () {
    		$('#datetimepicker10').datetimepicker({
        	locale: 'pt-br',
        	stepping: 30,
            format: 'DD/MM/YYYY HH:mm',
            sideBySide: true,
            daysOfWeekDisabled: [0, 6],
            disabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 18, 19, 20, 21, 22, 23, 24],
			enabledHours: [9, 10, 11, 12, 13, 14, 15, 16, 17],
            disabledDates: [
            	"09/07/2017",
            	"09/08/2017",
            	"10/12/2017",
            	"10/13/2017",
                "11/02/2017",
                "11/03/2017",
                "11/15/2017",
                "11/20/2017",
                ]
           	});
        });

    </script>
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			customButtons: {
        		myCustomButton: {
            		text: 'Agendar cliente',
            		click: function(start) {
							$('#ModalAdd #start').val(moment(start).format('DD/MM/YYYY HH:mm'));
							$('#ModalAdd').modal('show');
						},
        			}
    			},
			height: 505,
			footer: 'false',
    		defaultView: 'agendaWeek',
    		navLinks: true,
			header: {
				left: 'prev,next today myCustomButton',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			slotEventOverlap: false,
			eventOverlap: false,
			editable: true,
			eventDurationEditable: false,
			eventLimit: true,
			selectable: true,
			selectHelper: true,
			slotDuration: "00:30:00",
			defaultTimedEventDuration: '00:30:00',
			minTime: '09:00:00',
			maxTime: '18:00:00',
			weekNumbers: false,
			weekends: false,
			timeFormat: 'H:mm',
			allDaySlot: false,
			businessHours: [
    			{
        			dow: [ 1, 2, 3, 4, 5 ],
        			start: '09:00',
        			end: '18:00'
    			}
    		],
    		views: {
    			month: {

    				showNonCurrentDates: false,
    				titleFormat: 'MMM/YYYY'
    			}
    		},

    		validRange: {
        		start: '2017-07-01'
        	},
    		allDay: false,
    		nowIndicator: true,


			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('DD/MM/YYYY HH:mm'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('click', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #start').val((event.start).format('DD/MM/YYYY HH:mm'));
					$('#ModalEdit #compareceu_agendado').val(event.compareceu_agendado);
					$('#ModalEdit #status_contrato').val(event.status_contrato);
					$('#ModalEdit #observacao_agendado').val(event.observacao_agendado);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color_evento']; ?>',
					compareceu_agendado: '<?php echo $event['compareceu_agendado']; ?>',
					status_contrato: '<?php echo $event['status_contrato']; ?>',
					observacao_agendado: '<?php echo $event['observacao_agendado']; ?>',
					agente_comercial: '<?php echo $event['agente_comercial'] ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'pages/agendamentos/editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Alteração efetuada com sucesso');
					}else{
						alert('Erro ao salvar. Tente novamente.'); 
					}
				}
			});
		}
		
	});

</script>

</body>
</html>
