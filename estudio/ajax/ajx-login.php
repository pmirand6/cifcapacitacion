<?php

session_start();

include ("../recursos/db.php");

//$_POST["usuario"] = "dasd";
//$_POST["password"] = "dasd";


if ($_POST["oper"] == "logUser"  AND !empty($_POST["usuario"]) AND !empty($_POST["password"])) {

	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	$query = "SELECT * FROM usuario where nombre_usuario = '$usuario' and password_usuario = '$password'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			
			$_SESSION['usr_name'] = $row['nombre_usuario'];
			
		}
	} else

	{

		echo "ERROR no se encontro el usuario";
	}
//		echo "OK";

} 

	else {

		echo "VACIO";

	}


mysqli_free_result($result);  
mysql_close($db);



?>