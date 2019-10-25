<?php
session_start();

$mysqli = new mysqli("localhost", "ovnism38_root", "admin", "ovnism38_ovni");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$email2 = $_SESSION['email'];
$email = $_GET['email'];
$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$complemento = $_GET['complemento'];
$telefone = $_GET['telefone'];
$celular = $_GET['celular'];
$estado = $_GET['estado'];
$cidade = $_GET['cidade'];
$cep = $_GET['cep'];


if (!empty($nome)) {
	$result = "UPDATE cliente SET nome_clie = '" . $nome. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result);
}
if (!empty($endereco)) {
	$result1 = "UPDATE cliente SET endereco_clie = '" . $endereco. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result1);
}
if (!empty($complemento)) {
	$result2 = "UPDATE cliente SET complemento_clie = '" . $complemento. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result2);
}
if (!empty($telefone)) {
	$result3 = "UPDATE cliente SET tel_fixo_clie = '" . $telefone. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result3);
}
if (!empty($celular)) {
	$result4 = "UPDATE cliente SET tel_celular_clie = '" . $celular. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result4);
}
if (!empty($cidade)) {
	$result5 = "UPDATE cliente SET cidade_clie = '" . $cidade. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result5);
	
}
if (!empty($cep)) {
	$result6 = "UPDATE cliente SET cep_clie = '" . $cep. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result6);

}
if (!empty($estado)) {
	$result7 = "UPDATE cliente SET estado_clie = '" . $estado. "' WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result7);

}
if (!empty($email)) {
	$result8 = "UPDATE cliente SET email_clie = '" . $email. "', verify_clie = 0 WHERE email_clie = '" . $email2 . "'";
	$mysqli->query($result8);
	$_SESSION['email'] = $email;
	$_SESSION['verify'] = 0;

}


	header('Location: perfil_cliente.php');



?>