<?php

$db = mysqli_connect("localhost", "root", "m0nt3v3rd3", "sgcj") or die ("Error de Conexion a la base de datos");

mysqli_set_charset($db, 'utf8');

if (mysqli_connect_errno()) {
     echo "Error al conectar con la BD: " . mysqli_connect_error();
}


?>
