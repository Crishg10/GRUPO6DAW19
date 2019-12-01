<?php
	$con = new mysqli($mvc_bd_hostname, $mvc_bd_usuario, $mvc_bd_clave, $mvc_bd_nombre);
	include("Config.php");

	if ($con->connect_error) {
		die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
	} else {
		include ("alimentos.sql.php");
		if ($con -> multi_query($sentenciasql) === TRUE) {
			header("Location: ../web/index.php");
		}
	}
?> 