<?php
	
	# Incluindo Arquivo de conexão com Banco de dados
	include_once("connect.php");

	# Recebendo o STATUS DO FORMULÁRIO	
	$status = $_REQUEST["status"];

	# Inserindo no banco de dados
	$sql = "UPDATE `tb_status` SET `status` = '".$status."' WHERE `tb_status`.`id_lamp` = 1;";
	$req = mysqli_query($conn, $sql);

	# Definindo Status
	if ($status == 0) {
		$consoleLog = "Desligado";
	}else {
		$consoleLog = "Ligado";
	}

	echo $consoleLog;

?>