
<?php

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "m0nt3v3rd3";
$mysql_db_database = "sgcj";



$con = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
    $mysql_db_database);

if (!$con) {
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
$var = array();
$sql = "SELECT * FROM llenar_grilla";
$result = mysqli_query($con, $sql);

while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;
}
echo '{"cliente_consulta":'.json_encode($var).'}';

