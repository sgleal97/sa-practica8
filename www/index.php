<html><head><meta charset="utf-8"></head>

<body>

<table width="70%" border="1px" align="center">
<tr align="center">
        <td>Carnet</td>
        <td>Nombre</td>
    </tr>
<?php

$mysqli = new mysqli("mysql", "root", "1234", "practica8");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
echo "Conexión exitosa";

if ($result = $mysqli->query("SELECT * FROM DATOS")) {
    #echo "Returned rows are: ", $result->num_rows ;
    
    $numfilas = $result->num_rows;
    #echo "El número de elementos es ".$numfilas;
    echo "</br>";
    
    for ($x=0;$x<$numfilas;$x++) {
      $fila = $result->fetch_object();
      echo "<tr>";
      echo "<td>".$fila->carnet." </td>";
      echo "<td>".$fila->nombre." </td>";
      echo "</tr>";
    }
    

    $result -> free_result();
  }
  $mysqli -> close();
?>
 </table>
</body>

</html>