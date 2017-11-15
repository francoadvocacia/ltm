<?php 

session_start();

if(!isset($_GET['acao'])){
	if((!isset($_SESSION['nomenovasenha'])) || (!isset($_SESSION['usuarionovasenha']))){
		header('Location: restaurasenha.php');
	}
	else{
		$nome = $_SESSION['nomenovasenha'];
		$usuario = $_SESSION['usuarionovasenha'];
	}
}
else{
	if(!isset($_SESSION['usuarionovasenha'])){
		header('Location: ../../index.php');
	}
	else{
		$acao = $_GET['acao'];
		$usuario = $_SESSION['usuarionovasenha'];
	}
}
	
if(isset($_POST['btn-salvarsenha'])){
	
	$senhanova = $_POST['senha-login'];
	$confirmarsenhanova = $_POST['confirma-login'];
	
	if($confirmarsenhanova != "123mudar" || $senhanova != "123mudar"){
		if($senhanova != $confirmarsenhanova){
			echo '<div class="alert alert-danger" role="alert">
					<strong>Atenção!</strong> As senhas digitadas não são iguais.
				</div>';
		}
		else{
			$senhanova = sha1($senhanova);
			if(isset($nome)){
				$atualiza_usuario = "UPDATE users SET senha = '$senhanova' WHERE BINARY nome = :nome AND BINARY usuario = :usuario";	
			}
			else{
				$novousuario = $_POST['usuario-login'];
				$atualiza_usuario = "UPDATE users SET senha = '$senhanova', usuario = '$novousuario' WHERE BINARY email = :usuario";
			}

			try{
				$result = $conexao->prepare($atualiza_usuario);
				if(isset($nome)){
					$result->bindParam(':nome', $nome, PDO::PARAM_STR);	
				}
				$result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
				$result->execute();
				$contar = $result->rowCount();
				if($contar > 0){
					echo '<div class="alert alert-success" role="alert">
								<strong>Senha alterada com sucesso!</strong> Você será redirecionado para a tela de login.
							</div>';
					session_destroy();
					session_unset(['nomenovasenha']);
					session_unset(['usuarionovasenha']);
					header("Refresh: 1, ../../index.php");
				}
				else{
					echo '<div class="alert alert-danger" role="alert">
							<strong>Negado!</strong> Favor confirmar os dados inseridos.
						</div>';
				}
			}
			catch(PDOException $e){
				echo 'Erro: ' . $e->getMessage();
			}

		}	
	}
	else {
		echo '<div class="alert alert-danger" role="alert">
				<strong>Atenção!</strong> Você precisa inserir uma senha diferente da padrão de primeiro acesso.
			</div>';
	}
}

?>

