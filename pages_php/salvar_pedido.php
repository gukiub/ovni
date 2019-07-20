<?php 
	 
	include('conexao.php');
	session_start();

	$datahora3 = $_GET['datahora'];
	$endereco3 = $_GET['endereco'];
	$estilo_musical3 = $_GET['estilo_musical'];
	$metodo3 = $_GET['metodo'];
	$instrumento3 = $_GET['instrumento'];
	$status3 = $_GET['status'];
	$desc_pedido3 = $_GET['desc_pedido'];
	$valor_pedido3 = $_GET['valor_pedido'];
	$cpf_clie = $_SESSION['cpf'];
	 	

	//EU DEIXEI ESSES CAMPOS COMENTADOS PQ PRECISA ASSOCIAR O cpf_cliente_fk COM O CPF DO CLIENTE DO BANCO DE DADOS.
	

	$sql = "INSERT INTO  realiza_pedido(
				data_hora_evento,
				endereço_evento,
				estilo_musica_pedido,
				metodo_pagamento,
				instrumento_desejado,
				status_pedido,
				desc_pedido,
				valor_pedido
				-- ,CPF_clie_FK,
				-- CPF_func_FK,
				-- ID_pedido_PK
				)
		
		VALUES
			('".$datahora3."','"
				.$endereco3."','"
				.$estilo_musical3."','"
				.$metodo3."','"
				.$instrumento3."','"
				.$status3."','"
				.$desc_pedido3."','"
				.$valor_pedido3.

				// "','"
				// .$cpf_cliente_fk3."','"
				// .$cpf_func_fk3."','"
				// .$id_pedido_pk3.

				"')";

echo $sql;
$PDO->query($sql); //comando de enviar o sql

 ?>