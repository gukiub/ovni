		<?php
	try{
		$HOST = "localhost";
		$BANCO = "ovnism38_ovni";
		$USUARIO = "ovnism38_root";
		$SENHA = "admin";

		$PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);

	}	catch (PDOException $erro){
		echo "Erro na hora de conectar:" . $erro->getMessage();
		echo "conexao_erro";
	}

	?>