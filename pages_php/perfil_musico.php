<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<?php  
session_start();
 //não mostrar mensagens de erros
ini_set('display_errors', 0); 
ini_set('display_startup_errors', 0); 
error_reporting(E_ALL); 
 //não mostrar mensagens de erros

include('conexao.php');//conecta ao banco de dados
include('refresh.php');//conecta ao banco de dados

$con=mysqli_connect("localhost","ovnism38_root","admin","ovnism38_ovni");


  if($_SESSION['logged_in'] == false){
    echo "<script>document.location='login.php'</script>";
  };
   

?>

<html>
	<head>
		<title>Ovni - Perfil do Musico</title>
  <meta name="description" content="" /> 
      <meta name="keywords" content="" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="author" content="colorlib.com"> 
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
        <link href="../css/font-google-apis.css" rel="stylesheet" /> 
        <link href="../css/main.css" rel="stylesheet" /> 
        <link href="../css/menu.css" rel="stylesheet" /> 
      <link rel="icon" type="imagem/png" href="../images/logo_ovni_no_borders.png" />                                                                                          
   
         
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
  
  ?>

		<!-- Wrapper -->
			<div class="wrapper style1">

				<!-- Header -->
<?php

	include('menu.php');
?>
				<!-- Header -->

				<!-- Page -->
					<div id="page" class="container"> 
               
              <!-- Content --> 
  <center>
                  <header class="major"> 
                    <h2><?php  
                    echo $_SESSION['nome']; 
 
                    ?></h2> 
                    <span class="byline">Alterar dados do perfil</span> 
                  </header> </center>
                    <div class="jumbotron w-100" style="border-radius: 25px"> 
                      <?php 
                      echo "<div class='form-row'>
                      <div class='form-group col-md-12'>
                         Vencimento: " . $_SESSION['date_expirar'] . "
                         <p></p>
                     </div> 
                        <div class='form-group col-md-6'> 
                          Nome: ". $_SESSION['nome'] ." 
                        </div>
                       <div class='form-group col-md-6'> 
                          Telefone comercial: ". $_SESSION['cel'] ." 
                        </div>  
                      </div> 
                      <div class='form-row'> 
                        <div class='form-group col-md-6'> 
                          Idade: " . $_SESSION['bday'] . " 
                        </div> 
                        <div class='form-group col-md-6'> 
                          E-mail: " . $_SESSION['email'] . " 
                        </div> 
                      </div> 
                      <div class='form-row'> 
                        <div class='form-group col-md-6'> 
                          Endereço: ". $_SESSION['end'] ." 
                        </div> 
                        <div class='form-group col-md-6'> 
                          Complemento: ". $_SESSION['end_complemento'] ." 
                        </div> 
                      </div> 
                      <div class='form-row'> 
                        <div class='form-group col-md-6'> 
                          Cidade: ". $_SESSION['cidade'] ." 
                        </div> 
                        <div class='form-group col-md-6'> 
                          Cep: ". $_SESSION['cep'] ." 
                        </div> 
                      </div> 
                      <div class='form-row'> 
                      </div> 
                      <div class='form-row'> 
                        <div class='form-group col-md-6'> 
                          CPF: ". $_SESSION['cpf'] ." 
                        </div> 
                        <div class='form-group col-md-6'> 
                          Estado: ". $_SESSION['estado'] ." 
                        </div>
                        <div class='form-group col-md-6'> 
                          Estilo: ". $_SESSION['estilo'] ." 
                        </div>
                        <div class='form-group col-md-6'> 
                          Instrumento: ". $_SESSION['instrumento'] ." 
                        </div>
                        <div class='form-group col-md-12'>
                        <center> Descrição: " . $_SESSION['descricao'] . " </center>
                     </div>         
                      </div> 
                    </div>";?> 
                     
              <center><input type="submit" class="btn btn-primary mr-auto ml-auto" style="padding: 0.75em 1.5em !important;" value="alterar dados" id="batata"></center>
            </div> 
          </div>  
        </div> 

	<!-- Footer -->
		
	<!-- /Footer -->

	<!-- Copyright -->
	<div id="copyright">
            <div class="container"> <span class="copyright">Design: <a href="http://templated.co">TEMPLATED</a> Images: <a 
                        href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</span>
	         <ul class="icons">
			<li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
			<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
			</ul>
		</div>
	</div>
	
	<script type="text/JavaScript">
      $(document).ready(function () { 
          $("#batata").click(function(){
		document.location='update_perfil_func.php'
          }); 
      });
    </script>
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