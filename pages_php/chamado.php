<!DOCTYPE HTML> 
<!-- 
  Phase Shift by TEMPLATED 
  templated.co @templatedco 
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license) 
--> 
<?php 
session_start(); 
 
 
if($_SESSION['logged_in'] == 0){ 
header('location: ../index.php'); 
}else if($_SESSION['tipo'] === "cliente"){ 
header('location: ../index.php'); 
}; 
 
 
 //não mostrar mensagens de erros 
ini_set('display_errors', 0);  
ini_set('display_startup_errors', 0); 
error_reporting(E_ALL); 
 //não mostrar mensagens de erros 
 
include('conexao.php');//conecta ao banco de dados 
 
$con=mysqli_connect("localhost","root","","ovni"); 
   
$estilos = $_GET['estilos']; 
$instrumentos = $_GET['instrumentos']; 
 
if (!empty($estilos) and !empty($instrumentos)) { 
  $sql="SELECT * FROM `realiza_pedido` WHERE `estilo_musica_pedido` = '" . $estilos . "' and `instrumento_desejado` = '" . $instrumentos .  "' AND `status_pedido` = 0"; 
} 
else if (!empty($estilos)) { 
  $sql="SELECT * FROM `realiza_pedido` WHERE `estilo_musica_pedido` = '" . $estilos .  "' AND `status_pedido` = 0"; 
} 
else if (!empty($instrumentos)) { 
  $sql="SELECT * FROM `realiza_pedido` WHERE `instrumento_desejado` = '" . $instrumentos . "' AND `status_pedido` = 0"; 
} 
else{ 
  $sql="SELECT * FROM `realiza_pedido` WHERE `status_pedido` = 0"; 
  } 
?> 
 
<html> 
<head> 
  <title>OVNI - Chamados</title> 
  <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
  <meta name="description" content="" /> 
  <meta name="keywords" content="" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="author" content="colorlib.com"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" /> 
    <link href="../css/main.css" rel="stylesheet" /> 
    <link href="../css/menu.css" rel="stylesheet" /> 
    <link href="../css/skel.css" rel="stylesheet"  /> 
  <link href="../css/style.css" rel="stylesheet" /> 
  <link href="../css/style-wide.css" rel="stylesheet" /> 
      <link rel="icon" type="imagem/png" href="../images/logo_ovni_no_borders.png" /> 
 
     
  <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]--> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
  <script src="../js/jquery.min.js"></script> 
  <script src="../js/jquery.dropotron.min.js"></script> 
  <script src="../js/skel.min.js"></script> 
  <script src="../js/skel-layers.min.js"></script> 
  <script src="../js/init.js"></script> 
 
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
    .container div section{ 
      margin-top: 2em; 
    } 
    section div div{ 
        height: 40px; 
    } 
  </style> 
