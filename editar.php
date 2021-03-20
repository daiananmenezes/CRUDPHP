<?php include_once 'lock.php'; 
include_once'DAO.php';

if(isset($_POST['editar']))
{
	$editar['id_funcionario'] 		= $_POST['id_funcionario'];
	$editar['nome'] 				= $_POST['nome'];
	$editar['cargo'] 				= $_POST['cargo'];
	$editar['email'] 				= $_POST['email'];

	editar_funcionario($editar);
}
else if(empty($_GET['id_funcionario']))
{
	header('location:index.php?msg=invalidid');
}
else
{
	$id_funcionario = $_GET['id_funcionario'];
	
	$funcionario = buscar_funcionario($id_funcionario);

	if(empty($funcionario))	
	{
		header('location:index.php?msg=errobusca');
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Funcionários System - Editar</title>
</head>
<body class="container-fluid">

	<h1>Funcionários System - Editar</h1>

	<p><?php include_once 'menu.php'; ?></p>

	<h3>Editar Funcionário:</h3>

	<form action="editar.php" method="post">
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="100" 
			value="<?php echo $funcionario['nome']; ?>">
		</p>
		<p>
			<label>Cargo</label><br>
			
			<select name="cargo">
				<option value="Programador"
				<?php if($funcionario['cargo'] == 'Programador') echo "selected"; ?>>Programador</option>
				<option value="Gerente"
				<?php if($funcionario['cargo'] == 'Gerente') echo "selected"; ?>>Gerente</option>
				<option value="Analista"
				<?php if($funcionario['cargo'] == 'Analista') echo "selected"; ?>>Analista</option>
				<option value="DBA"
				<?php if($funcionario['cargo'] == 'DBA') echo "selected"; ?> >DBA</option>
				<option value="Arquiteto de Sistemas"
				<?php if($funcionario['cargo'] == 'Arquiteto de Sistemas') echo "selected"; ?>>Arquiteto de Sistemas</option>
				<option value="Designer"
				<?php if($funcionario['cargo'] == 'Designer') echo "selected"; ?>>Designer</option>
			</select>
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" maxlength="50" 
			value="<?php echo $funcionario['email']; ?>">
		</p>

		<input type="hidden" name="id_funcionario" value="<?php echo $funcionario['id_funcionario']; ?>">

		<button type="submit" name="editar" class="btn btn-warning">Editar</button>
	</form>
	
	?>

</body>
</html>