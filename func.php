<?php

include_once 'DAO.php';
function verificar_cadastro()
{
	if(empty($_POST['nome']) || empty($_POST['email']))
	{
		echo'<h3 class="alert alert-warning">Por favor, preencha todos os campos</h3>'; 
	}
	else
	{
		$funcionario['nome']     = $_POST['nome'];
		$funcionario['cargo']    = $_POST['cargo'];
		$funcionario['email']    = $_POST['email'];

		inserir_funcionario($funcionario);
	}
}

function verificar_cadastrar_user()
{
	if(empty($_POST['username']) || 
	   empty($_POST['password']) || 
	   empty($_POST['email']))
	{
		echo '<h3 class="alert alert-warning">Por favor, preencha todos os campos</h3>';
	}
	else
	{
		$usuario['username'] = $_POST['username'];
		$usuario['password'] = $_POST['password'];
		$usuario['email']	 = $_POST['email'];

		cadastrar_usuario($usuario);

	}
}

function ixibir_funcionarios()
{
	echo select_funcionarios();
}

function verificar_msg()
{
	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		switch ($msg) 
		{
			case 'cadastrook':
				$texto = "Funcionario cadastrada com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'cadastroerro':
				$texto = "Erro ao cadastrar funcionario. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'newuser':
				$texto = "Usuário cadastrado com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'usererro':
				$texto = "Erro ao cadastrár usuário. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'delok':
				$texto = "funcionario excluída com com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'delerro':
				$texto = "Erro ao excluir funcionario. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'editarok':
				$texto = "Funcionario editado com com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'editarerro':
				$texto = "Erro ao editar funcionario. Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;
			
			case 'errobusca':
				$texto = "ATENÇÃO: não foi possível encontrar Funcionario especificado. <br> 
				Por favor, tente novamente.";
				$classe = "alert alert-warning";
				break;

			case 'invalidid':
				$texto = "ATENÇÃO: não foi possível carregar funcionario com id informado. <br> 
				Por favor, tente novamente.";
				$classe = "alert alert-warning";
				break;

			default:
				$texto = '';
				$classe = '';
				break;
		}

		echo '<h3 class="'.$classe.'">'.$texto.'</h3>';
	}

}

?>