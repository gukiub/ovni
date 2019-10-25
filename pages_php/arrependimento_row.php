<?php
session_start();

$mysqli = new mysqli("localhost", "ovnism38_root", "admin", "ovnism38_ovni");
	$get = $_GET['id'];


	$result = "UPDATE realiza_pedido SET CPF_func_FK='', status_pedido='0' WHERE ID_pedido_PK = '" . $get . "'";

 	$mysqli->query($result);
	header('location: ../pages_php/chamado_atendido.php');

?>