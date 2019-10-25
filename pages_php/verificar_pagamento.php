<?php 
	include('conexao.php');
		session_start();
		
		ini_set('display_errors', 0); 
  	ini_set('display_startup_errors', 0); 
  	error_reporting(E_ALL);
	$con = mysqli_connect("localhost", "ovnism38_root", "admin") or die
	 ("Sem conexão com o servidor");
	$select = mysqli_select_db($con, "ovnism38_ovni") or die("Sem acesso ao DB, Entre em 
	contato com o Administrador, ovni@gmail.com");
	
	$date = date('Y-m-d');
	
	$result2 = $con->query("SELECT * FROM funcionario 
	    WHERE (email_func = '" . $email . "')"); //checar se foi login de um funcionario
	    
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
    <script src="../js/init.js"></script>
      <!-- <link rel="stylesheet" href="../css/skel.css" /> -->
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />

    <title>Ovni - Pagamento</title>
    <style type="text/css">
      .collapse ul li a, .nav-item a{
        font-size: 16px; text-decoration: none; font-family: sans-serif
      }
      .loggedOutDiv1{
        margin-top: -2.7em;
      }
      .loggedOutDiv2{
        margin-top: 0 em;
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
      <div class="container bg-white p-5 w-50" style="border-radius: 25px">
        <h1 class="center text-center">Para continuar recebendo os seus chamados</h1>
        <h1 class="center text-center">realize seu Pagamento abaixo,</h1>
        <h1 class="center text-center">valor de R$ 24,99.</h1>
        <p></p>
          <?php	 
	if ($date > $_SESSION['date_expirar']){
		echo "<!-- INICIO FORMULARIO BOTAO PAGSEGURO: NAO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
			<center><form action='https://pagseguro.uol.com.br/pre-approvals/request.html' method='post'>
			<input type='hidden' name='code' value='7FDD54201E1E544004E6EF869090BB0A' />
			<input type='hidden' name='iot' value='button' />
			<input type='image' src='https://stc.pagseguro.uol.com.br/public/img/botoes/assinaturas/209x48-assinar-azul-assina.gif' name='submit' alt='Pague com PagSeguro - É rápido, grátis e seguro!' width='209' height='48' />
			</form>
			<!-- FINAL FORMULARIO BOTAO PAGSEGURO --></center>";

		
		}
	
	else{
		echo "<script>document.location='chamado.php'</script>";
	}
	

?>

  
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