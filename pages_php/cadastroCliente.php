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
    <script src="../js/init.js"></script> 
      <!-- <link rel="stylesheet" href="../css/skel.css" /> -->
      <link rel="stylesheet" href="../css/style.css" /> 
      <link rel="stylesheet" href="../css/style-wide.css" /> 

    <title>Ovni - Cadastro Cliente</title> 
    <style type="text/css">
      .collapse ul li a, .nav-item a{
        font-size: 16px; text-decoration: none; font-family: sans-serif
      }
      .loggedOutDiv1{
        margin-top: -2.7em;
      }
      .loggedOutDiv2{
        margin-top: -1.5em;
        margin-left: 0.65em;
      }

      .carousel-indicators li{
        width: 25px;
        height: 25px;
        border-radius: 50%;
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
  </head>
  <body>
  
  <?php
   include('menu.php');
  ?>
  
  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5" style="border-radius: 25px">
         <?php 
            $url_atual= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if ($url_atual == "http://ovnis.mus.br/pages_php/cadastroCliente.php?erro" || $url_atual == "http://www.ovnis.mus.br/pages_php/cadastroCliente.php?erro"){
            echo "<div class='alert alert-warning w-25 mr-auto ml-auto' role='alert'>
            <center>Usuário já cadastrado.</center>
            </div>";
            };
            ?>
        <h1 class="center text-center">Cadastro do Cliente</h1>
        
        <div class="text-center"><p>Agora falta pouco para você conseguir realizar os seus pedidos!</p></div>
        
        <p></p>
      <form action="../pages_php/salvar_cliente.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nome">Nome Completo:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" maxlength="35" minlength="7" required>
          </div>
          <div class="form-group col-md-6">
            <label for="idade">Data de Nascimento:</label>
            <input type="date" class="form-control" name="idade" id="idade" placeholder="Idade" required> <!-- maple -->
          </div>
          <div class="form-group col-md-12">
            <label for="email">E-mail:</label>
            <input type="Email" class="form-control" name="email" id="email" placeholder="Email" minlength="5" maxlength="30" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: Avenida Paulista, Nº" minlength="5" maxlength="30" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="complemento">Complemento do Endereço:</label>
            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento(Opcional)" minlength="3" maxlength="30">
          </div>
          <div class="form-group col-md-6">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf1" placeholder="000.000.000-00" maxlength="14" minlength="14" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="estado">Estado:</label>
              <select name="estado" id="estado" class="form-control" required>
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
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex:SP" maxlength="30" minlength="2" required>
          </div>
          <div class="form-group col-md-4">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" maxlength="30" minlength="9" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00)0000-0000" minlength="13" maxlength="13">
          </div>
          <div class="form-group col-md-6">
            <label for="celular">Ou Celular:</label>
            <input type="text" class="form-control" name="celular" id="celular" placeholder="(00)00000-0000" minlength="14" maxlength="14">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha" minlength="8" maxlength="30" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="confirma_senha">Confirmar:</label>
            <input type="password" class="form-control" id="confirma_senha" placeholder="Confirmar senha" minlength="8" maxlength="30" required>
          </div>
        </div>
        <div class="form-check">
   <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">eu aceito os <a href="termos.php" target="_blank">Termos de condições de uso</a></label>
  </div>
        <p></p>
        <input type="submit" class="btn btn-primary">
        <input type="reset" class="btn btn-primary">
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
      $(document).ready(function() {
        jQuery(function($){
          $("#cpf1").mask('999.999.999-99');
          $("#cep").mask('99999-999');
          $("#telefone").mask("(99)9999-9999");
          $("#celular").mask("(99)99999-9999");
        });
      });

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