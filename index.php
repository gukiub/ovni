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
		<title>OVNI Studio</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="author" content="colorlib.com">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
	    <link href="css/main.css" rel="stylesheet" />
	    <link href="css/menu.css" rel="stylesheet" />
	    <link rel="icon" type="imagem/png" href="images/logo-ovni.png" />

   		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
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
	</head>
	<body>
		 <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 2rem 1rem 0.5rem 1rem; ">
      <a class="navbar-brand" href="index.php" style="margin-top: -1em;"><img src="images/logo-ovni.png" width="120px" height="56"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto" style="margin-top: -1.5em;">
          <li class="nav-item active">
            <a class="nav-link"  href="index.php">Página Inicial</a>
          </li>
          <?php
          if ($_SESSION['logged_in'] === false ){
          	echo "<li class='nav-item'>
            <a class='nav-link' href='pages_php/login.php'>Perfil</a>
          	</li>";
          }
          
          else{
          	if ($_SESSION['tipo'] === 'musico') {
          		echo "<li class='nav-item'>
            <a class='nav-link' href='pages_php/perfil_musico.php'>Perfil</a>
          	</li>";
          	}
          	elseif ($_SESSION['tipo'] === 'cliente') {
          		echo "<li class='nav-item'>
            <a class='nav-link' href='pages_php/perfil_cliente.php'>Perfil</a>
          	</li>";
          	}
          }
          ?>
          <?php
           if ($_SESSION['logged_in'] === true) {
            if ($_SESSION['tipo'] === 'musico') {
             echo "<div class='dropdown'>
                <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' style='background-color: #343a40;
            border-color: #343a40;'>
                  Pedidos
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                  <a class='dropdown-item' href='pages_php/pedido.php' style='text-decoration: none;'>Faça seu pedido</a>
                  <a class='dropdown-item' href='pages_php/chamado.php' style='text-decoration: none;'>Chamados</a>
                  <a class='dropdown-item' href='pages_php/chamado_atendido.php' style='text-decoration: none;'>Chamados Atendidos</a>
                </div>
              </div>";
            }elseif ($_SESSION['tipo'] === 'cliente') {
              echo "<div class='dropdown'>
                <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' style='background-color: #343a40;
            border-color: #343a40;'>
                  Pedidos
                </button>
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                  <a class='dropdown-item' href='pages_php/pedido.php' style='text-decoration: none;'>Faça seu pedido</a>
                  <a class='dropdown-item' href='pages_php/chamado.php' style='text-decoration: none;'>Outros Pedidos</a>
                  <a class='dropdown-item' href='pages_php/chamado_atendido.php' style='text-decoration: none;'>Pedidos feitos</a>
                </div>
              </div>";
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
						<a class='nav-link' href='pages_php/login.php'>Login</a>
					</li>
					<span class='navbar-text'>
						|
					</span>
					<li class='nav-item'>
						<a class='nav-link' href='pages_php/cadastroCliente.php' id='cadastro'>Registrar-se</a>
					</li>
					<span class='navbar-text'>
						||
					</span>
					<li class='nav-item'>
						<a class='nav-link' href='pages_php/login.php' id='login'>Login</a>
					</li>
					<span class='navbar-text'>
						|
					</span>
					<li class='nav-item'>
						<a class='nav-link'href='pages_php/cadastroMusicos.php'>Registrar-se</a>
					</li>";
				}
					else{
						echo "<div class='loggedOutDiv2'>
        		<div class='col' style='display: inline-flex;'>
					<li class='nav-item'>
						<a class='nav-link' href='pages_php/logout.php'>logout</a>
					</li>
					<span class='navbar-text'>
						|
					</span>
					<li class='nav-item'>";

					if ($_SESSION['tipo'] === 'cliente' ) {
						echo "<a class='nav-link' href='pages_php/perfil_cliente.php' id='cadastro'>" . utf8_encode($_SESSION['nome']) . "</a>
					</li>";
					}
					elseif ($_SESSION['tipo'] === 'musico' ) {
						echo "<a class='nav-link' href='pages_php/perfil_musico.php' id='cadastro'>" . utf8_encode($_SESSION['nome']) . "</a>
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
		<!-- Wrapper -->
		<div class="wrapper style1">
			

			<!-- Banner -->
			<div class="container" style="width: 100%; max-width: unset; padding: 0px; contain: content;">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" style="margin-top: -12em;">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="images/2.png" alt="Primeiro Slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/3.png" alt="Segundo Slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/123.356.173-12.png" alt="Terceiro Slide">
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
									<li class="fa fa-wrench">
										<h3>Integer ultrices</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
									<li class="fa fa-leaf">
										<h3>Aliquam luctus</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section>
								<ul class="style">
									<li class="fa fa-cogs">
										<h3>Integer ultrices</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
									<li class="fa fa-road">
										<h3>Aliquam luctus</h3>
										<span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Footer -->
		

		<!-- Copyright -->
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
</html>