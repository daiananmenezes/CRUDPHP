<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Funcionários System - Login</title>
</head>
<body class="container-fluid">


	<h1>Entrar no Sistema</h1>

	<form action="validacao.php" method="post">
		
		<p>
			<label>Nome de usuário:</label><br>
			<input type="text" name="username" maxlength="30">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="password" maxlength="10">
		</p>

		<p>
			<button type="submit" class="btn btn-info">Login</button> 
			| <a href="cadastrar_user.php">Cadastre-se</a>
		</p>

	</form>

</body>
</html>