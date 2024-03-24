<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registroform.css">
    <title>Registro</title>
</head>
<body>
    <header>
        <h2>Registro Nuevo Usuario</h2>
    </header>
    <form method="post" action="registro_form.php">
        <h4>Nuevo Usuario</h4>
        <select class="TipoCuentas" name="TipoCuenta" id="TipoCuenta">
            <option disabled selected value="">Tipo de Cuentas</option>
            <option value="CC1">Cuenta Chequera</option>
            <option value="CE2">Cuenta Empresarial</option>
            <option value="CA3">Cuenta de Ahorro</option>
        </select>
        <br>
        <img class="user1" src="../../utils/img/User.webp" alt="" height="45px" width="80px">
        <div class="usertwo">
           <img src="../../utils/img/user2.jpg" height="40px" width="40px" style="margin-right: 10px;">
            <input type="text" name="nombre" required placeholder="Nombre de Usuario" style="width: 200px; height: 37px;">
        </div>
        <br>
        <div class="CorreoElec">
            <img src="../../utils/img/email.jpg" alt="" height="40px" width="40px" style="margin-right: 10px;">
            <input type="email" required name="correo" placeholder="Correo eletronico" style="width: 200px; height: 37px;">
        </div>
        <br>
        <div class="Password">
            <img src="../../utils/img/asterisco.jpg" alt="" height="40px" width="40px" style="margin-right: 10px;">
            <input type="password" required name="contraseña" placeholder="Contraseña" style="width: 200px; height: 37px;">
        </div>
        <br>
        <div class="CreateAC">
            <br><br>
            <input type="submit" name="CrearCuenta" id="CrearCuenta" value="Crear Cuenta" />
        </div>
    </form>
    <br>
    <div class="Other">
        <a href="#">INICIO</a>
        <a href="#">Banco Agricola</a>
        <a href="#">Configuracion de Cuenta</a>
    </div>
</body>
</html>