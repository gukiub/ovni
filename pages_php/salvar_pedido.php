<?php 
	 
	include('conexao.php');
	session_start();

	$data_evento3 = $_GET['data'];
	$hora_evento3 = $_GET['hora'];
	$endereco_evento3 = $_GET['endereco'];
	$cep_evento3 = $_GET['cep'];
	$estilo_musical3 = $_GET['estilo_musical'];
	$cidade_evento3 = $_GET['cidade'];
	$instrumento3 = $_GET['instrumento'];
	$desc_pedido3 = $_GET['descricao'];
	$cpf_clie = $_SESSION['cpf'];
	 	

	//EU DEIXEI ESSES CAMPOS COMENTADOS PQ PRECISA ASSOCIAR O cpf_cliente_fk COM O CPF DO CLIENTE DO BANCO DE DADOS.
	

	$sql = "INSERT INTO  realiza_pedido(
				data_evento,
				hora_evento,
				cep_evento,
				endereço_evento,
				cidade_evento,
				estilo_musica_pedido,
				instrumento_desejado,
				status_pedido,
				desc_pedido,
				CPF_clie_FK
				)
		
		VALUES
			('".$data_evento3."','"
				.$hora_evento3."','"
				.$cep_evento3."','"
				.$endereco_evento3."','"
				.$cidade_evento3."','"
				.$estilo_musical3."','"
				.$instrumento3."','"
				."0"."','"
				.$desc_pedido3."','"
				.$cpf_clie.
				"')";
$PDO->query($sql); //comando de enviar o sql


header('location: ../index.php')

 ?>

 <!-- acrescentar campos para ter contato com o cliente que realizou o pedido -->
