<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>contato</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- flickity import new carrosel -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
<!-- font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen">
<!-- animate.css pra usar com wow.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" media="screen">

<link rel="stylesheet" type="text/css" href="assets/css/site.css">

<!-- google-fonts -->
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">




<?php 

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "testes";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
		$query = "SELECT * FROM acesso_usuario";
		$variavel = mysqli_query($conn,$query);
	}	

?>


</head>
<body>
	<div id="contato" class="container col-sm-4 col-sm-offset-4">
		<form action="envia_email.php" class="form-inline" method="post">

			<div id="sobreDono" class="form-group">
				<p>Sobre você</p><br>

				<div class="input-group email col-sm-10">
					<div class="input-group-addon">Email @:</div>
					<input id="email" class="form-control" type="email" name="email" placeholder="Email">
				</div>

				<div class="input-group nome col-sm-10">
					<div class="input-group-addon">Nome:</div>
					<input id="nomeDono" class="form-control" type="text" name="nomeDono" placeholder="Nome">
				</div>
				<div class="input-group sexo">
					<span>Sexo:</span>
					<label><input id="sexoDono" type="radio" name="sexoDono">Masculino</label>
					<label><input id="sexoDono" type="radio" name="sexoDono">Feminino</label>
					
				</div>	
			</div>

			<div id="sobreCachorro" class="form-group">
				<p>Sobre nosso hóspede</p><br>

				<div class="input-group nome col-sm-10">
					<div class="input-group-addon">Nome:</div>
					<input id="nomeCachorro" class="form-control" type="text" name="nomeCachorro" placeholder="Nome">
				</div>
					
				<div class="input-group raca col-sm-10">
					<div class="input-group-addon">Raça:</div>
					<input id="raçaCachorro" class="form-control" type="text" name="raçaCachorro" placeholder="Raça">
				</div>

				<div class="input-group cor col-sm-10">
					<div class="input-group-addon">Cor:</div>
					<input id="corCachorro" class="form-control" type="text" name="corCachorro" placeholder="Cor">
				</div>

				<div class="input-group idade col-sm-10">
					
					<input id="idadeCachorro" class="form-control" type="number" name="idadeCachorro" placeholder="Idade em anos">
				</div>

				<div class="input-group sexo">
					<span>Sexo:<span>
					<label><input id="sexoDono" type="radio" name="sexoCachorro">Masculino</label>
					<label><input id="sexoDono" type="radio" name="sexoCachorro">Feminino</label>
				</div>	
			</div>

						<div id="sobreCachorro" class="form-group">
				<p>Sobre a estádia</p><br>

				<div class="input-group nome col-sm-10">
				<div class="input-group-addon">Suíte:</div>
				<select onchange="$('#login').val($('#senha option:selected' ).text())" id="senha" class="form-control" name="senha" >
					<option value="0">Selecione</option>
					<?php 
					while($produto = mysqli_fetch_assoc($variavel)) {
					    echo "<option value=". $produto['senha'] .">". $produto['login'] ."</option>";
					}
					 ?>	
					</select>
				</div>
				
					
			</div>

			<div id="botaoSubmit" class="form-group">
				<input type="hidden" id="login" name="login">
				<input type="submit" class="sb btn btn-primary" value="Enviar">
			</div>

		</form>					
	</div>

<!--import de scripts -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- flickity import new carrosel 
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>-->
<script type="text/javascript" src="vendor/flickity/flickity.js"></script>
<!--wow import -->


</body>
</html>