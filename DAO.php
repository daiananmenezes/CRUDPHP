<?php 
include_once 'conn.php';

function inserir_funcionario($funcionario) 
{
	global $conn; // torna o acesso a variável $conn (origem: conn.php) global

	// formatando parâmetro 'values' do sql 'INSERT'
	$values = "('".$funcionario['nome']. "', ".
			   "'".$funcionario['cargo']."', ".
			   "'".$funcionario['email']."')";
	
	$sql = "INSERT  INTO funcionarios_tb (nome, cargo, email) VALUES $values";

	// executa comando sql
	$result = mysqli_query($conn, $sql);

	// se o comando foi bem sucedido, a função abaixo retornará um valor maior do que zero
	if (mysqli_affected_rows($conn) > 0)
	{
		
		header('location:index.php?msg=cadastrook');
	}
	else
	{
		header('location:index.php?msg=cadastroerro');
	}
}

//função para ixibir todos os funcionarios:
function select_funcionarios()
{

	global $conn; 
	
	$sql = "SELECT * FROM funcionarios_tb"; 


	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{

		$info = '';

		$info .= '<table class="table table-hover table-sm">';
		$info .= 	'<tr>';
		$info .= 		'<th>Id</th>';
		$info .= 		'<th>Nome</th>';
		$info .= 		'<th>Cargo</th>';
		$info .= 		'<th>Email</th>';
		$info .= 		'<th>Ações</th>';
		$info .= 	'</tr>';

		while ($funcionario = mysqli_fetch_assoc($result)) 
		{ 
			
			$info .= '<tr>';
			foreach ($funcionario as $key => $value) 
			{ 
				
				if ($key == 'id_funcionario') 
				{ 
					$id_funcionario = $value;
				}
				
				$info .= "<td>". $value . "</td>";
			}

			$info .= '<td>';
			$info .= 	'<a href="editar.php?id_funcionario='.$id_funcionario.'" class="btn btn-warning">Editar</a>  ';
			$info .= 	'<a href="deletar.php?id_funcionario='.$id_funcionario.'" class="btn btn-danger" onclick="return confirm(\'Tem certeza que deseja excluir este funcionario?\')">Deletar</a>' ;
			$info .= '</td>';



			$info .= '</tr>';
		}
		$info .= '</table>';

		return $info; 

	}
	else 
	{
		return '<h3>Não há funcionarios cadastrados</h3>'; 
	}

}

//função para cadastrar novo usuário na tabela usuarios_tb
function cadastrar_usuario($usuario)
{
	global $conn;

	$values = "('".$usuario['username']."',".
			   "'".$usuario['password']."',".
			   "'".$usuario['email']   ."')";   

	$sql = "INSERT INTO usuarios_tb(username, password, email) VALUES $values";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:login.php?msg=newuser');
	}
	else
	{
		header('location:login.php?msg=usererro');
	}

}

// função para excluir funcionario
function deletar_funcionario($id_funcionario)
{
	global $conn;

	$sql = "DELETE FROM funcionarios_tb WHERE id_funcionario = $id_funcionario";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=delok');
	}
	else
	{
		header('location:index.php?msg=delerro');
	}

}

function buscar_funcionario($id_funcionario)
{
	global $conn;

	$sql = "SELECT * FROM funcionarios_tb WHERE id_funcionario = $id_funcionario";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$funcionario = mysqli_fetch_assoc($result);
	}
	else
	{
		$funcionario = '';
	}

	return $funcionario;
}


function editar_funcionario($editar)
{

	global $conn;

	$values = "nome =  '" 	. $editar['nome']  . "', " .
			  "cargo = '" 	. $editar['cargo'] . "', " .
			  "email = '" 	. $editar['email'] . "'  " ;

	$sql = "UPDATE funcionarios_tb SET $values WHERE id_funcionario = " . $editar['id_funcionario'];
	
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=editarok');
	}
	else
	{
		header('location:index.php?msg=editarerro');

	}

}




?>