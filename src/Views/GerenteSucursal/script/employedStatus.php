<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente de sucursal</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/employeStatus.css">
</head>
<body>
    <header class="Banner">Gerente de sucursal</header>

    <div class="Namebac">
        <img class="logo" src="../img/BancoAgricolaLogo.png" onclick="window.location.href='../index.php';">
        <div class="name-container">
            <h1 class="name">BANCO AGRICOLA</h1>
            <h3 class="name2">Registro Administrativo</h3>
        </div>
    </div>
    <div class="status">
        <h4>Estado de los Usuarios
        </h4>
        <?php
            include './db.php';
            $dsn = 'mysql:host=localhost;dbname=Banco';
            $usuario = 'root';
            $contraseña = '';
            try {
                $conexion = new PDO($dsn, $usuario, $contraseña);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = "SELECT IdUsuario, Nombre, Email, TipoUsuario, Estado, nombreUsuario FROM usuario";
                $statement = $conexion->prepare($query);  
                $statement->execute();
                $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo "<form method='post'>";
                echo "<table class='styled-table'>";
                echo "<tr><th>IdUsuario</th><th>Nombre</th><th>Email</th><th>Tipo de Usuario</th><th>Estado</th><th>Nombre de Usuario</th></tr>";
                foreach ($resultados as $fila) {
                    echo "<tr>";
                    echo "<td>" . $fila['IdUsuario'] . "</td>";
                    echo "<td>" . $fila['Nombre'] . "</td>";
                    echo "<td>" . $fila['Email'] . "</td>";
                    echo "<td>" . $fila['TipoUsuario'] . "</td>";
                    echo "<td>";
                    echo "<select name='estado_" . $fila['IdUsuario'] . "' class='estado-select'>";
                    echo "<option value='Activo'" . ($fila['Estado'] == 'Activo' ? ' selected' : '') . ">Activo</option>";
                    echo "<option value='Inactivo'" . ($fila['Estado'] == 'Inactivo' ? ' selected' : '') . ">Inactivo</option>";
                    echo "</select>";
                    echo "</td>";
                    echo "<td>" . $fila['nombreUsuario'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<button type='submit' name='actualizar' class='actualizar-btn'>Actualizar</button>";
                echo "</form>";
                if (isset($_POST['actualizar'])) {
                    foreach ($resultados as $fila) {
                        $idUsuario = $fila['IdUsuario'];
                        $estado = $_POST['estado_' . $idUsuario];
                        $queryUpdate = "UPDATE usuario SET Estado = :estado WHERE IdUsuario = :idUsuario";
                        $statementUpdate = $conexion->prepare($queryUpdate);
                        $statementUpdate->bindValue(':estado', $estado);
                        $statementUpdate->bindValue(':idUsuario', $idUsuario);
                        $statementUpdate->execute();
                    }
                    header("Location: ../index.php");
                    exit();
                }
            } catch (PDOException $e) {
                echo "Error al ejecutar la consulta: " . $e->getMessage();
            }
        ?>
    </div>
    <div class="managerPfp">
        <h3>Perfil del Gerente</h3>
        <img src="../img/pfp.png" alt="">
        <div class="userEmail">
            <input type="text" placeholder="Username" >
            <input type="email" placeholder="Email" >
        </div>
        <div class="actions-container">
            <a href="#">Share</a>
            <br><br>
            <a href="#">Upload</a>
        </div>
    </div>

    </div>
    <div class="options">
        <div class="option" onclick="window.location.href='#1';">Inicio</div>
        <div class="option" onclick="window.location.href='#2';">Cajero</div>
        <div class="option" onclick="window.location.href='#3';">Estado Cuenta</div>
        <div class="option" onclick="window.location.href='#4';">Cliente</div>
        <div class="option" onclick="window.location.href='#5';">Finalizar</div>
    </div>
</body>
</html>
