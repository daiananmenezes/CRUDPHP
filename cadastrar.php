<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Funcionários System - Cadastro</title>
</head>
<body class="container-fluid">

	<h1>Funcionários System - Cadastro</h1>

	<p><?php include_once 'menu.php'; ?></p>

	<?php

	//se o formulario for submetido
	if(isset($_POST['cadastrar']))
	{
		//inclui arquivos de funçoes gerais
		include_once 'func.php';
		verificar_cadastro();
	}


	?>

	<h3>Novo Funcionário:</h3>

	<form action="cadastrar.php" method="post">
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="30">
		</p>
		<p>
			<label>Cargo</label><br>
			<select name="cargo">
				<option value="Programador">Programador</option>
				<option value="Gerente">Gerente</option>
				<option value="Analista">Analista</option>
				<option value="DBA">DBA</option>
				<option value="Arquiteto de Sistemas">Arquiteto de Sistemas</option>
				<option value="Designer">Designer</option>
			</select>
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" maxlength="30">
		</p>

		<button type="submit" name="cadastrar" class="btn btn-info">Cadastrar</button>
	</form>
	

	</body>
</html>