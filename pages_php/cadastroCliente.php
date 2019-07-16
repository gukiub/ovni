<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ovni</title>
    <style type="text/css">
      .collapse ul li a{
        font-size: 16px;
      }
    </style>
  </head>
  <body>
     <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php"><img src="../images/logo-ovni.png" width="120px" height="56"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">#</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">#</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">#</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../pages_php/login.php">Login</a>
          </li>
          <span class="navbar-text">
            |
          </span>
          <li class="nav-item active">
            <a class="nav-link" href="cadastroCliente.php">Registrar-se</a>
          </li>
        </ul>
      </div>
  </nav>

  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5">
        <h1 class="center text-center">Cadastro do Cliente</h1>
        <p></p>
      <form action="../pages_php/salvar_cliente.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
          </div>
          <div class="form-group col-md-6">
            <label for="idade">Data de Nascimento</label>
            <input type="date" class="form-control" name="idade" id="idade" placeholder="Idade" min="18" max="99"> <!-- maple -->
          </div>
          <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="Email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: Avenida Paulista, Nº">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="complemento">Complemento do endereço</label>
            <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento(Opcional)">
          </div>
          <div class="form-group col-md-6">
            <label for="cpf1">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf1" placeholder="000.000.000-00">
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
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex:SP">
          </div>

          <div class="form-group col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000">
          </div>
          <div class="form-group col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(00)0000-0000">
          </div>
          <div class="form-group col-md-6">
            <label for="celular">Ou Celular</label>
            <input type="text" class="form-control" name="celular" id="celular" placeholder="(00)00000-0000">
          </div>
          <div class="form-group col-md-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha">
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

  </body>
</html>