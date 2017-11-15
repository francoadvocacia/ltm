<?php
	if(isset($_GET['acao'])) {
		if(!isset($_POST['logar'])){
			$acao = $_GET['acao'];
			if ($acao == 'negado') {
				echo '<div class="alert alert-danger" role="alert">
							<strong>Erro ao acessar!</strong> Você precisa estar logado para visualizar esta página.
						</div>';
			}
		}
	}
	if(isset($_POST['logar'])){
		
		$usuario = trim(strip_tags($_POST['usuario']));
		$senha = trim(strip_tags($_POST['senha']));

		$select = "(SELECT * FROM users WHERE BINARY senha = :senha AND (BINARY usuario = :usuario OR email = :usuario))";

		try{
			$senha = sha1($senha);
			$result = $conexao->prepare($select);
			$result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			$result->bindParam(':senha', $senha, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			if($contar > 0) {
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				if($senha != "123mudar") {
					$_SESSION['usuarioltm'] = $usuario;
					$_SESSION['senhaltm'] = $senha;
					echo '<div class="alert alert-success" role="alert">
							<strong>Confirmado!</strong> Login realizado com sucesso.
						</div>';
					header("Refresh: 2, home.php?acao=boasvindas");
				}
				else {
					$usuario = $_POST['usuario'];
					$_SESSION['usuarionovasenha'] = $usuario;
					header("Location: pages/password/alterarsenha.php?acao=primeiroacesso");
				}
			}
			else {
				echo '<div class="alert alert-danger" role="alert">
						<strong>Negado!</strong> Favor confirmar os dados inseridos.
					</div>';
			}
		}
		catch(PDOException $e){
			echo 'Erro: ' . $e->getMessage();
		}	
	}

?>