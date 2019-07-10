<?php 
	 
	include('conexao.php');

	$nome1 = $_GET['nome']; 
	$email1 = $_GET['email'];
	$telefone1 = $_GET['telefone'];
	$celular1 = $_GET['celular'];
	$senha1 = $_GET['senha'];
	$endereco1 = $_GET['endereco'];
	$cpf1 = $_GET['cpf'];
	$imagem1 = $_GET['imagem'];
	

	$sql = "INSERT INTO cliente
			(nome_clie, 
				email_clie, 
				tel_fixo_clie, 
				tel_celular_clie, 
				senha_clie, 
				endereço_clie, 
				CPF_clie,
				img_perfil)
		VALUES
			('".$nome1."','"
				.$email1."','"
				.$telefone1."','"
				.$celular1."','"
				.$senha1."','"
				.$endereco1."','"
				.$cpf1."','"
				.$imagem1."')";

$PDO->query($sql); //comando de enviar o sql

 ?>