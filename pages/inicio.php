<div class="main">
  <div class="main-inner">
    <div class="container">
     <div class="row">
        <div class="span12">
     		<?php

        include('includes/mostrar-usuario.php');
          if(isset($_GET['acao'])) {
              $acao = $_GET['acao'];
              if ($acao == 'boasvindas'){
                echo '
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Olá, ' . $_SESSION['nomeltm'] . '!</strong> Seja Bem vindo ao <strong>Legal Task Manager</strong> !
                  </div>';
              }
			  else if ($acao == 'sempermissao'){
				  echo '
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Olá, ' . $_SESSION['nomeltm'] . '!</strong> Você não tem permissão para acessar esta página. Caso tenha necessidade de visualizar o conteúdo, favor entrar em contato com o administrador do sistema.
                  </div>';
			  }
            }
        ?>
        </div>
            
          <div class="span12">	      		
	      		<div id="target-1" class="widget">	      			
	      			<div class="widget-content">	      				
			      		<h1>Legal Task Manager - Apresentação</h1>	
                <br>		      		
			      		<p>O <strong>Legal Task Manager</strong> é um sistema de gestão voltado a escritórios de advocacia trabalhista desenvolvido pelo grupo '<strong>G1 do terceiro módulo do Curso Técnico em Informática da ETEC Albert Einstein (2º semestre/2017)</strong>', cujo objetivo é gerenciar toda parte de controle de audiências e atendimento a clientes em potencial.</p>

                <p>O Sistema foi desenvolvido na linguagem <strong>PHP</strong>, utilizando juntamente com a classe <strong>PDO</strong>. O banco de dados utilizado é o famoso <strong>MySQL</strong>.</p>
                        
                <p>O desenvolvimento desse Sistema tem como objetivo aplicar os ensinamentos obtidos durante o decorrer do curso e sanar uma necessidade real de mercado, facilitando a transição entre a fase acadêmica e a profissional.</p>
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div><!-- span 12 -->
        </div><!-- row -->        
     
        
          <!-- <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Últimos Posts</h3>
            </div>
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Título da Postagem </th>
                    <th> Resumo</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                
                </tbody>
              </table>
            </div>
            
          </div>
          
          
        </div> -->
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->