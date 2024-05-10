<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos de cuentas Creadas</title>
    <link rel="stylesheet" href="../css/movimientoCuentas.css">
    <script src="https://kit.fontawesome.com/331f562ee8.js" crossorigin="anonymous"></script>
    <style>
        .menu-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            margin: 5%;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .menu {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            padding: 10px;
            transition: background-color 0.3s ease;
        }
        .menu a:hover {
            background-color: #f0f0f0;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<Header class="header">

        <nav class="header_Title">
            <div>
                <img src="../../../../utils/img/Banco-Agricola.png" class="header_img">
            </div>
            <div>
                <h1 class="hedaer_text">Registro de tus transacciones</h1>
            </div>
        
        </nav>
    </Header>

    <div class="menu-container">
            <div class="menu">
                <a href="./index.php">Inicio</a>
                <a href="./cuenta.php">Cuenta</a>
                <a href="./transacciones.php">Transacciones</a>
            </div>
        </div>

    <section class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Movimientos </th>
                    <th>Tipo </th>
                    <th>Monto </th>
                    <th>Fecha </th>
                    <th>Cuenta </th>
                    <th>Destinatario </th>
                </tr>
            </thead>
            <tbody>
<?php
    include '../../../script/conexion/db.php'; 
    $sql = "SELECT IdMovimientos, TipoDeMovimiento, Monto, Fecha, IdCuenta, IdCuentaDestino FROM movimientos";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .($row["IdMovimientos"]) . "</td>";
            echo "<td>" . ($row["TipoDeMovimiento"]) . "</td>";
            echo "<td>" . ($row["Monto"]) . "</td>";
            echo "<td>" . ($row["Fecha"]) . "</td>";
            echo "<td>" . ($row["IdCuenta"]) . "</td>";
            echo "<td>" . ($row["IdCuentaDestino"]) . "</td></tr>";
        }
    }
    $db->close();
?>
            </tbody>
        </table>
    </section>
    
</body>
</html>