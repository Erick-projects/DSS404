<?php
//Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";//CAMBIAR CONTRA IMPORTANTE
$dbname = "banco";

// Conectar a la BD
$db = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si la conexión falló
if (!$db) {
    die("Error de conexión: " . mysqli_connect_error());
}

//Establecer el conjunto de caracteres para no tener problemas
//con los caracteres especiales del idioma español
$db->set_charset("utf8");
?>