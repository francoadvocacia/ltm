<?php 

	if(isset($_REQUEST['sair'])) {
		session_destroy();
		session_unset(['usuarioltm']);
		session_unset(['senhaltm']);
		session_unset(['nomeltm']);
		session_unset(['nivelacesso']);
		header('Location: index.php');
	}

?>
