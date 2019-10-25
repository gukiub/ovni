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

$con=mysqli_connect("localhost","ovnism38_root","admin","ovnism38_ovni");

  if($_SESSION['logged_in'] == false){
    echo "<script>document.location='login.php'</script>";
  };
   

$idchamado = $_GET['id'];


$sql="SELECT * FROM `realiza_pedido` WHERE `ID_pedido_PK` = '" . $idchamado . "'";

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_row($result);

/*
$row[0] -> nome_pedido,
$row[1] -> data_evento,
$row[2] -> hora_evento,
$row[3] -> cep_evento,
$row[4] -> cidade_evento,
$row[5] -> endereço_evento,
$row[6] -> estilo_musica_pedido,
$row[7] -> instrumento_desejado,
$row[8] -> email_contato,
$row[9] -> telefone_contato,
$row[10] -> status_pedido,
$row[11] -> desc_pedido,
$row[12] -> CPF_clie_FK,
$row[13] -> CPF_func_FK,
$row[14] -> ID_pedido_PK,
$row[15] -> valor_pedido,
$row[17] -> estado_pedido
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
    <script src="../js/init.js"></script>
      <!-- <link rel="stylesheet" href="../css/skel.css" /> -->
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />

    
     <style type="text/css">
       .collapse ul li a, .nav-item a{
      font-size: 16px; text-decoration: none; font-family: sans-serif
      }
    .loggedOutDiv1{
        margin-top: -2.8em;
      }
      .loggedOutDiv2{
        margin-top: 0 em;
      }

      .carousel-indicators li{
        width: 25px;
        height: 25px;
        border-radius: 50%;
      }
      
      @media screen and (max-width: 450px){     	
	.container{
		width: 100%!important;
	}
	.w-50{
		width: 100%!important;
	}
	
	.w-25{
		width: 100%!important;
	}      
      }
      </style>
  </head>
  <body>
  <?php
   include('verify.php');
   include('menu.php');
     
  ?>
    <!-- Wrapper -->
    <div class="wrapper style1" style="background-image: none;">


        <!-- Header -->

        <!-- Page -->
  <div class="jumbotron mb-0">
    <div class="container bg-light p-5" style="border-radius: 25px;">
      <h1 class="center text-center">Detalhes do Pedido</h1>
      <div class="center text-center"><p>Um novo pedido aguardando o seu contato!</p></div>
      <form action="../pages_php/salvar_pedido.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
             <div class="form-group col-md-12">
            <label for="endereco">Endereço do evento:</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: nome do logradouro, n° - bairro" maxlength="50" value="<?php echo iconv(mb_detect_encoding($row[4], mb_detect_order(), true), "UTF-8", $row[4]);?>" readonly>
          </div>
        <div class="form-group col-md-12">
            <label for="endereco">Nome do cliente:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: nome" maxlength="50" value="<?php echo iconv(mb_detect_encoding($row[14], mb_detect_order(), true), "UTF-8", $row[14]);?>" readonly>
          </div>
          <div class="form-group col-md-6">
            <label for="idade">Data do evento:</label>
            <input type="date" class="form-control" name="data" id="data" value="<?php echo iconv(mb_detect_encoding($row[0], mb_detect_order(), true), "UTF-8", $row[0]);?>" readonly> 
          </div>
          <div class="form-group col-md-2">
            <label for="hora">Hora:</label>
            <input type="text" class="form-control" name="hora" id="hora" placeholder="hh:mm" maxlength="30" value="<?php echo iconv(mb_detect_encoding($row[1], mb_detect_order(), true), "UTF-8", $row[1]);?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="valor">Valor proposto:</label>
            <input type="text" class="form-control" name="valor" id="valor" placeholder="R$" maxlength="30" value="<?php echo iconv(mb_detect_encoding($row['15'], mb_detect_order(), true), "UTF-8", $row['15']);?>" readonly>
          </div>
          <div class="form-group col-md-12">
            <label for="hora">Email:</label>
            <input type="text" class="form-control" name="hora" id="hora" value="<?php echo iconv(mb_detect_encoding($row[7], mb_detect_order(), true), "UTF-8", $row[7]);?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="tel">Telefone:</label>
            <input type="text" class="form-control" name="tel" id="tel"  value="<?php echo iconv(mb_detect_encoding($row[8], mb_detect_order(), true), "UTF-8", $row[8]);?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: SP" maxlength="30" value="<?php echo iconv(mb_detect_encoding($row[3], mb_detect_order(), true), "UTF-8", $row[3]);?>" readonly>
          </div> 
          <div class="form-group col-md-4">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" name="cep" id="cep" value="<?php echo iconv(mb_detect_encoding($row[2], mb_detect_order(), true), "UTF-8", $row[2]);?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="cep">Estado:</label>
            <input type="text" class="form-control" name="estado" id="estado" value="<?php echo iconv(mb_detect_encoding($row[16], mb_detect_order(), true), "UTF-8", $row[16]);?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="instrumento">Instrumento:</label>
            <input type="text" class="form-control" name="instrumento" id="instrumento" maxlength="30" value="<?php echo iconv(mb_detect_encoding($row[6], mb_detect_order(), true), "UTF-8", $row[6]);?>" readonly>
          </div>
          <div class="form-group col-md-4">
            <label for="estilo">Estilo Musical:</label>
              <input type="text" class="form-control" name="estilo_musical" id="estilo" value="<?php echo iconv(mb_detect_encoding($row[5], mb_detect_order(), true), "UTF-8", $row[5]);?>" readonly>
          </div>
          <div class="form-group col-md-12">
              <label for="descricao">Descrição do Pedido:</label>
              <textarea class="form-control" id="descricao" name="descricao" rows="3" readonly><?php echo iconv(mb_detect_encoding($row[10], mb_detect_order(), true), "UTF-8", $row[10]);?></textarea>
              
            </div>
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
    
     <script type="text/JavaScript"> //JQUERY
    
      $(document).ready(function() {
        jQuery(function($){
          $("#dropdownMenuButton").click(function(){
            $(".dropdown-menu").toggleClass("show");
          });

           //$("div").click(function(){
           //  $("div").toggleClass("fa-spin");
           //});
        });
      });
    </script>
    
  </body>
</html>