<?php

	include_once("connect.php");

	$sql = "SELECT * FROM `tb_status`;";
	$req = mysqli_query($conn, $sql);

	while ($register = mysqli_fetch_array($req)) {
		$id = $register[0];
		$status = $register[1];
	}

	if ($status == 0 OR $status == null) {
		$status = 0;
	}

	echo $status;

?>