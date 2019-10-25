<?php
session_start();

$mysqli = new mysqli("localhost", "ovnism38_root", "admin", "ovnism38_ovni");
$admin = $_GET['admin'];

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($admin==="admin") {
    
    $email2 = $_SESSION['email'];

        $data = date('Y-m-d');
        $data = DateTime::createFromFormat('Y-m-d', $data);
        $data->add(new DateInterval('P1M')); // 1 Mês até o proximo pagamento
            $dota2 = $data->format('Y-m-d');
        $result = "UPDATE funcionario SET data_expirar = '" . $dota2. "' WHERE email_func = '" . $email2 . "'";
        $mysqli->query($result); //comando de enviar o sql
              
    header('Location: chamado.php');
}else{

    $_SESSION['message'] = "Acesso Restrito!";
    header('location:mensagem.php');
  	include('refresh.php');
}
?>