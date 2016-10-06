<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		
		//Busca na tabela o usuário (cliente)
		$result_usuario = "SELECT * FROM acesso_usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		$_SESSION['usuarioEmail'] = $resultado['email'];
		$_SESSION['usuarioSenha'] = $resultado['senha'];
		$_SESSION['usuarioId'] = $resultado['ID'];

		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){

			header("Location: contato.php");

		}else{	
			//mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login.php");
		}
		// campo nao preenchido
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}

?>