<?php 
	include('conexao.php');
	$nome2 = $_GET['nome']; 
	$email2 = $_GET['email'];
	$telefone2 = $_GET['telefone'];
	$instrumento = $_GET['instrumento'];
	$estilo_musical = $_GET['estilo_musical'];
	$senha2 = $_GET['senha'];
	$senha_hash = password_hash($senha2, PASSWORD_DEFAULT);
	$endereco2 = $_GET['endereco'];
	$cpf2 = $_GET['cpf'];
	$complemento2 = $_GET['complemento'];
	$cidade2 = $_GET['cidade'];
	$estado2 = $_GET['estado'];
	$idade2 = $_GET['idade'];
	$cep2 = $_GET['cep'];
	$descricao2 = $_GET['descricao_func'];
	$date_expirar = $_GET['data_expirar'];
	$con = mysqli_connect("localhost", "ovnism38_root", "admin") or die
 	("Sem conexão com o servidor");
 	$select = mysqli_select_db($con, "ovnism38_ovni") or die("Sem acesso ao DB, Entre em 
	contato com o Administrador, ovni@gmail.com");

	$result = $con->query("SELECT * FROM funcionario 
            WHERE (email_func = '" . $email2 . "' or cpf_func = '" . $cpf2 . "')");

	$mysqli_num_rows = mysqli_num_rows($result);

	if ($mysqli_num_rows > 0){
		echo "<script>document.location='cadastroMusicos.php?erro'</script>";
	 }

else{
	$sql = "INSERT INTO funcionario
				(nome_func, 
				cpf_func,
				endereco_func,
				complemento_func,
				idade_func,
				cidade_func,
				estado_func,
				tel_func,
				instrumento,
				senha_func,
				cep_func,
				email_func,
				estilo_musical,
				desc_func,
				data_expirar,
				verify_func
				)
		
		VALUES
			('".$nome2."','"
				.$cpf2."','"
				.$endereco2."','"
				.$complemento2."','"
				.$idade2."','"
				.$cidade2."','"
				.$estado2."','"
				.$telefone2."','"
				.$instrumento."','"
				.$senha_hash."','"
				.$cep2."','"
				.$email2."','"
				.$estilo_musical."','"
				.$descricao2."','"
				.$date_expirar."',"
				."0".
				")";

$PDO->query($sql); //comando de enviar o sql

echo "<script>document.location='login.php'</script>";

}


 ?>