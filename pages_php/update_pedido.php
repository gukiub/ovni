<?php 
	 
	include('conexao.php');
	session_start();

	$idpedido = $_GET['id'];
	 	

	//EU DEIXEI ESSES CAMPOS COMENTADOS PQ PRECISA ASSOCIAR O cpf_cliente_fk COM O CPF DO CLIENTE DO BANCO DE DADOS.
	

	$sql = "UPDATE realiza_pedido SET 
			status_pedido=1,
			CPF_func_FK='" . $_SESSION['cpf'] . "'

			WHERE 

			ID_pedido_PK=" . $idpedido;

$PDO->query($sql); //comando de enviar o sql

header('location: ../index.php')

?>