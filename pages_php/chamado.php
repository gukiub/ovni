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

$con=mysqli_connect("localhost","root","","ovni");

if($_SESSION['logged_in'] == 0){
header('../index.php');
}

?>

<html>
	<head>
		<title>Ovni - Chamados</title>
		<meta http-equiv="content-type" content="text/html"; charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		
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

			.icones{
				width: 25px;
				height: 25px;
				margin:0.5em;
				background-color: red;
				display: inline-flex;
			}

			.clicked{
				background-color: blue;
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
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		
	</head>
	<body onload="icone()">

		<!-- Wrapper -->
			<div class="wrapper style1">

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
          	echo "<li class='nav-item active'>
            <a class='nav-link' href='perfil.php'>Perfil</a>
          	</li>";
          }
          ?>
          <?php
          if ($_SESSION['logged_in'] === false) {
      		echo "<li class='nav-item'>
            <a class='nav-link' href='login.php'>Pesquisar</a>
          	</li>
        	</ul>";
          }
          else{
          	echo "<li class='nav-item'>
            <a class='nav-link' href='pesquisar_musicos.php'>Pesquisar</a>
          	</li>
        	</ul>";
          }    
        ?>
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
					<li class='nav-item'>
						<a class='nav-link' href='cadastroCliente.php' id='cadastro'>" . $_SESSION['nome'] . "</a>
					</li>";
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

<div id="extra" style="padding-top: 4em;">
	<div class="container">
		<div class="row no-collapse-1">

			<!-- gerar lista de pedidos -->

			<section class="4u"> <a href="#" class="image featured"><img src="../images/pic01.jpg" alt=""></a>
				<div class="box">
					<p style="max-height: 160px; contain: content;">"Texto de descrição que vai ser limitado para três linhas no máximo, esse texto foi escrito com a intenção de testar a funcionalidade da caixa e ver se funciona de verdade, qualquer problemas ter paciência com diogo misawa porque ele quase se perde fazendo o css dessa desgraça, mas ainda vai mudar muita coisa, por exemplo para fazer um texto com nome, instrumento e estilo procurados, endereço, etc etc, ficarem ao lado da imagem, e descrição abaixo dela."
					</p>
					<a href="#" class="button">Caixa editada mas e se o exemplo for de algum nome gigante?</a> </div>
			</section>

			<!-- gerar lista de pedidos -->

			<section class="4u"> <a href="#" class="image featured"><img src="../images/pic01.jpg" alt=""></a>
				<div class="box">
					<p>Texto de descrição que vai ser limitado para três linhas no máximo, esse texto foi escrito com a intenção de testar a funcionalidade da caixa e ver se funciona de verdade, qualquer problemas ter paciência com diogo misawa porque ele quase se perde fazendo o css dessa desgraça, mas ainda vai mudar muita coisa, por exemplo para fazer um texto com nome, instrumento e estilo procurados, endereço, etc etc, ficarem ao lado da imagem, e descrição abaixo dela..</p>
					<a href="#" class="button">Caixa Não-editada</a> </div>
			</section>
			<section class="4u"> <a href="#" class="image featured"><img src="../images/pic01.jpg" alt=""></a>
				<div class="box">
					<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
					<a href="#" class="button">Read More</a> </div>
			</section></div>
		<div class="row no-collapse-1">

				<!-- gerar lista de pedidos -->

			<section class="4u"> <a href="#" class="image featured"><img src="../images/pic01.jpg" alt=""></a>
				<div class="box">
					<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
					<a href="#" class="button">Read More</a> </div>
			</section>

				<!-- gerar lista de pedidos -->

			<section class="4u"> <a href="#" class="image featured"><img src="../images/pic01.jpg" alt=""></a>
				<div class="box">
					<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
					<a href="#" class="button">Read More</a> </div>
			</section>
			<section class="4u"> <a href="#" class="image featured"><img src="../images/pic01.jpg" alt=""></a>
				<div class="box">
					<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
					<a href="#" class="button">Read More</a> </div>
			</section>
		</div>
	</div>
</div>

	<!-- Page -->
				 


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

		<script>
			function icone() {
				$("#<?php echo $_SESSION['instrumento']; ?>").toggleClass("clicked");
			}
		</script>
	</body>
</html>