</head> 
<body> 
<header> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 2rem 1rem 0.5rem 1rem; "> 
      <a class="navbar-brand" href="../index.php" style="margin-top: -1em;"><img src="../images/logo-ovni.png" width="120px" height="56"></a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 
      <div class="collapse navbar-collapse" id="navbarNavDropdown"> 
        <ul class="navbar-nav mr-auto" style="margin-top: -1.5em;"> 
          <li class="nav-item active"> 
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
           if ($_SESSION['logged_in'] === true) { 
            if ($_SESSION['tipo'] === 'musico') { 
             echo "<div class='dropdown'> 
                <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' style='background-color: #343a40; 
            border-color: #343a40;'> 
                  Pedidos 
                </button> 
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'> 
                  <a class='dropdown-item' href='pedido.php' style='text-decoration: none;'>Faça seu pedido</a> 
                  <a class='dropdown-item' href='chamado.php' style='text-decoration: none;'>Chamados</a> 
                  <a class='dropdown-item' href='chamado_atendido.php' style='text-decoration: none;'>Chamados Atendidos</a> 
                </div> 
              </div>"; 
            }elseif ($_SESSION['tipo'] === 'cliente') { 
              echo "<div class='dropdown'> 
                <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' style='background-color: #343a40; 
            border-color: #343a40;'> 
                  Pedidos 
                </button> 
                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'> 
                  <a class='dropdown-item' href='pedido.php' style='text-decoration: none;'>Faça seu pedido</a> 
                  <a class='dropdown-item' href='chamado.php' style='text-decoration: none;'>Outros Pedidos</a> 
                  <a class='dropdown-item' href='chamado_atendido.php' style='text-decoration: none;'>Pedidos feitos</a> 
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
 
<!-- Barra de pesquisa --> 
     
<div class="s010"> 
  <form> 
    <div class="inner-form"> 
      <div class="advance-search"> 
        <h1 class="desc">Pesquisa de Músicos Por Instrumentos Ou Estilos</h1> 
        <div class="row"> 
          <div class="col input-field"> 
            <div class="input-select"> 
              <select data-trigger="" name="instrumentos"> 
                <option placeholder="" value="0">Instrumentos</option> 
                <option value="violao">Violão</option> 
                <option value="cavaco">Cavaco</option> 
                <option value="bateria">Bateria</option> 
                <option value="flauta">Flauta</option> 
                <option value="guitarra">Guitarra</option> 
                <option value="baixo">Baixo</option> 
                <option value="piano">Piano</option> 
                <option value="viola">Viola</option> 
                <option value="teclado">Teclado</option> 
                <option value="orgao">Órgão</option> 
                <option value="violino">Violino</option> 
                <option value="trompa">Trompa</option> 
                <option value="acordeao">Acordeão</option> 
                <option value="trombone">Trombone</option> 
                <option value="trompete">Trompete</option> 
                <option value="saxofone">Saxofone</option> 
                <option value="dj)">Instrumentos (DJ)</option> 
              </select> 
            </div> 
          </div> 
          <div class="col input-field"> 
            <div class="input-select"> 
              <select data-trigger="" name="estilos"> 
                <option placeholder="" value="0">Estilos</option> 
                <option value="alternativa">Alternativa</option> 
                <option value="blues">Blues</option> 
                <option value="dance">Dance</option> 
                <option value="eletronica">Eletrônica</option> 
                <option value="hip">Hip-Hop</option> 
                <option value="rb">R&B</option> 
                <option value="reggae">Reggae</option> 
                <option value="rock">Rock</option> 
                <option value="country">Country</option> 
                <option value="folk">Folk</option> 
                <option value="forro">Forró</option> 
                <option value="funk">Funk</option> 
                <option value="jazz">Jazz</option> 
                <option value="axe">Axé</option> 
                <option value="sertanejo">Sertanejo</option> 
                <option value="mpb">MPB</option> 
                <option value="samba">Samba</option> 
                <option value="pagode">Pagode</option> 
              </select> 
            </div> 
          </div> 
        </div> 
        <div class="row third"> 
          <div class="input-field"> 
            <div class="result-count"> 
              <span> 
                <?php 
                  //numero de resultados 
                ?>  
              </span>resultados</div> 
            <div class="group-btn"> 
              <button class="btn-delete" id="delete">RESET</button> 
              <button class="btn-search">SEARCH</button> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
  </form> 
</div>     
 
      <!-- PESQUISAR MUSICOS --> 
<div id="extra" style="padding-top: 4em;"> 
  <div class="container"> 
    <div class="row no-collapse-1"> 
 
      <?php 
        if ($result=mysqli_query($con,$sql)) 
          { 
          // Fetch one and one row 
          while ($row=mysqli_fetch_row($result)) 
            { 
            echo " 
            <section class='6u'>  
            <a href='#' class='image featured'> 
              <img src='../images/pic01.jpg' alt=''> 
            </a> 
            <div class='box'> 
                <div class='col' style='background-color: #f1f1f1;'><p>Data:" . utf8_encode($row[0]) . "</p></div> 
                <div class='col'><p>Hora:"  . utf8_encode($row[1]) . ".</p></div> 
                <div class='col' style='background-color: #f1f1f1;'><p>Estilo:" . utf8_encode($row[5]) . "</p></div> 
                <div class='col'><p>Instrumento:"  . utf8_encode($row[6]) . ".</p></div> 
                <div class='col' style='background-color: #f1f1f1;'><p>Cidade:" . utf8_encode($row[3]) . "</p></div> 
                <div class='col'></div> 
               
 
              <a href='update_pedido.php?id=" . $row[13] . "' class='button'>Atender!</a>  
            </div> 
          </section>"; 
 
             
            } 
          // Free result set 
          mysqli_free_result($result); 
        } 
      //comando while 
       
       
      /* 
 
      Referências: 
      $row[0] = data_evento 
      $row[1] = hora_evento 
      $row[2] = cep_evento 
      $row[3] = cidade_evento 
      $row[4] = endereço_evento 
      $row[5] = estilo_musica_pedido 
      $row[6] = instrumento_desejado 
      $row[7] = email_contato 
      $row[8] = telefone_contato 
      $row[9] = status_pedido 
      $row[10] = desc_pedido 
      $row[11] = CPF_clie_FK 
      $row[12] = CPF_func_FK 
      $row[13] = ID_pedido_PK 
 
      */ 
      ?> 
 
 
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
 
 
<script src="../js/extention/choices.js"></script> 
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