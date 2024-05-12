<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente de sucursal</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/loanList.css">
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
    <div class="list">
        <div class="cases">
            Casos Prestamos
        </div>
        <?php
            include './db.php';
            $dsn = 'mysql:host=localhost;dbname=Banco';
            $usuario = 'root';
            $contraseña = '';

            try {
                $pdo = new PDO($dsn, $usuario, $contraseña);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $consulta = "SELECT * FROM prestamo";
                $stmt = $pdo->prepare($consulta);
                $stmt->execute();
                $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (count($resultados) > 0) {
                    echo "<table class='styled-table'>
                            <tr>
                                <th>IdPrestamo</th>
                                <th>Monto</th>
                                <th>Intereses</th>
                                <th>Estado</th>
                                <th>Plazo</th>
                                <th>IdUsuario</th>
                                <th>IdCliente</th>
                            </tr>";
                    foreach ($resultados as $fila) {
                        echo "<tr>";
                        echo "<td>" . $fila['IdPrestamo'] . "</td>";
                        echo "<td>" . $fila['Monto'] . "</td>";
                        echo "<td>" . $fila['Intereses'] . "</td>";
                        echo "<td>" . $fila['Estado'] . "</td>";
                        echo "<td>" . $fila['Plazo'] . "</td>";
                        echo "<td>" . $fila['IdUsuario'] . "</td>";
                        echo "<td>" . $fila['IdCliente'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No se encontraron resultados.";
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            unset($pdo);
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
