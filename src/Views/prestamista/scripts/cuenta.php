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
                <h1 class="hedaer_text">Datos de tu cuenta bancaria</h1>
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
                    <th>Cuenta </th>
                    <th>Saldo </th>
                    <th>Tipo de cuenta </th>
                    <th>N° Cliente </th>
                </tr>
            </thead>
            <tbody>
<?php
    include '../../../script/conexion/db.php'; 
    $sql = "SELECT IdCuenta, Saldo, TipoDeCuenta, IdCliente FROM cuenta_bancaria";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .($row["IdCuenta"]) . "</td>";
            echo "<td>" . ($row["Saldo"]) . "</td>";
            echo "<td>" . ($row["TipoDeCuenta"]) . "</td>";
            echo "<td>" . ($row["IdCliente"]) . "</td>";
        }
    }
    $db->close();
?>
            </tbody>
        </table>
    </section>
    
</body>
</html>