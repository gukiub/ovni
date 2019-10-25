<?php
// as variáveis login e senha recebem os dados digitados na página anterior

$cpf = $_SESSION['cpf'];

// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysqli_connect("localhost", "ovnism38_root", "admin") or die
 ("Sem conexão com o servidor");
$select = mysqli_select_db($con, "ovnism38_ovni") or die("Sem acesso ao DB, Entre em 
contato com o Administrador, ovni@gmail.com");
 
// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios

$result2 = $con->query("SELECT * FROM funcionario
    WHERE (CPF_func = '" . $cpf . "')"); //checar se foi login de um funcionario

$result3 = $con->query("SELECT * FROM cliente
    WHERE (CPF_clie = '" . $cpf . "')"); //checar se foi login de um funcionario

//pegar os dados do

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */


  
if (mysqli_num_rows($result2) > 0) {//checar se foi login de musico

  $row = $result2->fetch_assoc();

    //transforma resultado sql em string

    //assoscia a string em variáveis na session
    $_SESSION['nome'] = iconv(mb_detect_encoding($row["nome_func"], mb_detect_order(), true), "UTF-8", $row["nome_func"]);
    $_SESSION['senha'] = iconv(mb_detect_encoding($row["senha_func"], mb_detect_order(), true), "UTF-8", $row["senha_func"]);
    $_SESSION['bday'] = iconv(mb_detect_encoding($row["idade_func"], mb_detect_order(), true), "UTF-8", $row["idade_func"]);
    $_SESSION['email'] = iconv(mb_detect_encoding($row["email_func"], mb_detect_order(), true), "UTF-8", $row["email_func"]);
    $_SESSION['cel'] = iconv(mb_detect_encoding($row["tel_func"], mb_detect_order(), true), "UTF-8", $row["tel_func"]);
    //não tem celular
    $_SESSION['end'] = iconv(mb_detect_encoding($row["endereco_func"], mb_detect_order(), true), "UTF-8", $row["endereco_func"]);
    $_SESSION['end_complemento'] = iconv(mb_detect_encoding($row["complemento_func"], mb_detect_order(), true), "UTF-8", $row["complemento_func"]);
    $_SESSION['cidade'] = iconv(mb_detect_encoding($row["cidade_func"], mb_detect_order(), true), "UTF-8", $row["cidade_func"]);
    $_SESSION['estado'] = iconv(mb_detect_encoding($row["estado_func"], mb_detect_order(), true), "UTF-8", $row["estado_func"]);
    $_SESSION['cep'] = iconv(mb_detect_encoding($row["cep_func"], mb_detect_order(), true), "UTF-8", $row["cep_func"]);
    $_SESSION['cpf'] = iconv(mb_detect_encoding($row["CPF_func"], mb_detect_order(), true), "UTF-8", $row["CPF_func"]);
    //tem esses 3 a mais em comparação com o Cliente
    $_SESSION['instrumento'] = iconv(mb_detect_encoding($row["instrumento"], mb_detect_order(), true), "UTF-8", $row["instrumento"]);
    $_SESSION['estilo'] = iconv(mb_detect_encoding($row["estilo_musical"], mb_detect_order(), true), "UTF-8", $row["estilo_musical"]);
    $_SESSION['descricao'] = iconv(mb_detect_encoding($row["desc_func"], mb_detect_order(), true), "UTF-8", $row["desc_func"]);
    $_SESSION['date_expirar'] = iconv(mb_detect_encoding($row["data_expirar"], mb_detect_order(), true), "UTF-8", $row["data_expirar"]);
    $_SESSION['verify'] = iconv(mb_detect_encoding($row["verify_func"], mb_detect_order(), true), "UTF-8", $row["verify_func"]);

}elseif (mysqli_num_rows($result3) > 0) {//checar se foi login de cliente
  
  $row = $result3->fetch_assoc();

    $_SESSION['nome'] = iconv(mb_detect_encoding($row["nome_clie"], mb_detect_order(), true), "UTF-8", $row["nome_clie"]);
    $_SESSION['senha'] = iconv(mb_detect_encoding($row["senha_clie"], mb_detect_order(), true), "UTF-8", $row["senha_clie"]);
    $_SESSION['email'] = iconv(mb_detect_encoding($row["email_clie"], mb_detect_order(), true), "UTF-8", $row["email_clie"]);
    $_SESSION['bday'] = iconv(mb_detect_encoding($row["idade_clie"], mb_detect_order(), true), "UTF-8", $row["idade_clie"]);
    $_SESSION['tel'] = iconv(mb_detect_encoding($row["tel_fixo_clie"], mb_detect_order(), true), "UTF-8", $row["tel_fixo_clie"]);
    $_SESSION['cel'] = iconv(mb_detect_encoding($row["tel_celular_clie"], mb_detect_order(), true), "UTF-8", $row["tel_celular_clie"]);
    $_SESSION['end'] = iconv(mb_detect_encoding($row["endereco_clie"], mb_detect_order(), true), "UTF-8", $row["endereco_clie"]);
    $_SESSION['end_complemento'] = iconv(mb_detect_encoding($row["complemento_clie"], mb_detect_order(), true), "UTF-8", $row["complemento_clie"]);
    $_SESSION['cidade'] = iconv(mb_detect_encoding($row["cidade_clie"], mb_detect_order(), true), "UTF-8", $row["cidade_clie"]);
    $_SESSION['estado'] = iconv(mb_detect_encoding($row["estado_clie"], mb_detect_order(), true), "UTF-8", $row["estado_clie"]);
    $_SESSION['cep'] = iconv(mb_detect_encoding($row["cep_clie"], mb_detect_order(), true), "UTF-8", $row["cep_clie"]);
    $_SESSION['cpf'] = iconv(mb_detect_encoding($row["CPF_clie"], mb_detect_order(), true), "UTF-8", $row["CPF_clie"]);
    $_SESSION['verify'] = iconv(mb_detect_encoding($row["verify_clie"], mb_detect_order(), true), "UTF-8", $row["verify_clie"]);
}

else{//logou errado
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  $_SESSION['logged_in']=false;
  $_SESSION['message'] = "ALGO DEU ERRADO!";
  header('location: ../pages_php/mensagem.php');
  
  }
?>