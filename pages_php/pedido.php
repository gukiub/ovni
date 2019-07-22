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

    <title>Ovni - Pedidos</title>
    <style type="text/css">
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php 
      session_start();
    ?>
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
              echo "<li class='nav-item'>
            <a class='nav-link' href='chamado.php'>Chamados</a>
              </li>";
            }
          }
          if($_SESSION['tipo'] === 'musico'){
            if ($_SESSION['logged_in'] === true) {
              echo "<li class='nav-item'>
            <a class='nav-link' href='chamado_atendido.php'>Chamados Atendidos</a>
              </li>";
              }
          }
          if ($_SESSION['logged_in'] === true) {
            echo "<li class='nav-item'>
              <li class='nav-item active'>
              <a class='nav-link' href='pedido.php'>Faça seu Pedido!</a>
              </li>";
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

    <div class="jumbotron mb-0">
      <div class="container bg-light p-5">
        <h1 class="center text-center">Realizar Pedido</h1>
        <p></p>
      <form action="../pages_php/salvar_pedido.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nome">Endereço do evento</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: nome do logradouro, n° - bairro" maxlength="30" required>
          </div>
          <div class="form-group col-md-4">
            <label for="idade">Data do evento</label>
            <input type="date" class="form-control" name="data" id="data" placeholder="Data do Evento" maxlength="30" required> 
          </div>
          <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" maxlength="30" required> 
          </div>
          <div class="form-group col-md-4">
            <label for="hora">Hora</label>
            <input type="text" class="form-control" name="hora" id="hora" placeholder="hh:mm" maxlength="30" required>
          </div>
          <!-- Não precisa de estado?
          <div class="form-group col-md-4">
            <label for="estado">Estado</label>
              <select name="estado" id="estado" class="form-control">
                <option>Selecione</option>
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
          </div> -->
          <div class="form-group col-md-4">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: SP" maxlength="30" required>
          </div> 
          <div class="form-group col-md-4">
            <label for="instrumento">Instrumento</label>
              <select name="instrumento" id="instrumento" class="form-control" required>
                <option selected>Acordeão</option>
                <option>Baixo</option>
                <option>Bateria</option>
                <option>Cavaco</option>
                <option>Flauta</option>
                <option>Guitarra</option>
                <option>Instrumentos (DJ)</option>
                <option>Órgão</option>
                <option>Piano</option>
                <option>Saxofone</option>
                <option>Teclado</option>
                <option>Trombone</option>
                <option>Trompa</option>
                <option>Trompete</option>
                <option>Viola</option>
                <option>Violão</option>
                <option>Violino</option>
              </select>
          </div>
          <div class="form-group col-md-4">
            <label for="estilo">Estilo Musical Principal</label>
              <select name="estilo_musical" id="estilo" class="form-control" required>
                <option selected>Alternativa</option>
                <option>Axé</option>
                <option>Blues</option>
                <option>Country</option>
                <option>Dance</option>
                <option>Eletrônica</option>
                <option>Folk</option>
                <option>Forró</option>
                <option>Funk</option>
                <option>Hip-Hop</option>
                <option>Jazz</option>
                <option>MPB</option>
                <option>Pagode</option>
                <option>R&B</option>
                <option>Reggae</option>
                <option>Rock</option>
                <option>Samba</option>
                <option>Sertanejo</option>
              </select>
          </div>
          <div class="form-group col-md-12">
              <label for="descricao">Descrição do Pedido</label>
              <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
            </div>
        </div>
        <input type="submit" class="btn btn-primary">
      </form>

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
          $("#cpf").mask('999.999.999-99');
          $("#hora").mask('99:99');
          $("#cep").mask('99999-999');
          $("#telefone").mask("(99)9999-9999");
          $("#celular").mask("(99)99999-9999");
        });
      });
    </script>
  </body>
</html>