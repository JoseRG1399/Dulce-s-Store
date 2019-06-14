<?php 

$mysqli = new mysqli("localhost", "root", "", "panaderia");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
?>