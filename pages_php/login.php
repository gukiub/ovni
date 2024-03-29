<?php

session_start();
  ini_set('display_errors', 0); 
  ini_set('display_startup_errors', 0); 
  error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <!-- Meta tags Obrigatórias -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="author" content="colorlib.com">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link href="/css/font-google-apis.css" rel="stylesheet" />
      <link href="/css/main.css" rel="stylesheet" />
      <link href="/css/menu.css" rel="stylesheet" />
      <link rel="icon" type="imagem/png" href="../images/logo_ovni_no_borders.png" />

      
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.dropotron.min.js"></script>
    <script src="/js/skel.min.js"></script>
    <script src="/js/init.js"></script>
      <!-- <link rel="stylesheet" href="../css/skel.css" /> -->
      <link rel="stylesheet" href="../css/style.css" /> 
      <link rel="stylesheet" href="../css/style-wide.css" />

    <title>Ovni - Login</title>
    <style type="text/css">
      .collapse ul li a, .nav-item a{
        font-size: 16px; text-decoration: none; font-family: sans-serif
      }
      .loggedOutDiv1{
        margin-top: -2.7em;
      }
      .loggedOutDiv2{
        margin-top: -1.5em;
        margin-left: 0.65em;
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
	
	.mt-1, .my-1 {
   		 margin-top: 0rem!important;
	}
      }
    </style>
  </head>

  <body>
      <?php 
      
      include('menu.php');
      include('verify.php'); 
     
      ?>

  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5 w-50" style="border-radius: 25px">
        <h1 class="center text-center">Login</h1>
        <p></p>
      <form action="/pages_php/session.php" class="w-50 ml-auto mr-auto">
        <div class="form-row col-xs-12">
          <div class="form-group col-md-12"  style="width: 100%;">
            <label for="email">Email</label>
            <input type="Email" class="form-control" name="login" id="login" placeholder="Email" maxlength="30" required>
          </div>
          <div class="form-group col-md-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha" maxlength="30" required>
            <?php 
            $url_atual= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if ($url_atual == "http://ovnis.mus.br/pages_php/login.php?tentativa=1" || $url_atual == "http://www.ovnis.mus.br/pages_php/login.php?tentativa=1"){
            echo "<div class='alert alert-warning mt-3 mb-0' role='alert'>
            Email ou senha incorretos.
            </div>";
            };
            ?>
            <p>
            <center><input type="submit" class="btn btn-primary ml-auto mr-auto mt-0">          	
          </div>
              <a href="forgot.php" class="ml-auto mr-auto mt-0">Esqueceu a senha?</a> 
              <a href="cadastroCliente.php" class="ml-auto mr-auto mt-0">Quero me cadastrar</a></center>
      </form>

</div>
  

</form>
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
    <script src="/js/jquery.mask.js"></script>

  </body>
</html>