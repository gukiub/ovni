    <!DOCTYPE HTML> 
    <!-- 
      Phase Shift by TEMPLATED 
      templated.co @templatedco 
      Released for free under the Creative Commons Attribution 3.0 license (templated.co/license) 
    --> 
     <?php 
      session_start(); 
      ini_set('display_errors', 0);  
      ini_set('display_startup_errors', 0);  
      error_reporting(E_ALL); 
     
     ?> 
     
    <html> 
      <head> 
        <title>OVNIS</title> 
        <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
        <meta name="description" content="" /> 
        <meta name="keywords" content="" /> 
          <meta name="viewport" content="width=device-width, initial-scale=1" /> 
          <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
          <meta name="author" content="colorlib.com"> 
          <link rel="stylesheet" href="css/bootstrap.min.css"> 
          <link href="css/font-google-apis" rel="stylesheet" /> 
          <link href="css/main.css" rel="stylesheet" /> 
          <link href="css/menu.css" rel="stylesheet" /> 
          <link rel="icon" type="imagem/png" href="images/logo_ovni_no_borders.png" /> 
     
           
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]--> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
        <script src="js/popper.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/jquery.min.js"></script> 
        <script src="js/jquery.dropotron.min.js"></script> 
        <script src="js/skel.min.js"></script> 
        <!-- <script src="js/skel-layers.min.js"></script>  -->
        <script src="js/init.js"></script> 
        <noscript> 
          <link rel="stylesheet" href="css/skel.css" />
          <link rel="stylesheet" href="css/style.css" />
          <link rel="stylesheet" href="css/style-wide.css" />
        </noscript>
     
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <style>
          .collapse ul li a, .nav-item a{
            font-size: 16px; text-decoration: none; font-family: sans-serif
          }
     
          .carousel-indicators li{ 
            width: 25px; 
            height: 25px; 
            border-radius: 50%;
          } 
          .icones{
              min-height: 320px;
          }


          /*telas de celulares*/
          @media (max-width: 991px) {
            
            .container{
            margin-right: 0px;
            margin-left: 0px;
            }
            

          }

          /*telas de computadores*/
          @media (min-width: 992px) {

            .nav-item{
               margin-left: 1em;
            }
            
          }

  .loader{
     position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(images/Preloader_3.gif) center no-repeat #fff;
  }


  a {
   color:white !important;
  }

  .btn, .btn:hover{
    color: white !important;
  }
  .dropdown-menu{
    background-color: #4addff !important;
  }
        </style> 

  <script type="text/javascript">

  $(window).load(function() {
      $(".loader").fadeOut("slow");
  });

  </script>

        </head> 

  <!--div de carregamento-->


  <!--<div class="loader">
  </div>-->

  <!--div de carregamento-->

      <body> 
      <?php


    if (isset($_SESSION['verify'])) {

      if ($_SESSION['verify']==0 && $_SESSION['logged_in']==true) {
        echo "
        <div id='verify_message' class='jumbotron mb-0' style='
          position: fixed;
          z-index: 999;
          height: 120vh;
          margin-top: -6vh;
          width: 100vw;
          background-color: rgba(0,0,0,0.9);
          '>
            <div class='container bg-light p-5 w-50' style='border-radius: 25px; margin-top: 20vh;'>
              <h1 class='center text-center'>Mensagem</h1>
              <p></p>
              <div class='form-group col-md-12' style='
          margin-left: 17%;
          '>
                Não se esqueça de verificar seu e-mail da conta!
              </div>
              <button id='close' class='btn btn-primary' style='margin-left: 0%;width: 35%;height: 55px;'>Okay.</button>
              <button id='send' class='btn btn-primary' style='margin-left: 60%;width: 40%;height: 55px;margin-top: -82px;'>Enviar e-mail de verificação.</button>
            </div>
          </div>
          ";
      }
    }
    ?>
         <header>
    <nav class="navbar navbar-expand-lg" style="padding: 0.5rem 0.5rem 0.5rem 0.5rem; "> 
      <a class="navbar-brand" href="index.php"><img src="images/logo-ovni.png" width="auto" height="40px"></a> 
      <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
        <ul class="navbar-nav mr-auto"> 
          <li class="nav-item btn active"> 
            <a class="nav-link"  href="index.php">Página Inicial</a> 
          </li> 
          <?php 
          if ($_SESSION['logged_in'] === false ){ 
            echo "<li class='nav-item btn'> 
            <a class='nav-link' href='pages_php/login.php'>Perfil</a> 
            </li>"; 
          } 
           
          else{ 
            if ($_SESSION['tipo'] === 'musico') { 
              echo "<li class='nav-item btn'> 
            <a class='nav-link' href='pages_php/perfil_musico.php'>Perfil</a> 
            </li>"; 
            } 
            elseif ($_SESSION['tipo'] === 'cliente') { 
              echo "<li class='nav-item btn'> 
            <a class='nav-link' href='pages_php/perfil_cliente.php'>Perfil</a> 
            </li>"; 
            } 
          } 
          ?> 
          <?php 
           if ($_SESSION['logged_in'] === true) { 
            if ($_SESSION['tipo'] === 'musico') { 
             echo "<div class='nav-item btn dropdown'>
                <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false'> 
                  Pedidos 
                </button> 
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'> 
                  <a class='dropdown-item' href='pages_php/pedido.php' style='text-decoration: none;'>Faça seu pedido</a> 
                  <a class='dropdown-item' href='pages_php/verificar_pagamento.php' style='text-decoration: none;'>Chamados</a> 
                  <a class='dropdown-item' href='pages_php/chamado_atendido.php' style='text-decoration: none;'>Chamados Atendidos</a> 
                </div> 
              </div>"; 
            }elseif ($_SESSION['tipo'] === 'cliente') { 
              echo "<div class='nav-item btn dropdown'> 
                <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false'> 
                  Pedidos 
                </button> 
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'> 
                  <a class='dropdown-item' href='pages_php/pedido.php' style='text-decoration: none;'>Faça seu pedido</a> 
                  <a class='dropdown-item' href='pages_php/chamado_atendido.php' style='text-decoration: none;'>Pedidos feitos</a> 
                </div> 
              </div>"; 
            } 
          }; 
        ?> 
    </ul>
    <ul class="navbar-nav ml-auto divmenu1">
        <?php 
        //SE ESTIVER LOGADO
        if ($_SESSION['logged_in'] === true ){
        //EXIBE O BOTÃO DE LOGOUT
          echo "
                  <li class='nav-item btn'>
                    <a class='nav-link' href='pages_php/logout.php'>logout</a>
                  </li>
                  <li class='nav-item btn'>";
                //E EXIBE O NOME DO CLIENTE
                if ($_SESSION['tipo'] === 'cliente' ) {
                    echo "<a class='nav-link' href='pages_php/perfil_cliente.php' id='cadastro'>" . $_SESSION['nome'] . "</a>
                 </li>";
                } //OU DO MUSICo
                elseif ($_SESSION['tipo'] === 'musico' ) {
                    echo "<a class='nav-link' href='pages_php/perfil_musico.php' id='cadastro'>" . $_SESSION['nome'] . "</a>
                 </li>";
                }
            }
            else{
                echo "
              <div class='nav-item btn dropdown'>
                <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false'>
                  Registrar-se
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton' style='background-color: #4addff !important;'>
                  <a class='dropdown-item' href='pages_php/cadastroCliente.php' style='text-decoration: none;'>Contrate um musico</a>
                  <a class='dropdown-item' href='pages_php/cadastroMusicos.php' style='text-decoration: none;'>Atenda a eventos</a>
                </div>
              </div>
            "; 
            echo"<li class='nav-item btn'> 
                <a class='nav-link'  href='pages_php/login.php'>Login</a> 
              </li>";
            }
          ?> 
          </ul>
      </div> 
    </nav> 
    </header> 
        <!-- Wrapper --> 
        <div class="wrapper style1"> 
           
     
          <!-- Banner --> 
          <div class="container" style="width: 100%!important; max-width: unset; padding: 0px; contain: content; position: relative;"> 
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
            <ol class="carousel-indicators"> 
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> 
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
            </ol> 
            <div class="carousel-inner"> 
              <div class="carousel-item active"> 
                 
        <?php 
              if ($_SESSION['logged_in'] === true){           
             echo "<div class='d-block w-100 indexmessage carousel-img-1'>
          <h1 class='display-3' >Conheça os nossos serviços e faça agora o seu pedido!</h1>
                    <p></p>
                    <p><a class='btn  btn-lg ' href='pages_php/pedido.php' role='button' style='text-decoration: none;'>Faça seu pedido &raquo;</a></p>
          </div>";
          }
          else{
             echo "<div class='d-block w-100 indexmessage carousel-img-1'>
          <h1 class='display-3' >Crie sua conta agora e ganhe 1 mês de teste do nosso serviço!</h1>
                    <p></p>
                    <p><a class='btn  btn-lg ' href='pages_php/cadastroCliente.php' role='button' style='text-decoration: none'>Crie sua conta &raquo;</a></p>
          </div>";
          }
          ?>
              </div>  
              <div class="carousel-item"> 
              <?php 
              if ($_SESSION['logged_in'] === true){           
             echo "<div class='d-block w-100 indexmessage carousel-img-2'>
          <h1 class='display-3' >Conheça os nossos serviços e faça agora o seu pedido!</h1>
                    <p></p>
                    <p><a class='btn  btn-lg ' href='pages_php/pedido.php' role='button' style='text-decoration: none;'>Faça seu pedido &raquo;</a></p>
          </div>";
          }
          else{
             echo "<div class='d-block w-100 indexmessage carousel-img-2'>
          <h1 class='display-3' >Crie sua conta agora e ganhe 1 mês de teste do nosso serviço!</h1>
                    <p></p>
                    <p><a class='btn  btn-lg ' href='pages_php/cadastroCliente.php' role='button' style='text-decoration: none;'>Crie sua conta &raquo;</a></p>
          </div>";
          }
          ?>
              </div>
              <div class="carousel-item"> 
              <?php 
              if ($_SESSION['logged_in'] === true){
             echo "<div class='d-block w-100 indexmessage carousel-img-3'>
          <h1 class='display-3' >Conheça os nossos serviços e faça agora o seu pedido!</h1>
                    <p></p>
                    <p><a class='btn  btn-lg ' href='pages_php/pedido.php' role='button' style='text-decoration: none;'>Faça seu pedido &raquo;</a></p>
          </div>";
          }
          else{
             echo "<div class='d-block w-100 indexmessage carousel-img-3'>
          <h1 class='display-3' >Crie sua conta agora e ganhe 1 mês de teste do nosso serviço!</h1>
                    <p></p>
                    <p><a class='btn  btn-lg ' href='pages_php/cadastroCliente.php' role='button' style='text-decoration: none;'>Crie sua conta &raquo;</a></p>
          </div>";
          }
          ?>
              </div>
            </div> 
          </div> 
          </div> 
        </div> 
     
          <!-- Main --> 
          <div id="main"> 
            <div class="container"> 
              <div class="row">              
                <!-- Content --> 
                <div class="6u"> 
                  <section> 
                    <ul class="style"> 
                      <li class="icones fa fa-question"> 
                        <h3>O que é OVNIS?</h3> 
                        <span>É um portal onde você pode realizar pedidos e atender chamados para festas, eventos, bandas e mais.</span> </li> 
                    <li class="icones fa fa-eye"> 
                        <h3>Nossa Visão</h3> 
                        <span>Procuramos propor novas oportunidades para musicos independentes, por um preço justo.</span>
                    </li> 
                    </ul> 
                  </section> 
                </div> 
                <div class="6u"> 
                  <section> 
                    <ul class="style"> 
                      <li class="icones fa fa-road"> 
                        <h3>Nossa Missão</h3> 
                        <span>A OVNIS tem como objetivo conectar os músicos com os clientes para que tenham uma conexão direta.</span> </li> 
                      <li class="icones fa fa-cogs"> 
                        <h3>Como ser um músico?</h3> 
                        <span>Para ser um músico na OVNIS é muito fácil, basta ter uma habilidade especial em algum instrumento e estilo de música e pronto! Agora é só se inscrever, <a href="http://ovnis.mus.br/pages_php/cadastroMusicos.php">Inscreva-se aqui.</a></span> </li> 
                    </ul> 
                  
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
     
        <!-- Footer --> 
         
     
    <div id="copyright">
          <div class="container">
            <div class="copyright">
              <p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p>
              <p> Copyright © 2019 OVNIS.</p>
              <ul class="icons">
                <li><a href="https://www.facebook.com/ovnis.mus/" class="fa fa-facebook"><span>Facebook</span></a></li>
                <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
                <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/JavaScript">
          //MASCARAS
         $(document).ready(function () { 
            $("#close").click(function(){
              $("#verify_message").toggle();
            }); 
            $("#send").click(function(){
              $("#verify_message").toggle();
        document.location="pages_php/verifyemail.php";
            });       
        });
        </script>

      </body>
      </html>