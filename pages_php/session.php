<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['email'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$HOST = "localhost";
		$BANCO = "ovni";
		$USUARIO = "root";
		$SENHA = "";
$select = mysql_select_db("ovni") or die("Sem acesso ao DB, Entre em 
contato com o Administrador, ovni@gmail.com");
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `cliente`,'funcionario' 
WHERE `cpf_clie`,'cpf_func' = ('$email_clie' AND `senha_clie`) AND ('$email_func' AND 'senha_func') = '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['email'] = $login;
$_SESSION['senha'] = $senha;
header('location:index.html');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:login.php');
   
  }
?>