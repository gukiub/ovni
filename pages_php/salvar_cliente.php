<?php 
	 
	include('conexao.php');

	$nome1 = $_GET['nome']; 
	$email1 = $_GET['email'];
	$telefone1 = $_GET['telefone'];
	$celular1 = $_GET['celular'];
	$senha1 = $_GET['senha'];
	$endereco1 = $_GET['endereco'];
	$cpf1 = $_GET['cpf'];
	$complemento1 = $_GET['complemento'];
	$cidade1 = $_GET['cidade'];
	$estado1 = $_GET['estado'];
	$idade1 = $_GET['idade'];
	$cep1 = $_GET['cep'];
	

	$sql = "INSERT INTO cliente
				(nome_clie, 
				email_clie,
				idade_clie, 
				tel_fixo_clie, 
				tel_celular_clie,
				senha_clie, 
				endereço_clie,
				complemento_clie,
				cidade_clie,
				estado_clie,
				cep_clie,
				CPF_clie
				)
		VALUES
			('".$nome1."','"
				.$email1."','"
				.$idade1."','"
				.$telefone1."','"
				.$celular1."','"
				.$senha1."','"
				.$endereco1."','"
				.$complemento1."','"
				.$cidade1."','"
				.$estado1."','"
				.$cep1."','"
				.$cpf1."')";

$PDO->query($sql); //comando de enviar o sql



 ?>