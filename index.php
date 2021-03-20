<?php include_once 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Funcionários System - Home</title>
</head>
<body class="container-fluid">

	<h1>Funcionários System - Home</h1>

	<p><?php include_once 'menu.php'; ?></p>

	<?php
	include_once 'func.php';

	verificar_msg();

	ixibir_funcionarios();

	?>

	<h3>Bem-vindo, <?php echo $_SESSION['username'] ?></h3>

	<p><a href="logout.php">Sair</a></p>

</body>
</html>