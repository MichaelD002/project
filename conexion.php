<?php
/*conexion con la base de datos*/
$mysqli = new mysqli("localhost", "root", "", "test");
if ($mysqli->connect_error) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_error . ") " . $mysqli->connect_error;
}



?>
