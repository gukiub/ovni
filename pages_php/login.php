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
    </style>
  </head>
  <body>
    </head>
  <body>
     <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.html"><img src="../images/logo-ovni.png" width="120px" height="56"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="../index.html">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="#">#</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="#">#</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="#">#</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" style="font-size: 16px;" href="login.php">Login</a>
          </li>
          <span class="navbar-text">
            |
          </span>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 16px;" href="../pages_html/cadastroCliente.html">Registrar-se</a>
          </li>
        </ul>
      </div>
  </nav>

  <!-- form -->
    <div class="jumbotron mb-0">
      <div class="container bg-light p-5 w-50">
        <h1 class="center text-center">Login</h1>
        <p></p>
      <form action="../pages_php/session.php" class="w-50 ml-auto mr-auto">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="Email" class="form-control" name="login" id="login" placeholder="Email" required>
          </div>
          <div class="form-group col-md-12">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha" required>
          </div>
        <input type="submit" class="btn btn-primary ml-auto mr-auto mt-4">
        <?php
          ini_set('display_errors', 0);
          ini_set('display_startup_errors', 0);
          error_reporting(E_ALL);
            $triescheck = $_GET['tentativa'];

            if ($triescheck == 1) {
                  echo "<div id='loginFailAlert' class='alert alert-danger'>
                      <strong>Você errou o login ou a senha!</strong>
                    </div>";
            }else{
              die();
            }
          ?>
      </form>
</div>
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/jquery.mask.js"></script>

      
  </body>
</html>