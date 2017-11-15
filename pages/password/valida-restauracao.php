<?php 

session_start();

if(isset($_POST['btn-restaurar'])){
	
	$nome = $_POST['nome-login'];
	$usuario = trim(strip_tags($_POST['usuario-login']));
	$email = trim(strip_tags($_POST['email-login']));
	$cpf = trim(strip_tags($_POST['cpf-login']));
	$datanascimento = trim(strip_tags($_POST['datanascimento-login']));

	if($nome == "" || $usuario == "" || $email == "" || $cpf == "" || $datanascimento == ""){
		echo '<div class="alert alert-danger" role="alert">
				<strong>Atenção!</strong> Preencha todos os campos para a confirmação.
			</div>';
	}
	else{
		$busca_usuario = "SELECT * FROM users WHERE BINARY nome = :nome AND BINARY usuario = :usuario AND BINARY email = :email AND BINARY cpf = :cpf AND data_nascimento = :data_nascimento";

		try{
		$result = $conexao->prepare($busca_usuario);
		$result->bindParam(':nome', $nome, PDO::PARAM_STR);
		$result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->bindParam(':cpf', $cpf, PDO::PARAM_STR);
		$result->bindParam(':data_nascimento', $datanascimento, PDO::PARAM_STR);
		$result->execute();
		$contar = $result->rowCount();
		if($contar > 0){
			echo '<div class="alert alert-success" role="alert">
						<strong>Sucesso!</strong> Usuário encontrado.
					</div>';
			$_SESSION['nomenovasenha'] = $nome;
			$_SESSION['usuarionovasenha'] = $usuario;
			header("Refresh: 1, alterarsenha.php");
		}
			else{
				echo '<div class="alert alert-danger" role="alert">
						<strong>Negado!</strong> Usuário não encontrado. <br>Favor confirmar os dados inseridos.
					</div>';
			}
		}
		catch(PDOException $e){
			echo 'Erro: ' . $e->getMessage();
		}

	}
}



?>
