<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco";
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
    die("Error de conexión: " . mysqli_connect_error());
}
$db->set_charset("utf8");
?>