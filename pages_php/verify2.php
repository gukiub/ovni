<?php

  session_start();

  ini_set('display_errors', 1); 
  ini_set('display_startup_errors', 1); 
  error_reporting(E_ALL);
  
  if($_SESSION['logged_in'] == false){
    echo "<script>document.location='login.php'</script>";
  };
   

 // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
  $con = mysqli_connect("localhost", "ovnism38_root", "admin") or die
   ("Sem conexão com o servidor");
  $select = mysqli_select_db($con, "ovnism38_ovni") or die("Sem acesso ao DB, Entre em 
  contato com o Administrador, ovni@gmail.com");
   
if (isset($_GET['coisa']) && isset($_GET['email'])) //se foi enviado o formulário
{
  $senha = $_GET['coisa'];
  $email = $_GET['email'];

	$result1 = $con->query("SELECT * FROM funcionario 
        WHERE (email_func = '".$email."')"); //checar se foi login de um funcionario
    $result2 = $con->query("SELECT * FROM cliente 
        WHERE (email_clie ='".$email."')"); //checar se foi login de um funcionario
    


	if (mysqli_num_rows($result1) > 0) {//checar se foi login de musico

		$row = $result1->fetch_assoc();
		$senha2 = $row['senha_func'];

	  	if ($senha == $senha2) { //se as duas senhas inseridas são iguais
		    //enviar dados pra alterar o banco de dados

		    $sql = "UPDATE funcionario SET 
			verify_func=1
		    WHERE 
		    email_func='" . $email . "'";

		    $con->query($sql); //comando de enviar o sql

		    $_SESSION['message'] = "Obrigado por verificar a sua conta!";
		    header("location:mensagem.php");
	  	}

	}elseif (mysqli_num_rows($result2) > 0) {//checar se foi login de cliente

		$row = $result2->fetch_assoc();
		$senha2 = $row['senha_clie'];
		
	  	if ($senha == $senha2) { //se as duas senhas inseridas são iguais

			$sql = "UPDATE cliente SET 
			verify_clie=1
			WHERE 
			email_clie='" . $email . "'"; 

			$con->query($sql); //comando de enviar o sql

			$_SESSION['message'] = "Obrigado por verificar a sua conta!";
			header("location:mensagem.php");
		}
    }else{
    	echo "deu ruim";
    }
  }else{
  	echo "sem informações";
  }
?>