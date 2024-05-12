<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente de sucursal</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/newEmploye.css">
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

    <div class="new">
        <div class="newEmploye" >
            Ingresar Nuevos Empleados
        </div>
        <div class="Employe" onclick="window.location.href='../script/employees/bankCashier.php';">
            Cajeros del Banco
        </div>
        <div class="Employe" onclick="window.location.href='../script/employees/cleaningStaff.php';">
            Personal de limpieza
        </div>
        <div class="Employe" onclick="window.location.href='../script/employees/receptionist.php';"> 
            Recepcionista
        </div>
        <div class="Employe" onclick="window.location.href='../script/employees/tableStaff.php';">
            Personal de mesa
        </div>
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
