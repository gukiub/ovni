<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$email = $_GET['login'];
$senha = $_GET['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysqli_connect("localhost", "root", "") or die
 ("Sem conexão com o servidor");
$select = mysqli_select_db($con, "ovni") or die("Sem acesso ao DB, Entre em 
contato com o Administrador, ovni@gmail.com");
 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = $con->query("SELECT * FROM cliente, funcionario 
    WHERE (email_clie = '" . $email . "' and senha_clie = '" . $senha . "') or (email_func = '" . $email . "' and senha_func = '" . $senha . "')");

$result2 = $con->query("SELECT * FROM funcionario 
    WHERE (email_func = '" . $email . "' and senha_func = '" . $senha . "')"); //checar se foi login de um funcionario

$result3 = $con->query("SELECT * FROM cliente 
    WHERE (email_clie = '" . $email . "' and senha_clie = '" . $senha . "')"); //checar se foi login de um funcionario

//pegar os dados do 



/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */


if(mysqli_num_rows ($result) > 0 )//logou certo
{ 
	$_SESSION['login'] = $email;
	$_SESSION['senha'] = $senha;

	if (mysqli_num_rows($result2) > 0) {//checar se foi login de musico
		$_SESSION['tipo'] = "musico";
		$_SESSION['logged_in']=true;

		//transforma resultado sql em string
		$row = $result->fetch_assoc();

		//assoscia a string em variáveis na session
		$_SESSION['nome'] = $row["nome_func"];
		$_SESSION['bday'] = $row["idade_func"];
		$_SESSION['email'] = $row["email_func"];
		$_SESSION['tel'] = $row["tel_func"];
		//não tem celular
		$_SESSION['end'] = $row["endereco_func"];
		$_SESSION['end_complemento'] = $row["complemento_func"];
		$_SESSION['cidade'] = $row["cidade_func"];
		$_SESSION['estado'] = $row["estado_func"];
		$_SESSION['cep'] = $row["cep_func"];
		$_SESSION['cpf'] = $row["CPF_func"];
		$_SESSION['img'] = $row["img_perfil"];
		//tem esses 3 a mais em comparação com o Cliente
		$_SESSION['instrumento'] = $row["instrumento"];
		$_SESSION['estilo'] = $row["estilo_musical"];
		$_SESSION['descricao'] = $row["desc_func"];

		header('location:../index.php');
		
	}elseif (mysqli_num_rows($result3) > 0) {//checar se foi login de cliente
		$_SESSION['tipo'] = "cliente";
		$_SESSION['logged_in']=true;

		$row = $result->fetch_assoc();

		$_SESSION['nome'] = $row["nome_clie"];
		$_SESSION['email'] = $row["email_clie"];
		$_SESSION['bday'] = $row["idade_clie"];
		$_SESSION['tel'] = $row["tel_fixo_clie"];
		$_SESSION['cel'] = $row["tel_celular_clie"];
		$_SESSION['end'] = $row["endereco_clie"];
		$_SESSION['end_complemento'] = $row["complemento_clie"];
		$_SESSION['cidade'] = $row["cidade_clie"];
		$_SESSION['estado'] = $row["estado_clie"];
		$_SESSION['cep'] = $row["cep_clie"];
		$_SESSION['cpf'] = $row["CPF_clie"];
		$_SESSION['img'] = $row["img_perfil"];

		header('location:pesquisar_musicos.php');

	}
}
else{//logou errado
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location: ../pages_php/login.php?tentativa=1');
  }
?>