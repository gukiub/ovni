<style>
  /*telas de celulares*/
  @media (max-width: 991px) {

	
  }

  /*telas de computadores*/
  @media (min-width: 992px) {
    
    .nav-item{
             margin-left: 1em;
          }
  }


</style> 

<header style="background-color: white;"><meta http-equiv="Content-Type" content="text/html; charset=shift_jis"><meta https-equiv="Content-Type" content="text/html; charset=utf-8">
  <nav class="navbar navbar-expand-lg navbar-light" style="padding: 0.5rem 0.5rem 0.5rem 0.5rem;">
    <a class="navbar-brand" href="../index.php"><img src="../images/logo-ovni.png" width="auto" height="40px"></a>
    <button class="navbar-toggler" id="navbar-toggler" type="button" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span> 
    </button> 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item btn active"> 
          <a class="nav-link"  href="../index.php">Página Inicial</a> 
        </li> 

        <?php 
        if ($_SESSION['logged_in'] === false ){ 
          echo "<li class='nav-item btn'> 
          <a class='nav-link' href='../pages_php/login.php'>Perfil</a> 
          </li>"; 
        } 
         
        else{ 
          if ($_SESSION['tipo'] === 'musico') { 
            echo "<li class='nav-item btn'> 
          <a class='nav-link' href='../pages_php/perfil_musico.php'>Perfil</a> 
          </li>"; 
          } 
          elseif ($_SESSION['tipo'] === 'cliente') { 
            echo "<li class='nav-item btn'> 
          <a class='nav-link' href='../pages_php/perfil_cliente.php'>Perfil</a> 
          </li>"; 
          } 
        } 
        ?> 
        <?php 
         if ($_SESSION['logged_in'] === true) { 
          if ($_SESSION['tipo'] === 'musico') { 
           echo "<div class='nav-item btn dropdown'> 
              <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false'> 
                Pedidos 
              </button> 
              <div class='dropdown-menu' id='dropdown-menu' aria-labelledby='dropdownMenuButton'> 
                <a class='dropdown-item' href='../pages_php/pedido.php' style='text-decoration: none;'>Faça seu pedido</a>
                <a class='dropdown-item' href='../pages_php/verificar_pagamento.php' style='text-decoration: none;'>Chamados</a>
                <a class='dropdown-item' href='../pages_php/chamado_atendido.php' style='text-decoration: none;'>Chamados Atendidos</a>
              </div>
            </div>";
          }elseif ($_SESSION['tipo'] === 'cliente') {
            echo "<div class='nav-item btn dropdown'>
              <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false'>
                Pedidos 
              </button>
              <div class='dropdown-menu' id='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                <a class='dropdown-item' href='../pages_php/pedido.php' style='text-decoration: none;'>Faça seu pedido</a>
                <a class='dropdown-item' href='../pages_php/chamado_atendido.php' style='text-decoration: none;'>Pedidos feitos</a>
              </div>
            </div>";
          } 
        }; 
      ?> 
  </ul>
  <ul class="navbar-nav ml-auto divmenu1"> 
      <?php 
      //SE ESTIVER LOGADO
      if ($_SESSION['logged_in'] === true ){ 
      //EXIBE O BOTÃO DE LOGOUT
        echo "
                <li class='nav-item btn'>
                  <a class='nav-link' href='../pages_php/logout.php'>logout</a>
                </li>
                <li class='nav-item btn'>";
              //E EXIBE O NOME DO CLIENTE
              if ($_SESSION['tipo'] === 'cliente' ) {
                  echo "<a class='nav-link' href='../pages_php/perfil_cliente.php' id='cadastro'>" . $_SESSION['nome'] . "</a>
               </li>";
              } //OU DO MUSICO
              elseif ($_SESSION['tipo'] === 'musico' ) {
                  echo "<a class='nav-link' href='../pages_php/perfil_musico.php' id='cadastro'>" . $_SESSION['nome'] . "</a>
               </li>";
              }
          }
          else{
              echo "
            <div class='nav-item btn dropdown'>
              <button class='btn dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown'  aria-haspopup='true' aria-expanded='false' >
                Registrar-se
              </button>
              <div class='dropdown-menu' id='dropdown-menu' aria-labelledby='dropdownMenuButton' style='left: -4vw;'>
                <a class='dropdown-item' href='../pages_php/cadastroCliente.php' style='text-decoration: none;'>Contrate um musico</a>
                <a class='dropdown-item' href='../pages_php/cadastroMusicos.php' style='text-decoration: none;'>Atenda a eventos</a>
              </div>
            </div>
          "; 
          echo"<li class='nav-item btn active'> 
              <a class='nav-link' href='../pages_php/login.php'>Login</a>
            </li>
          ";
          }
        ?>
        </ul>
    </div>
  </nav>
</header>

    <script type="text/JavaScript"> //JQUERY
    
      $(document).ready(function() {
        jQuery(function($){

          $("#navbar-toggler").click(function(){
            $("#navbarNavDropdown").toggleClass("show");
          });


          $("#dropdownMenuButton").click(function(){
            $("#dropdown-menu").toggleClass("show");
          });


        });
      });
    </script>