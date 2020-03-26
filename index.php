<?php
	
	if (isset($_GET["result"])) {
		# Inclui página de Resultado
		include_once("view/result.php");
	}else {
		# Inclui arquivo de Template
		include_once("view/template.php");
	}

?>