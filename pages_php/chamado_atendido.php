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
ini_set('display_errors', 1);  
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 
 //não mostrar mensagens de erros 
 
include('conexao.php');//conecta ao banco de dados 
 
$con=mysqli_connect("localhost","ovnism38_root","admin","ovnism38_ovni"); 
   

 
 
  if ($_SESSION['tipo'] === 'musico') { 
   $sql="SELECT * FROM realiza_pedido WHERE CPF_func_FK = '" . $_SESSION['cpf'] . "'  ORDER BY realiza_pedido.data_evento ASC"; 
  }elseif ($_SESSION['tipo'] === 'cliente') { 
    $sql="SELECT * FROM realiza_pedido WHERE CPF_clie_FK = '" . $_SESSION['cpf'] . "'  ORDER BY realiza_pedido.data_evento ASC"; 
  }; 
 
   
?> 
 
<html> 
<head> 
  <title>OVNI - Chamados Atendidos</title> 
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
      margin-top: 0.4em;
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
   include('menu.php');
 
  ?>
  
 
      <!-- PESQUISAR MUSICOS --> 
<div id="extra" style="padding-top: 4em;"> 
  <div class="container" style="min-height: 300px;"> 
    <div class="row no-collapse-1"> 
 
      <?php 
        if ($result=mysqli_query($con,$sql)) 
          { 
          // Fetch one and one row 
            //INICIO DO WHILE
          while ($row= mysqli_fetch_row($result)) 
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


                <a href='chamado_detalhes.php?id=" . iconv(mb_detect_encoding($row[13], mb_detect_order(), true), "UTF-8", $row[13]) . "' class='button'>Ver mais detalhes</a>"; 
 
                if ($_SESSION['tipo'] === 'cliente') {

                  echo "
                  <a href='../pages_php/delete_row.php?id=" . iconv(mb_detect_encoding($row[13], mb_detect_order(), true), "UTF-8", $row[13]) . "'>
                  <div class='bg-danger arrependimento'>
                    <div>
                      <p class='text-white'>
                        Deletar Evento
                      </p>
                    </div>
                  </div>
                  </a>
                  ";
                  // echo "div quadrada com xzinho link para outro arquivo -> sql delete from table where id=row13";
                  //sql = DELETE FROM realiza_pedido WHERE ID_pedido_PK = row[13];

                }elseif ($_SESSION['tipo'] === 'musico') {
                  
                  echo "
                  <a href='../pages_php/arrependimento_row.php?id=" . iconv(mb_detect_encoding($row[13], mb_detect_order(), true), "UTF-8", $row[13]) . "'>
                  <div class='bg-danger arrependimento'>
                    <button type='button' class='close' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                    <div>
                      <p class='text-white'>
                        Arrependimento
                      </p>
                    </div>
                  </div>
                  </a>
                  ";
                  // echo "div quadrada com xzinho link para outro arquivo -> sql alter table  where id=row13";
                  //sql = UPDATE realiza_pedido SET CPF_clie_FK="" , status_pedido="0" WHERE ID_pedido_PK = row[13];

                }
 
              echo "</div>
              </section>";
             
            } 
            //FIM DO WHILE
          // Free result set 
          mysqli_free_result($result); 
        }
       
       
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