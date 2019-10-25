<?php

session_start();
  ini_set('display_errors', 0); 
  ini_set('display_startup_errors', 0); 
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">

    <title>Ovni - Cadastro Músico</title>
    <style type="text/css">
      .collapse ul li a, .nav-item a{
        font-size: 16px; text-decoration: none; font-family: sans-serif
      }
      .loggedOutDiv1{
        margin-top: -2.5em;
      }
      .loggedOutDiv2{
        margin-top: -1.5em;
        margin-left: 0.65em;
      }
      
      p{
      	text-align: justify;
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
   <!--  <script src="../js/skel.min.js"></script> -->
    <script src="../js/init.js"></script>
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />

  <body>
  
  <?php
   include('menu.php'); 
  ?>
  
</header>
<body>
<div class="jumbotron mb-0">
      <div class="container bg-light p-5" style="border-radius: 25px">
      
      
      <center><h1>Termos de uso do site</h1></center>
      <p>
      
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius, orci eget pharetra egestas, erat lorem faucibus sem, nec accumsan erat neque in erat. Praesent ultrices arcu vel tempor elementum. Aliquam erat volutpat. Suspendisse vestibulum velit libero, sit amet varius magna euismod eu. Suspendisse eu sollicitudin augue. Morbi id tempus dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam sem urna, vehicula ac mauris at, facilisis faucibus ligula. Aliquam vel interdum orci. Fusce justo quam, tincidunt sed sem at, pretium faucibus nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<p>

Aenean varius tincidunt accumsan. Suspendisse tincidunt neque eget lacus vehicula laoreet. Suspendisse vehicula tortor imperdiet dui iaculis, in ultrices ante pellentesque. Integer dictum semper ligula, non congue purus ultrices nec. Fusce ligula metus, sollicitudin vitae porttitor quis, dapibus id mauris. Mauris est dolor, vulputate ac neque nec, vehicula tempor diam. Praesent mattis mi sed dapibus cursus. Nulla eget ultricies lorem.<p>

Suspendisse vel odio eget sem pulvinar ornare ut et risus. Suspendisse in justo vel sem convallis ultricies. Nam et lectus gravida ante porttitor pellentesque at ut orci. Morbi bibendum justo ac ipsum laoreet, quis congue massa dapibus. Sed et ex enim. Mauris feugiat massa vehicula dolor euismod, in dignissim ligula posuere. Aliquam erat volutpat. Nulla facilisi. Pellentesque fringilla purus tempus diam porta, sed sodales nulla tempor. Morbi egestas risus nibh, et tristique tortor molestie fermentum. In hac habitasse platea dictumst. Sed eleifend lectus eu lorem pharetra, in tincidunt ex posuere. Donec congue sit amet ligula pellentesque consequat. Curabitur ullamcorper sollicitudin tellus, pulvinar cursus orci facilisis sit amet. Proin non aliquet erat.<p>

Suspendisse potenti. Nullam ac ante metus. Nullam sollicitudin nibh eros, rutrum feugiat nunc suscipit feugiat. Maecenas gravida tortor sed nunc varius pellentesque. Praesent ut odio metus. Maecenas lacinia tempor massa vel maximus. In eu sollicitudin mauris, quis euismod mi. Duis posuere auctor tincidunt.<p>

Donec sit amet pulvinar nisl. Sed dictum tortor turpis, ac mollis massa pretium elementum. Nullam tempus ligula et ipsum ultricies sodales. Quisque malesuada, sapien a vestibulum dapibus, sapien turpis lobortis elit, a porttitor dui erat ut metus. Aliquam finibus tempus tellus interdum mattis. Donec at posuere leo. Integer vel eros sagittis orci venenatis gravida vitae a lectus. Ut ac lacus at nisi bibendum imperdiet. Aliquam bibendum scelerisque rhoncus. Pellentesque ullamcorper, leo sit amet gravida feugiat, sapien magna rhoncus nisi, et vehicula sem mi eget nisl. Aenean vitae erat volutpat, aliquam libero ut, ullamcorper risus. Duis euismod mauris in magna malesuada sagittis. Ut eu leo ante. Pellentesque justo elit, lacinia ac tellus a, hendrerit sollicitudin felis. In et posuere lacus. Etiam hendrerit libero at urna sodales, sed elementum est convallis.<p>

Pellentesque ut magna feugiat, congue turpis in, pellentesque nisi. Donec eu dui venenatis, vulputate ex nec, semper felis. Nam consectetur sapien lacus, ut sagittis arcu eleifend ac. Sed eget scelerisque felis. Nunc arcu justo, condimentum et odio et, sodales varius nulla. Aliquam sodales ante a purus porttitor aliquet. Donec vel sem in enim ultrices consequat vel at elit. Nulla facilisi.<p>

Curabitur interdum tristique mollis. Nullam at ante sed urna commodo iaculis. Proin congue justo quis nisi venenatis, in ultricies augue fermentum. Aenean vehicula est dolor, id viverra enim cursus vel. Suspendisse a metus massa. Aenean eu ornare libero. Aenean auctor metus quis purus feugiat maximus. Pellentesque et vulputate lacus, id imperdiet dolor. Phasellus sit amet leo leo.<p>
     
     
     
      </div>
  </div>
  </body>
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
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <script type="text/JavaScript">
   


      //MASCARAS
      $(document).ready(function () { 
        jQuery(function($){
          $("#cpf").mask('999.999.999-99'); //precisa estar sem pontos
          $("#cep").mask('99999-999');
          $("#telefone").mask("(99)99999-9999");
        });
      });


      //CONFIRMA SENHA
      var password = document.getElementById("senha")
      , confirm_password = document.getElementById("confirma_senha");

      function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("A senha não é igual!");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
      password.onchange = validatePassword;
      confirm_password.onchange = validatePassword;

    </script>
  </body>
</html>