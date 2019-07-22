<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php  
session_start();
 //não mostrar mensagens de erros
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 
 //não mostrar mensagens de erros

include('conexao.php');//conecta ao banco de dados

$con=mysqli_connect("localhost","root","","ovni");

if($_SESSION['logged_in'] == 0){
header('location: ../index.php');
}

$idchamado = $_GET['id'];


$sql="SELECT * FROM `realiza_pedido` WHERE `ID_pedido_PK` = '" . $idchamado . "'";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_row($result);

/*
$row[0] -> data_evento,
$row[1] -> hora_evento,
$row[2] -> cep_evento,
$row[3] -> cidade_evento,
$row[4] -> endereço_evento,
$row[5] -> estilo_musica_pedido,
$row[6] -> instrumento_desejado,
$row[7] -> email_contato,
$row[8] -> telefone_contato,
$row[9] -> status_pedido,
$row[10] -> desc_pedido,
$row[11] -> CPF_clie_FK,
$row[12] -> CPF_func_FK,
$row[13] -> ID_pedido_PK
*/
?>

<html>
	<head>
		<title>Ovni - Detalhes Pedido</title>
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
    <noscript>
      <link rel="stylesheet" href="../css/skel.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />
    </noscript>
		
		 <style type="text/css">
     	 .collapse ul li a, .nav-item a{
			font-size: 16px; text-decoration: none; font-family: sans-serif
			}
		.loggedOutDiv1{
				margin-top: -2.8em;
			}
			.loggedOutDiv2{
				margin-top: -1.3em;
			}

			.carousel-indicators li{
				width: 25px;
				height: 25px;
				border-radius: 50%;
			}
    	</style>
    	<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.dropotron.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/skel-layers.min.js"></script>
		<script src="../js/init.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/skel.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/style-wide.css" />
		<link rel="icon" type="imagem/png" href="../images/logo-ovni.png" />
	</head>
	<body>

		<!-- Wrapper -->
		<div class="wrapper style1" style="background-image: none;">

				<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 2rem 1rem 0.5rem 1rem; ">
      <a class="navbar-brand" href="../index.php" style="margin-top: -1em;"><img src="../images/logo-ovni.png" width="120px" height="56"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto" style="margin-top: -1.5em;">
          <li class="nav-item">
            <a class="nav-link"  href="../index.php">Página Inicial</a>
          </li>
          <?php
          if ($_SESSION['logged_in'] === false ){
            echo "<li class='nav-item'>
            <a class='nav-link' href='login.php'>Perfil</a>
            </li>";
          }
          
          else{
            if ($_SESSION['tipo'] === 'musico') {
              echo "<li class='nav-item'>
            <a class='nav-link' href='perfil_musico.php'>Perfil</a>
            </li>";
            }
            elseif ($_SESSION['tipo'] === 'cliente') {
              echo "<li class='nav-item'>
            <a class='nav-link' href='perfil_cliente.php'>Perfil</a>
            </li>";
            }
          }
          ?>
          <?php
           if ($_SESSION['tipo'] === 'musico') {
            if ($_SESSION['logged_in'] === true) {
         echo "<div class='dropdown'>
        <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' style='background-color: #343a40;
    border-color: #343a40;'>
          Pedidos
        </button>
        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
          <a class='dropdown-item' href='chamado.php' style='text-decoration: none;'>Chamados</a>
          <a class='dropdown-item' href='chamado_atendido.php' style='text-decoration: none;'>Chamados Atendidos</a>

          <a class='dropdown-item' href='pedido.php' style='text-decoration: none;'>Faça seu pedido</a>
        </div>
      </div>";
    }
  }
         
          if ($_SESSION['logged_in'] === true) {
            if ($_SESSION['tipo'] === 'cliente') {
              echo "<li class='nav-item'>
              <li class='nav-item'>
              <a class='nav-link' href='pedido.php'>Faça seu Pedido!</a>
              </li>";
            } 
          }; 
        ?>
    </ul>
        <ul class="navbar-nav ml-auto" style="display:block;">
          <?php
          if ($_SESSION['logged_in'] === false ){
          echo "
          <div class='loggedOutDiv2'>
            <div class='col'>
              <p style='color: rgba(255,255,255,.5); margin-left: 0.6em;'>Buscando Músicos?  ||  Ou você é o Músico?</p>
            </div>
          </div>
          <div class='loggedOutDiv1'>
            <div class='col' style='display: inline-flex;'>
          <li class='nav-item'>
            <a class='nav-link' href='login.php'>Login</a>
          </li>
          <span class='navbar-text'>
            |
          </span>
          <li class='nav-item'>
            <a class='nav-link' href='cadastroCliente.php' id='cadastro'>Registrar-se</a>
          </li>
          <span class='navbar-text'>
            ||
          </span>
          <li class='nav-item'>
            <a class='nav-link' href='login.php' id='login'>Login</a>
          </li>
          <span class='navbar-text'>
            |
          </span>
          <li class='nav-item'>
            <a class='nav-link'href='cadastroMusicos.php'>Registrar-se</a>
          </li>";
        }
          else{
            echo "<div class='loggedOutDiv2'>
            <div class='col' style='display: inline-flex;'>
          <li class='nav-item'>
            <a class='nav-link' href='logout.php'>logout</a>
          </li>
          <span class='navbar-text'>
            |
          </span>
          <li class='nav-item'>";

          if ($_SESSION['tipo'] === 'cliente' ) {
            echo "<a class='nav-link' href='perfil_cliente.php' id='cadastro'>" . utf8_encode($_SESSION['nome']) . "</a>
          </li>";
          }
          elseif ($_SESSION['tipo'] === 'musico' ) {
            echo "<a class='nav-link' href='perfil_musico.php' id='cadastro'>" . utf8_encode($_SESSION['nome']) . "</a>
            </li>";
              }
            }
          ?>
        </div>
          </div>
        </ul>
      </div>
  </nav>
