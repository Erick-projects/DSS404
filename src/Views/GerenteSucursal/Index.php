<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente de sucursal</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="Banner">Gerente de sucursal</header>
    <div class="Namebac">
        <img class="logo" src="img/BancoAgricolaLogo.png" onclick="window.location.href='index.php';">
        <div class="name-container">
            <h1 class="name">BANCO AGRICOLA</h1>
            <h3 class="name2">Registro Administrativo</h3>
        </div>
    </div>

    <div class="activities">
        <div class="activity" onclick="window.location.href='script/newEmploye.php';">
            Ingresar Nuevos Empleados:
        </div>
        <div class="activity" onclick="window.location.href='script/employedStatus.php';">
            Estado de Empleado: Activo/Inactivo
        </div>
        <div class="activity" onclick="window.location.href='script/loanList.php';">
            Ver Lista de Casos de Prestamos:
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
