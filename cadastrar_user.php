<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Funcionários System - Cadastro de Usuário</title>
</head>
<body class="container-fluid">

	<h1>Funcionários System - Novo Usuário</h1>

	<h4>Já possi cadastro? Clique <a href="login.php">aqui</a> para logar</h4>

	<p><h3>Novo Usuário:</h3></p>

	<?php
		if(isset($_POST['cadastrar']))
	{
		include_once 'func.php';
		verificar_cadastrar_user();
	}
	?>

	<form action="cadastrar_user.php" method="post">
		<p>
			<label>Username:</label><br>
			<input type="text" name="username" maxlength="30">
		</p>
		<p>
			<label>Password:</label><br>
			<input type="text" name="password" maxlength="10">
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" maxlength="30">
		</p>

		<button type="submit" name="cadastrar" class="btn btn-info">Cadastrar</button>
	</form>
	
	?>

</body>
</html>