</header>
				<!-- Header -->

				<!-- Page -->
  <div class="jumbotron mb-0">
    <div class="container bg-light p-5">
      <h1 class="center text-center">Detalhes do Pedido</h1>
      <p></p>
      <form action="../pages_php/salvar_pedido.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nome">Endereço do evento</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: nome do logradouro, n° - bairro" maxlength="30" value="<?php echo(utf8_encode($row[4]))?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="idade">Data do evento</label>
            <input type="date" class="form-control" name="data" id="data" value="<?php echo(utf8_encode($row[0]))?>" readonly> 
          </div>
          <div class="form-group col-md-6">
            <label for="hora">Hora</label>
            <input type="text" class="form-control" name="hora" id="hora" placeholder="hh:mm" maxlength="30" value="<?php echo(utf8_encode($row[1]))?>" readonly>
          </div>
          <div class="form-group col-md-12">
            <label for="hora">Email</label>
            <input type="text" class="form-control" name="hora" id="hora" value="<?php echo(utf8_encode($row[7]))?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="tel">Telefone</label>
            <input type="text" class="form-control" name="tel" id="tel"  value="<?php echo(utf8_encode($row[8]))?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: SP" maxlength="30" value="<?php echo(utf8_encode($row[3]))?>" readonly>
          </div> 
          <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" value="<?php echo(utf8_encode($row[2]))?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="instrumento">Instrumento</label>
            <input type="text" class="form-control" name="instrumento" id="instrumento" maxlength="30" value="<?php echo(utf8_encode($row[6]))?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="estilo">Estilo Musical Principal</label>
              <input type="text" class="form-control" name="estilo_musical" id="estilo" value="<?php echo(utf8_encode($row[5]))?>" readonly>
          </div>
          <div class="form-group col-md-12">
              <label for="descricao">Descrição do Pedido</label>
              <textarea class="form-control" id="descricao" name="descricao" rows="3" readonly><?php echo(utf8_encode($row[10]))?></textarea>
            </div>
        </div>
      </form>
    </div>
    
  </div>

	<!-- Copyright -->
		<div id="copyright">
			<div class="container"> <span class="copyright">Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</span>
				<ul class="icons">
					<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
				</ul>
			</div>
		</div>

	</body>
</html>