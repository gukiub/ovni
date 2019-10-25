<?php
session_start();

  if($_SESSION['logged_in'] == false){
    echo "<script>document.location='login.php'</script>";
  };
   
if (isset($_SESSION['verify'])) {

	if ($_SESSION['verify']==0) {


		$email = $_SESSION['email'];
		$hash = $_SESSION['senha'];
		$name = $_SESSION['nome'];

		$to       = $email;
	    $subject  = 'Verificação de email(Ovnis.mus.br)';
	    $message_body='
	      Olá, ' . $name . ',

	      Obrigado por se registrar no site Ovnis.mus.br!

	      Por favor clique nesse link para confirmar o e-mail cadastrado:

	      http://www.ovnis.mus.br/pages_php/verify2.php?email='.$email.'&coisa='.$hash;

	      mail($to,$subject,$message_body);

	    $_SESSION['message'] = "
	    Olá, ". $name .",<br>
            <br>
	    Um link de confirmação foi enviado para o seu e-mail!<br>
            <br>
	    Verifique na caixa de spam caso não encontre na pasta principal";
            echo "<script>document.location='../pages_php/mensagem.php';</script>";
  	    header('location: ../pages_php/mensagem.php');

	}
}
?>

	