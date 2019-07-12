		<?php
	try{
		$HOST = "localhost";
		$BANCO = "ovni";
		$USUARIO = "root";
		$SENHA = "";

		$PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);

	}	catch (PDOException $erro){
		echo "Erro na hora de conectar:" . $erro->getMessage();
		echo "conexao_erro";
	}

	?>