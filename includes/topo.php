<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barralogin">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Legal Task Manager</a>
    </div>
    <div class="collapse navbar-collapse" id="barralogin">
		<ul class="nav navbar-nav navbar-right">
		  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php include('mostrar-usuario.php'); echo $_SESSION['nomeltm']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Perfil</a></li>
              <li><a href="?sair" onclick="return confirm('Deseja realmente sair do sistema?')">Sair</a></li>
            </ul>
          </li>
		</ul>
  	</div>
</div>
</nav> 
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="<?php echo $ativahome; ?>"><a href="home.php"><i class="icon-home"></i><span>Homepage</span> </a> </li>
        <li class="dropdown <?php echo $ativacalendario . " " . $acessocalendario; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-calendar"></i><span>Agendamentos</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="?acao=calendario">Visualizar Calendário</a></li>
            <li><a href="?acao=agendados">Visualizar Lista</a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo $ativacliente; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span>Clientes</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $acessocliente; ?>"><a href="?acao=adicionacliente">Adicionar Cliente</a></li>
            <li class="<?php echo $acessocliente; ?>"><a href="?acao=visualizaclientes">Visualizar Clientes</a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo $ativaprocesso; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-legal"></i><span>Processos</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $acessoprocesso ;?>"><a href="?acao=adicionaprocesso">Adicionar Processo</a></li>
            <li class="<?php echo $acessoprocesso ;?>"><a href="?acao=visualizaprocessos">Visualizar Processos</a></li>
          </ul>
        </li>
        <li class="dropdown <?php echo $ativaaudiencia; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-briefcase"></i><span>Audiências</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="<?php echo $acessoaudiencia ;?>"><a href="?acao=adicionaaudiencia">Adicionar Audiência</a></li>
            <li class="<?php echo $acessoaudiencia ;?>"><a href="?acao=visualizaaudiencias">Visualizar Audiências</a></li>
          </ul>
        </li>
        <li class="<?php echo $acessogerenciamento . ' ' . $ativagerenciamento; ?>"><a href="?acao=gerenciamento"><i class="icon-cogs"></i><span>Manutenção do Site</span></a></li>
        <li></li>
      </ul>
    </div>
  </div>
</div>


