<?php

  session_start();

  ini_set('display_errors', 0); 
  ini_set('display_startup_errors', 0); 
  error_reporting(E_ALL);

 // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
  $con = mysqli_connect("localhost", "ovnism38_root", "admin") or die
   ("Sem conexão com o servidor");
  $select = mysqli_select_db($con, "ovnism38_ovni") or die("Sem acesso ao DB, Entre em 
  contato com o Administrador, ovni@gmail.com");
   
if (isset($_GET['senha1']) && isset($_GET['senha2']) && isset($_GET['email'])) //se foi enviado o formulário
{
  $senha1 = $_GET['senha1'];
  $senha2 = $_GET['senha2'];
  $email = $_GET['email'];

  if ($senha1 == $senha2) { //se as duas senhas inseridas são iguais
    //enviar dados pra alterar o banco de dados

    $result1 = $con->query("SELECT * FROM funcionario 
        WHERE (email_func = '".$email."')"); //checar se foi login de um funcionario
    $result2 = $con->query("SELECT * FROM cliente 
        WHERE (email_clie ='".$email."')"); //checar se foi login de um funcionario
    $senha_hash = password_hash($senha1, PASSWORD_DEFAULT);

    if (mysqli_num_rows($result1) > 0) {//checar se foi login de musico

      $sql = "UPDATE funcionario SET 
      senha_func='" . $senha_hash . "'
      WHERE 
      email_func='" . $email . "'";

      $con->query($sql); //comando de enviar o sql

      $_SESSION['message'] = "Você já pode logar com sua nova senha!";
      header("location:mensagem.php");

    }elseif (mysqli_num_rows($result2) > 0) {//checar se foi login de cliente

      $sql = "UPDATE cliente SET 
      senha_clie='" . $senha_hash . "'
      WHERE 
      email_clie='" . $email . "'"; 

      $con->query($sql); //comando de enviar o sql

      $_SESSION['message'] = "Você já pode logar com sua nova senha!";
      header("location:mensagem.php");

    }
  }


}else{
 
  // A variavel $result pega as varias $login e $senha, faz uma 
  //pesquisa na tabela de musicos e funcionarios

  $email = $_GET['email'];
  $senha = $_GET['coisa'];

  $result1 = $con->query("SELECT * FROM funcionario 
      WHERE (email_func = '" . $email . "')");
  $result2 = $con->query("SELECT * FROM cliente 
      WHERE (email_clie = '" . $email . "')");

    if ($result1->num_rows > 0) {//existe o email do musico/funcionario

      $row = $result1->fetch_assoc();
      if ($senha == $row["senha_func"]) {//senha do usuário é igual

        //faz nada

      }else{//senha do usuário não bate

      $_SESSION['message'] = "Algo deu errado!";
      header("location:mensagem.php");

      }

    }elseif ($result2->num_rows > 0) {//existe o email do Cliente

      $row = $result2->fetch_assoc();
      if ($senha == $row["senha_clie"]) {//senha do cliente é igual

        //faz nada

      }else{//senha do cliente não bate

      $_SESSION['message'] = "Algo deu errado!";
      header("location:mensagem.php");

      }

    }else{//não existe o email no banco

      $_SESSION['message'] = "Algo deu errado!";
      header("location:mensagem.php");

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="colorlib.com">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
      <link href="../css/main.css" rel="stylesheet" />
      <link href="../css/menu.css" rel="stylesheet" />
      <link rel="icon" type="imagem/png" href="../images/logo-ovni.png" />

      
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.dropotron.min.js"></script>
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />

    <title>Ovni - Esqueci</title>
    <style type="text/css">
      .collapse ul li a, .nav-item a{
        font-size: 16px; text-decoration: none; font-family: sans-serif
      }
      .loggedOutDiv1{
        margin-top: -2.5em;
      }
      .loggedOutDiv2{
        margin-top: -1.3em;
        margin-left: 0.65em;
      }

      .carousel-indicators li{
        width: 25px;
        height: 25px;
        border-radius: 50%;
      }
    </style>
  </head>

    </head>
  <body>
  <?php
      include('menu.php');
 ?>
  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5 w-50" style="border-radius: 25px">
        <h1 class="center text-center">Resetar Minha Senha</h1>
        <p></p>
      <form action="../pages_php/reset.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-12">
          <?php
          if (isset($_GET['senha1']) && isset($_GET['senha2']) && isset($_GET['email'])) //se foi enviado o formulário
          {
            $senha1 = $_GET['senha1'];
            $senha2 = $_GET['senha2'];
            if ($senha1 != $senha2) {
              echo "<div class='alert alert-warning mt-3 mb-0' role='alert'>
              As senhas inseridas são diferentes.
              </div>";
            }
          }
          ?>
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha1" id="senha" placeholder="Nova senha" maxlength="30" required>
          </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="senha">Confirmação de Senha</label>
            <input type="password" class="form-control" name="senha2" id="senha" placeholder="Confirme a senha" maxlength="30" required>
          </div>
        <input type="submit" class="btn btn-primary ml-auto mr-auto mt-0">
      </form>

</div>
  

</form>
</div>
</div>
</div>
<div id="copyright">
      <div class="container">
        <div class="copyright">
          <p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
          <ul class="icons">
            <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/jquery.mask.js"></script>
  </body>
</html>