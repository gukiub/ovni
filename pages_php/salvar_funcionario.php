<?php 
	 
	include('conexao.php');

	$nome2 = $_GET['nome']; 
	$email2 = $_GET['email'];
	$telefone2 = $_GET['telefone'];
	$instrumento = $_GET['instrumento'];
	$estilo_musical = $_GET['estilo_musical'];
	$senha2 = $_GET['senha'];
	$endereco2 = $_GET['endereco'];
	$disp_func = $_GET['disp_func'];
	$cpf2 = $_GET['cpf'];
	$complemento2 = $_GET['complemento'];
	$cidade2 = $_GET['cidade'];
	$estado2 = $_GET['estado'];
	$idade2 = $_GET['idade'];
	$cep2 = $_GET['cep'];
	$descricao2 = $_GET['descricao_func'];
	

	$sql = "INSERT INTO funcionario
				(nome_func, 
				cpf_func,
				endereco_func,
				complemento_func,
				idade_func,
				cidade_func,
				estado_func,
				tel_func,
				instrumento,
				senha_func,
				cep_func,
				email_func,
				estilo_musical,
				disp_func,
				desc_func
				)
		
		VALUES
			('".$nome2."','"
				.$cpf2."','"
				.$endereco2."','"
				.$complemento2."','"
				.$idade2."','"
				.$cidade2."','"
				.$estado2."','"
				.$telefone2."','"
				.$instrumento."','"
				.$senha2."','"
				.$cep2."','"
				.$email2."','"
				.$estilo_musical."','"
				.$disp_func."','"
				.$descricao2."')";

$PDO->query($sql); //comando de enviar o sql

 ?>