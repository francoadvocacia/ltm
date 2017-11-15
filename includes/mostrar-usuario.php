<?php 

$con = mysqli_connect("localhost","root","","usuarios_sistema");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (isset($_SESSION['usuarioltm']) && isset($_SESSION['senhaltm'])){
	$usuariologado = $_SESSION['usuarioltm'];
	$buscar_usuarios = "SELECT * FROM users WHERE usuario = '$usuariologado' OR email = '$usuariologado'";
	$exibir_usuarios = mysqli_query($con, $buscar_usuarios);

	while ($nome_usuario = mysqli_fetch_assoc($exibir_usuarios)) {
		
		$_SESSION['nomeltm'] = $nome_usuario['nome'];
		$_SESSION['nivelacesso'] = $nome_usuario['nivel_acesso'];
	}
}

?>