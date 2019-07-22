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
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>
      <link rel="stylesheet" href="../css/skel.css" />
      <link rel="stylesheet" href="../css/style.css" />
      <link rel="stylesheet" href="../css/style-wide.css" />


    <title>Ovni - Cadastro Cliente</title>
    <style type="text/css">
      .collapse ul li a{
        font-size: 16px;
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
           if ($_SESSION['tipo'] === 'musico') {
            if ($_SESSION['logged_in'] === true) {
         echo "<div class='dropdown'>
        <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' style='background-color: #343a40;
    border-color: #343a40;'>
          Pedidos
        </button>
        <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
          <a class='dropdown-item' href='chamado.php' style='text-decoration: none;'>Chamados</a>
          <a class='dropdown-item' href='chamado_atendido.php' style='text-decoration: none;'>Chamados Atendidos</a>

          <a class='dropdown-item' href='pedido.php' style='text-decoration: none;'>Faça seu pedido</a>
        </div>
      </div>";
    }
  }
         
          if ($_SESSION['logged_in'] === true) {
            if ($_SESSION['tipo'] === 'cliente') {
              echo "<li class='nav-item'>
              <li class='nav-item'>
              <a class='nav-link' href='pedido.php'>Faça seu Pedido!</a>
              </li>";
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

  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5">
        <h1 class="center text-center">Cadastro do Cliente</h1>
        <p></p>
      <form action="../pages_php/salvar_cliente.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" maxlength="35">
          </div>
          <div class="form-group col-md-6">
            <label for="idade">Data de Nascimento</label>
            <input type="date" class="form-control" name="idade" id="idade" placeholder="Idade" min="18" max="99"> <!-- maple -->
          </div>
          <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="Email" class="form-control" name="email" id="email" placeholder="Email" maxlength="30">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: Avenida Paulista, Nº" maxlength="30">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="complemento">Complemento do endereço</label>
            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento(Opcional)" maxlength="30">
          </div>
          <div class="form-group col-md-6">
            <label for="cpf1">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf1" placeholder="000.000.000-00" maxlength="30">
          </div>
          <div class="form-group col-md-4">
            <label for="estado">Estado</label>
              <select name="estado" id="estado" class="form-control">
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Distrito Federal(Brasília)</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option selected>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
              </select>
          </div>
          <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex:SP" maxlength="30">
          </div>

          <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" maxlength="30">
          </div>
          <div class="form-group col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00)0000-0000" maxlength="30">
          </div>
          <div class="form-group col-md-6">
            <label for="celular">Ou Celular</label>
            <input type="text" class="form-control" name="celular" id="celular" placeholder="(00)00000-0000" maxlength="30">
          </div>
          <div class="form-group col-md-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha" maxlength="30">
          </div>
          <div class="hide form-group col-md-12">
            <label for="image"></label>
            <input type="hidden" class="form-control hide" name="imagem" id="imagem">
          </div>
        </div>
        <input type="submit" class="btn btn-primary">
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
          $("#cpf1").mask('999.999.999-99');
          $("#cep").mask('99999-999');
          $("#telefone").mask("(99)9999-9999");
          $("#celular").mask("(99)99999-9999");
        });
      });
    </script>

    <!--<script>
      function TestaCPF(strCPF) {
          var Soma;
          var Resto;
          Soma = 0;
        if (strCPF == "00000000000") return false;
           
        for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;
         
          if ((Resto == 10) || (Resto == 11))  Resto = 0;
          if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
         
        Soma = 0;
          for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
          Resto = (Soma * 10) % 11;
         
          if ((Resto == 10) || (Resto == 11))  Resto = 0;
          if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
          return true;
      }
      var strCPF = "12345678909";
      alert(TestaCPF(strCPF));
    </script> -->

  </body>
</html>