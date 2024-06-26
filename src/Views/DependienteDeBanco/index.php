<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Dependiente de Banco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #cfe9f7;
        }
        .container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            height: 100vh;
            margin-top: 20vh;
        }
        .usuario-dependiente, .usuario-cliente, .transacciones, .perfil-usuario {
            padding: 20px;
        }
        .usuario-dependiente {
            background-color: #fff9c4;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .btn-transacciones {
            background-color: #d1c4e9;
            border-color: #d1c4e9;
        }
        .dropdown-menu a.dropdown-item {
            color: #8e44ad;
        }
        .usuario-cliente {
            background-color: #d1c4e9;
            color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .list-group-item-action.active {
            background-color: #b3e5fc;
            border-color: #b3e5fc;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="usuario-dependiente">
            <h2>Usuario Dependiente</h2>
            <p>Erick Ramos</p>
        </div>
        <div class="usuario-cliente">
            <h2>Usuario Cliente</h2>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "banco";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM cliente WHERE IdCliente = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='list-group'>";
                    echo "<a href='#' class='list-group-item list-group-item-action active' aria-current='true'>";
                    echo "Nombre: " . $row['Nombres'] . " " . $row['Apellidos'] . "<br>";
                    echo "DUI: " . $row['Dui'] . "<br>";
                    echo "Correo: " . $row['Email'] . "<br>";
                    echo "Usuario: " . $row['nombreUsuario'] . "<br>";
                    echo "</a>";
                    echo "</div>";
                }
            } else {
                echo "No se encontró información del cliente.";
            }

            $conn->close();
            ?>
        </div>
        <div class="transacciones">
            <h2>Transacciones</h2>
            <div class="dropdown">
                <button class="btn btn-transacciones dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Transacciones
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="Transacciones.php?opcion=pagos">Abono</a></li>
                    <li><a class="dropdown-item" href="Transacciones.php?opcion=retiro_efectivo">Retiro de efectivo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
