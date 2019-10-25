<!DOCTYPE HTML> 
<!-- 
  Phase Shift by TEMPLATED 
  templated.co @templatedco 
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license) 
--> 
<?php 
session_start(); 
 
 

  if($_SESSION['logged_in'] == false){
    echo "<script>document.location='login.php'</script>";
  };

//não mostrar mensagens de erros
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
 //não mostrar mensagens de erros

include('conexao.php');//conecta ao banco de dados

$con=mysqli_connect("localhost","ovnism38_root","admin","ovnism38_ovni");

$estilos = $_GET['estilos'];
$instrumentos = $_GET['instrumentos'];
$estados = $_GET['estado'];

$estadopadrao = $_SESSION['estado'];

/*
ideia:
a = estilos
b = instrumentos
c = estados

se os 3 forem setados > se 2 forem setados > se 1 for setado.

abc > ab, ac, cb > a, b, c

estado_pedido

*/

//os 3 foram setados
if (!empty($estilos) and !empty($instrumentos) and !empty($estados)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `estilo_musica_pedido` = '" . $estilos . "' AND `instrumento_desejado` = '" . $instrumentos .  "' AND `estado_pedido` = '" . $estados .  "' AND `status_pedido` = 0";
}
// estilos e instrumentos
else if (!empty($estilos) and !empty($instrumentos)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `estilo_musica_pedido` = '" . $estilos . "' AND `instrumento_desejado` = '" . $instrumentos .  "' AND `status_pedido` = 0";
}
// estilos e estados
else if (!empty($estilos) and !empty($estados)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `estilo_musica_pedido` = '" . $estilos . "' AND `estado_pedido` = '" . $estados .  "' AND `status_pedido` = 0";
}
// estados e instrumentos
else if (!empty($estados) and !empty($instrumentos)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `estado_pedido` = '" . $estados . "' AND `instrumento_desejado` = '" . $instrumentos .  "' AND `status_pedido` = 0";
}
else if (!empty($estilos)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `estilo_musica_pedido` = '" . $estilos .  "' AND `status_pedido` = 0";
}
else if (!empty($instrumentos)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `instrumento_desejado` = '" . $instrumentos . "' AND `status_pedido` = 0";
}
else if (!empty($estados)) {
  $sql="SELECT * FROM `realiza_pedido` WHERE `estado_pedido` = '" . $estados . "' AND `status_pedido` = 0";
}
else{
  $sql="SELECT * FROM `realiza_pedido` WHERE `status_pedido` = 0";
}

  $data = date('Y-m-d');
  $data = DateTime::createFromFormat('Y-m-d', $data);
  $dota2 = $data->format('Y-m-d');
  $result = "Delete from realiza_pedido WHERE data_evento < '" . $dota2 . "';";
  $con->query($result); //comando de enviar o sql

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
      margin-top: 0 em; 
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

<?php
  
include('verify.php');
include ('menu.php');
 
?>
 
<!-- Barra de pesquisa --> 
     
<div class="s010"> 
  <form> 
    <div class="inner-form"> 
      <div class="advance-search"> 
        <h1 class="desc">Filtro de chamados por Instrumentos, Estilos ou Estado:</h1> 
        <div class="row"> 
          <div class="col input-field"> 
            <div class="input-select"> 
              <select data-trigger="" name="instrumentos"> 
                <option placeholder="" value="">Instrumentos</option> 
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
                <option placeholder="" value="">Estilos</option> 
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
          <div class="col input-field"> 
            <div class="input-select"> 
              <select data-trigger="" name="estado">
                <option placeholder="" value="">Estados</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal(Brasília)">Distrito Federal(Brasília)</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
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
                $result2=mysqli_query($con,$sql);
                $row2 = mysqli_num_rows($result2);
                echo $row2 . " ";
                ?>  
              </span>Resultados</div> 
            <div class="group-btn"> 
              <button class="btn-delete" id="delete">LIMPAR</button> 
              <button class="btn-search">PROCURAR</button> 
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
          while ($row = mysqli_fetch_row($result))
            { 
            echo " 
            <section class='6u'>  
            <a href='#' class='image featured'> 
              <img src='../images/pic01.jpg' alt=''> 
            </a> 
            <div class='box'> 
                <div class='col' style='background-color: #f1f1f1;'><p>Data:" . iconv(mb_detect_encoding($row[0], mb_detect_order(), true), "UTF-8", $row[0]) . "</p></div> 
                <div class='col'><p>Hora:"  . iconv(mb_detect_encoding($row[1], mb_detect_order(), true), "UTF-8", $row[1]) . ".</p></div> 
                <div class='col' style='background-color: #f1f1f1;'><p>Estilo:" . iconv(mb_detect_encoding($row[5], mb_detect_order(), true), "UTF-8", $row[5]) . "</p></div> 
                <div class='col'><p>Instrumento:"  . iconv(mb_detect_encoding($row[6], mb_detect_order(), true), "UTF-8", $row[6]) . ".</p></div> 
                <div class='col' style='background-color: #f1f1f1;'><p>Cidade:" . iconv(mb_detect_encoding($row[3], mb_detect_order(), true), "UTF-8", $row[3]) . "</p></div> 
                <div class='col'></div> 
               
 
              <div class='col'><a href='update_pedido.php?id=" . iconv(mb_detect_encoding($row[13], mb_detect_order(), true), "UTF-8", $row[13]) . "' class='button'>Atender!</a></div>
                <div class='col'></div> 
              <div class='col'><a href='chamado_detalhes.php?id=" . iconv(mb_detect_encoding($row[13], mb_detect_order(), true), "UTF-8", $row[13]) . "' class='button'>Ver mais detalhes</a></div>  
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
 
<!-- Copyright --> 
<div id="copyright"> 
  <div class="container"> 
    <div class="copyright"> 
      <p>Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</p> 
      <p> Copyright © 2019 OVNIS.</p>
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