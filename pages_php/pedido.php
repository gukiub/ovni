<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">

    <title>Ovni</title>
    <style type="text/css">
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php"><img src="../images/logo-ovni.png" width="120px" height="56"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="../index.php">Página Inicial</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="../pages_php/login.php">Login</a>
          </li>
          <span class="navbar-text">
            |
          </span>
          <li class="nav-item active">
            <a class="nav-link" style="font-size: 16px;" href="cadastroMusicos.html">Registrar-se</a>
          </li>
        </ul>
      </div>
  </nav>

    <div class="jumbotron mb-0">
      <div class="container bg-light p-5">
        <h1 class="center text-center">Realizar Pedido</h1>
        <p></p>
      <form action="../pages_php/salvar_funcionario.php" class="w-50 ml-auto mr-auto">
        <input type="hidden" name="disp_func" value="1">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nome">Endereço do evento</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: nome do logradouro, n° - bairro">
          </div>
          <div class="form-group col-md-4">
            <label for="idade">Data do evento</label>
            <input type="date" class="form-control" name="data" id="data" placeholder="Data do Evento"> 
          </div>
          <div class="form-group col-md-4">
            <label for="idade">CEP</label>
            <input type="text" class="form-control" name="data" id="data" placeholder="CEP"> 
          </div>
          <div class="form-group col-md-4">
            <label for="email">Hora</label>
            <input type="text" class="form-control" name="hora" id="hora" placeholder="hora">
          </div>
          <!-- <div class="form-group col-md-4">
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
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: SP">
          </div> 
          <div class="form-group col-md-4">
            <label for="instrumento">Instrumento</label>
              <select name="instrumento" id="instrumento" class="form-control">
                <option>Selecione</option>
                <option>Acordeão</option>
                <option>Baixo</option>
                <option>Bateria</option>
                <option>Cavaco</option>
                <option>Flauta</option>
                <option>Guitarra</option>
                <option>Instrumentos (DJ</option>
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
              <select name="estilo_musical" id="estilo" class="form-control">
                <option>Selecione</option>
                <option>Alternativa</option>
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
              <label for="descricao">Descrição </label>
              <textarea class="form-control" id="descricao" name="descricao_func" rows="3"></textarea>
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
          $("#cep").mask('99999-999');
          $("#telefone").mask("(99)9999-9999");
          $("#celular").mask("(99)99999-9999");
        });
      });
    </script>
  </body>
</html>