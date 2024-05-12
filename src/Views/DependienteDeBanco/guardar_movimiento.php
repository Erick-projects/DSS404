<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$tipoMovimiento = $_POST['tipoMovimiento'];
$monto = $_POST['monto'];
$fecha = $_POST['fecha'];
$idCuenta = $_POST['idCuenta'];
$idCuentaDestino = $_POST['idCuentaDestino'];

$sql = "SELECT * FROM cuenta_bancaria WHERE IdCuenta = $idCuenta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql_insert = "INSERT INTO movimientos (TipoDeMovimiento, Monto, Fecha, IdCuenta, IdCuentaDestino) VALUES ('$tipoMovimiento', $monto, '$fecha', $idCuenta, $idCuentaDestino)";
    
    if ($conn->query($sql_insert) === TRUE) {
        echo "Movimiento registrado correctamente.";
    } else {
        echo "Error al registrar el movimiento: " . $conn->error;
    }
} else {
    echo "La IdCuenta no existe en la tabla cuenta_bancaria.";
}

$conn->close();
?>
