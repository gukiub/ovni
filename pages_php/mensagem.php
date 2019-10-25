<?php

session_start();

  ini_set('display_errors', 1); 
  ini_set('display_startup_errors', 1); 
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
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
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
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />

      <style>
        span{
          color: black;
          font-weight: 600;
        }
        html{
          background-color: #e9ecef;
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

    <title>Ovni - Mensagem</title>
  </head>

    </head>
  <body>

  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5 w-50" style="border-radius: 25px">
        <h1 class="center text-center">Mensagem</h1>
        <p></p>
        <form action="../index.php" class="w-50 ml-auto mr-auto">
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php
              if (isset($_SESSION['message']) AND !empty($_SESSION['message']) ) 
              {
                echo $_SESSION['message'];
              }
              else
              {
                echo "<script>document.location='mensagem.php'</script>";
              }
              ?>
            </div>
          <a href="../index.php">
            <button class="btn btn-primary ml-auto mr-auto mt-0">Página Inicial</button>
          </a>
        </form>
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