<!DOCTYPE html>
<html>
<head>
    <title>Ingresar usuario</title>
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
</head>
<body style="background-color: #0844a4;">
    <div class="container">
    <div class="header">
            <h1>BANCO AGRICOLA</h1>
        </div>
        
        <h2>Ingresar usuario</h2>

        <form action="./validacionUsuario.php" method="post">
            <div class="input-container">
                <div class="icon">
                    <img src="../../utils/img/usuario.png" alt="Icono de usuario">
                </div>
                <input type="text" id="username" name="username" placeholder="Nombre de usuario" required>
            </div>
            <div class="input-container">
                <div class="icon">
                    <img src="../../utils/img/correo-electronico-vacio.png" alt="Icono de correo">
                </div>
                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div class="input-container">
                <div class="icon">
                    <img src="../../utils/img/bloquear.png" alt="Icono de contraseña">
                </div>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="input-container">

                <input type="submit" value="Iniciar sesion">
            </div>
        </form>
    </div>
    <div class="corner-icon">
        <img src="../../utils/img/Banco-Agricola.png" alt="Icono" width="80" height="80">
    </div>

</body>
</html>

