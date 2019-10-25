<?php
session_start();

$mysqli = new mysqli("localhost", "ovnism38_root", "admin", "ovnism38_ovni");
	$get = $_GET['id'];


	$result = "DELETE FROM realiza_pedido WHERE ID_pedido_PK = '" . $get . "'"; 
	
	$mysqli->query($result);

	header('location: ../pages_php/chamado_atendido.php');

?>