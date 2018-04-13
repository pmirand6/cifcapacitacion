<?php


// Esta funcion carga el combo de tipo de consulta //
function tipo_consulta(){

  include ("../recursos/db.php");

  $query = "SELECT * FROM tipo_consulta";
  $result = mysqli_query($db, $query);

  while ($row = mysqli_fetch_assoc($result)) {
      echo "<option id=". $row["id_tipo_consulta"].">" . $row["nombre"] . "</option>";
  }

  mysqli_free_result($result);  
  mysql_close($db);

}

?>