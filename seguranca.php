<?php
	if((empty($_SESSION['usuarioEmail'])) || (empty($_SESSION['usuarioSenha']))){
		//mensagem de erro
			$_SESSION['loginErro'] = "Área restrita apenas para usuários cadastrados";
			header("Location: login.php");
	}

?>