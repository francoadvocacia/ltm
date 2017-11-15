<?php

header('Content-Type: text/html; charset=utf-8');

require_once('conexao.php');

$itens_por_pagina = 2;

$pagina = intval($_GET['pagina']);

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
  LEFT JOIN agente_comercial ON events.agente_comercial = agente_comercial.cod_agente_comercial LIMIT $pagina, $itens_por_pagina ORDER BY events.start";

$execute = $mysqli->query($sql_code) or die($mysqli->error);
$agendados = $execute->fetch_assoc();
$num = $execute->num_rows;

// pega a quantidade total de objetos no banco de dados
$num_total = $mysqli->query("SELECT events.id AS id, 
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
  LEFT JOIN agente_comercial ON events.agente_comercial = agente_comercial.cod_agente_comercial")->num_rows;

// definir numero de páginas
$num_paginas = ceil($num_total/$itens_por_pagina);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Agendamentos Franco Advocacia</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
</head>
<body>

<div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <h1>Agendados</h1>
          <?php if($num > 0){ ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td>Cliente</td>
              <td>Hora Marcada</td>
              <td>Agente Comercial</td>
              <td>Compareceu?</td>
              <td>Fechou Contrato?</td>
              <td>Observações</td>
            </tr>
          </thead>
          <tbody>
            <?php do{ ?>
            <tr>
              <td><?php echo $agendados['title']?></td>
              <td><?php echo $agendados['start']?></td>
              <td><?php echo $agendados['agente_comercial']?></td>
              <td><?php echo $agendados['compareceu_agendado']?></td>
              <td><?php echo $agendados['status_contrato']?></td>
              <td><?php echo $agendados['observacao_agendado']?></td>
            </tr>
            <?php } while($agendados = $execute->fetch_assoc()); ?>
          </tbody>
        </table>

        <nav>
          <ul class="pagination">
            <li>
              <a href="teste-paginacao.php?pagina=0" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php 
            for($i=0;$i<$num_paginas;$i++){
            $estilo = "";
            if($pagina == $i)
              $estilo = "class=\"active\"";
            ?>
            <li <?php echo $estilo; ?> ><a href="teste-paginacao.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
          <?php } ?>
            <li>
              <a href="teste-paginacao.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
          <?php } ?>
        </div>
      </div>
    </div>


</body>
</html>