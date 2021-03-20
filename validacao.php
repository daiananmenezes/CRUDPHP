<?php 
if (empty($_POST['username']) || empty($_POST['password']))
{

	header('location:login.php?msg=empty');
}
else
{
	// armazena os dados do form em variáveis locais
	$username = $_POST['username'];
	$password = $_POST['password'];

	// incluir arquivo de conexão abaixo:
	include_once 'conn.php';

	// criar comando sql buscando na tabela de usuarios pelo registro que tenha o mesmo username e password informados:
	$sql = "SELECT * FROM usuarios_tb WHERE username LIKE '$username' AND password LIKE '$password' ";

	// executar comando sql:
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0) 
	{
		// transformar o retorno do select num array associativo:
		$login = mysqli_fetch_assoc($result);

		// iniciar a sessão
		session_start();

		// registrar as variáveis de sessão abaixo:

		$_SESSION['id_usuario'] = $login['id_usuario'];
		$_SESSION['username']   = $login['username'];
		$_SESSION['password']   = $login['password'];
		$_SESSION['email']      = $login['email'];

		// redirecionar usuário para pagina restrita (nesse caso, é a index.php)
		header('location:index.php');
	}
	else // senão (se o username e password estão errados (não existem na tabela))
	{
		header('location:login.php?msg=invalid');
	}

}
?>