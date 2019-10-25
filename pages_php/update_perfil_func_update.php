<?php
session_start();

$mysqli = new mysqli("localhost", "ovnism38_root", "admin", "ovnism38_ovni");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$email = $_GET['email'];
$email2 = $_SESSION['email'];
$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$complemento = $_GET['complemento'];
$telefone = $_GET['telefone'];
$estado = $_GET['estado'];
$cidade = $_GET['cidade'];
$cep = $_GET['cep'];
$instrumento = $_GET['instrumento'];
$estilo = $_GET['estilo_musical'];
$desc = $_GET['descricao_func'];

if (!empty($nome)) {
  $result = "UPDATE funcionario SET nome_func = '" . $nome. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result);
}
if (!empty($endereco)) {
  $result1 = "UPDATE funcionario SET endereco_func = '" . $endereco. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result1);
}
if (!empty($complemento)) {
  $result2 = "UPDATE funcionario SET complemento_func = '" . $complemento. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result2);
}
if (!empty($telefone)) {
  $result3 = "UPDATE funcionario SET tel_func = '" . $telefone. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result3);
}
if (!empty($estado)) {
  $result4 = "UPDATE funcionario SET estado_func = '" . $estado. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result4);
}
if (!empty($cidade)) {
  $result5 = "UPDATE funcionario SET cidade_func = '" . $cidade. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result5);
  
}
if (!empty($cep)) {
  $result6 = "UPDATE funcionario SET cep_func = '" . $cep. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result6);

}
if (!empty($instrumento)) {
  $result7 = "UPDATE funcionario SET instrumento = '" . $instrumento. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result7);

}
if (!empty($estilo)) {
  $result8 = "UPDATE funcionario SET estilo_musical = '" . $estilo. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result8);

}
if (!empty($desc)) {
  $result9 = "UPDATE funcionario SET desc_func = '" . $desc. "' WHERE email_func = '" . $email2 . "'";
  $mysqli->query($result9);

}

if (!empty($email)) {
  $result10 = "UPDATE funcionario SET email_func = '" . $email. "', verify_func = 0 WHERE funcionario.email_func = '" . $email2 . "'";
  $mysqli->query($result10);
  $_SESSION['email'] = $email;
  $_SESSION['verify'] = "0";
}


    //$result = "UPDATE funcionario SET data_expirar = '" . $dota2. "' WHERE email_func = '" . $email2 . "'";
    //$mysqli->query($result); //comando de enviar o sql
        
  header('Location: perfil_musico.php');



?>