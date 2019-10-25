<?php 	 
	include('conexao.php');
	$nome1 = $_GET['nome']; 
	$email1 = $_GET['email'];
	$telefone1 = $_GET['telefone'];
	$celular1 = $_GET['celular'];
	$senha1 = $_GET['senha'];
	$senha_hash = password_hash($senha1, PASSWORD_DEFAULT);
	$endereco1 = $_GET['endereco'];
	$cpf1 = $_GET['cpf'];
	$complemento1 = $_GET['complemento'];
	$cidade1 = $_GET['cidade'];
	$estado1 = $_GET['estado'];
	$idade1 = $_GET['idade'];
	$cep1 = $_GET['cep'];
	$verify = $_GET['verify'];
	$con = mysqli_connect("localhost", "ovnism38_root", "admin") or die
 	("Sem conexão com o servidor");
 	$select = mysqli_select_db($con, "ovnism38_ovni") or die("Sem acesso ao DB, Entre em 
	contato com o Administrador, ovni@gmail.com");

	$result = $con->query("SELECT * FROM cliente
            WHERE (email_clie = '" . $email1 . "' or CPF_clie = '" . $cpf1 . "')");

	$mysqli_num_rows = mysqli_num_rows($result);

	if ($mysqli_num_rows > 0){
           echo "<script>document.location='../pages_php/cadastroCliente.php?erro'</script>";
	 }

else{
	$sql = "INSERT INTO cliente
				(nome_clie, 
				email_clie,
				idade_clie, 
				tel_fixo_clie, 
				tel_celular_clie,
				senha_clie, 
				endereco_clie,
				complemento_clie,
				cidade_clie,
				estado_clie,
				cep_clie,
				CPF_clie,
				verify_clie
				)
		VALUES
			('".$nome1."','"
				.$email1."','"
				.$idade1."','"
				.$telefone1."','"
				.$celular1."','"
				.$senha_hash."','"
				.$endereco1."','"
				.$complemento1."','"
				.$cidade1."','"
				.$estado1."','"
				.$cep1."','"
				.$cpf1."',"
				."0".
				")";

$PDO->query($sql); //comando de enviar o sql

echo "<script>document.location='login.php'</script>";


}

 ?>