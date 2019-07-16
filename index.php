<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php  

session_start();

if (isset($_SESSION));


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
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
	    <link href="css/main.css" rel="stylesheet" />
	    <link href="css/menu.css" rel="stylesheet" />

   		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
			.collapse ul div{
				margin-top: -2em;
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
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">batata</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="display:block;">
        	<div>
        		<div class="col">
        			<p style="color: rgba(255,255,255,.5); margin-left: 0.6em;">Buscando Músicos?  ||  Ou você é o Músico?</p>
        		</div>
        	</div>
         	<div>
        		<div class="col" style="display: inline-flex;">
					<li class="nav-item">
						<?php  
						if (!isset($_SESSION)){
							echo "<a class='nav-link' href='pages_php/login.php'>Login</a>";
						} 
						else{
							echo "<a class='nav-link' href='pages_php/logout.php'>Logout</a>";
						}


						?>
					</li>
					<span class="navbar-text">
						|
					</span>
					<li class="nav-item">
						<a class="nav-link" href="pages_html/cadastroCliente.html" id="cadastro">Registrar-se</a>
					</li>
					<span class="navbar-text">
						||
					</span>
					<li class="nav-item">
						<a class="nav-link" href="pages_php/login.php" id="login">Login</a>
					</li>
					<span class="navbar-text">
						|
					</span>
					<li class="nav-item">
						<a class="nav-link" href="pages_html/cadastroCliente.html">Registrar-se</a>
					</li>
				</div>
        	</div>
        </ul>
      </div>
  </nav>

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
			      <img class="d-block w-100" src="images/whale_1.jpg" alt="Primeiro Slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/whale_2.jpg" alt="Segundo Slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/whale_3.jpg" alt="Terceiro Slide">
			    </div>
			  </div>
			</div>
			</div>
		</div>

			<!-- Extra -->
			<div id="extra" style="padding-top: 4em;">
				<div class="container">
					<div class="row no-collapse-1">
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
					</div>
					<div class="row no-collapse-1">
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
						<section class="4u"> <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""></a>
							<div class="box">
								<p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum  wisi maecenas ligula.</p>
								<a href="#" class="button">Read More</a> </div>
						</section>
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


		<script src="js/extention/choices.js"></script>
	    <script>
	      const customSelects = document.querySelectorAll("select");
	      const deleteBtn = document.getElementById('delete')
	      const choices = new Choices('select',
	      {
	        searchEnabled: false,
	        itemSelectText: '',
	        removeItemButton: true,
	      });
	      for (let i = 0; i < customSelects.length; i++)
	      {
	        customSelects[i].addEventListener('addItem', function(event)
	        {
	          if (event.detail.value)
	          {
	            let parent = this.parentNode.parentNode
	            parent.classList.add('valid')
	            parent.classList.remove('invalid')
	          }
	          else
	          {
	            let parent = this.parentNode.parentNode
	            parent.classList.add('invalid')
	            parent.classList.remove('valid')
	          }
	        }, false);
	      }
	      deleteBtn.addEventListener("click", function(e)
	      {
	        e.preventDefault()
	        const deleteAll = document.querySelectorAll('.choices__button')
	        for (let i = 0; i < deleteAll.length; i++)
	        {
	          deleteAll[i].click();
	        }
	      });

	    </script>
	</body>
</html>