<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos de cuentas Creadas</title>
    <link rel="stylesheet" href="../css/movimientoCuentas.css">
    <script src="https://kit.fontawesome.com/331f562ee8.js" crossorigin="anonymous"></script>
    
</head>
<body>

<Header class="header">
        <div class="header_top">
            <h2>Gerente General Banco</h2>
        </div>

        <nav class="header_Title">
            <div>
                <img src="../../../../utils/img/Banco-Agricola.png" class="header_img">
            </div>
            <div>
                <h1 class="hedaer_text">Registro de cuentas creadas</h1>
            </div>
        
        </nav>
    </Header>


    <section class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID Usuario <i class="fa-solid fa-id-card " ></i></th>
                    <th>Nombre <i class="fa-solid fa-user"></i></th>
                    <th>Email <i class="fa-solid fa-envelope"></i></th>
                    <th>Dui <i class="fa-solid fa-id-card"></i></th>
                    <th>Tipo de Usuario <i class="fa-solid fa-circle-user"></i></th>
                    <th>Estado <i class="fa-solid fa-check" ></i></th>
                </tr>
            </thead>
            <tbody>
<?php
    include '../../../script/conexion/db.php'; 
    $sql = "SELECT IdUsuario, Nombre, Email, Dui , TipoUsuario, Estado FROM usuario";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .($row["IdUsuario"]) . "</td>";
            echo "<td>" . ($row["Nombre"]) . "</td>";
            echo "<td>" . ($row["Email"]) . "</td>";
            echo "<td>" . ($row["Dui"]) . "</td>";
            echo "<td>" . ($row["TipoUsuario"]) . "</td>";
            echo "<td>" . ($row["Estado"]) . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay cuentas creadas</td></tr>";
    }
    $db->close();
?>
            </tbody>
        </table>
    </section>
    
</body>
</html>