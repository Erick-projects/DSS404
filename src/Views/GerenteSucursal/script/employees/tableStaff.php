<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente de sucursal</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/newEmploye.css">
    <link rel="stylesheet" href="../../css/formstyle.css">
</head>
<body>
    <header class="Banner">Gerente de sucursal</header>
    <div class="Namebac">
        <img class="logo" src="../../img/BancoAgricolaLogo.png" onclick="window.location.href='../../index.php';">
        <div class="name-container">
            <h1 class="name">BANCO AGRICOLA</h1>
            <h3 class="name2">Registro Administrativo</h3>
        </div>
    </div>
    <div class="new">
    <h3>Ingresa los datos para el nuevo Personal de mesa</h3>
    <form action="./tableStaff.php" method="post">
        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" size="26" name="nombre" placeholder="Ingrese su nombre" require>
        </div>
        <div>
            <label for="Email">Email:</label>
            <input type="email"  size="26" name="email" placeholder="Ingrese su email" require>
        </div>
        <div>
            <label for="Dui">Dui:</label>
            <input type="number"  size="26" name="dui" placeholder="Ingrese su dui" require>
        </div>
        <div>
            <label for="Estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>
        <div>
            <label for="Sucursal">Sucursal:</label>
        <?php
                include '.././db.php';
                $result = $db->query("SELECT IdSucursal, Nombre FROM sucursal");
                echo '<select name="sucursal" id="sucursal-select" class ="inputs">';
                echo '<option>Seleccione una sucursal</option>';
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["IdSucursal"] . '">' . $row["Nombre"] . '</option>';
                    }
                } else {
                    echo '<option value="">No hay sucursales disponibles</option>';
                }
                echo '</select>';
                $db->close();
        ?>
        </div>
        <div>
            <label for="Usuario">Nombre de Usuario:</label>
            <input type="text"  size="26" name="usuario" placeholder="Ingrese su usuario" require>
        </div>
        <div>
            <label for="contrasena">Establezca una contraseña:</label>
            <input type="password"  size="26" name="contrasena" placeholder="contraseña" require>
        </div>
        
        <div>
            <input type="submit" value="CREAR NUEVO PERSONAL" class='btnSubmit'>
        </div>
    </form>
    <?php
        include '.././db.php';
        $dsn = 'mysql:host=localhost;dbname=Banco';
        $usuario = 'root';
        $contraseña = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $dui = $_POST['dui'] ?? '';
            $estado = $_POST['estado'] ?? '';
            $sucursal = $_POST['sucursal'] ?? '';
            $usuario = $_POST['usuario'] ?? '';
            $contrasena = $_POST['contrasena'] ?? '';
            if (empty($nombre) || empty($email) || empty($dui) || empty($sucursal) || empty($usuario) || empty($contrasena)) {
                echo "<script>alert('Por favor completa todos los campos');</script>";
                die();
            }
            $tipoUsuario = "Personal de mesa";
            $query = "INSERT INTO usuario (Nombre, Email, Dui, Estado, IdSucursal, nombreUsuario, contraseña, TipoUsuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            if ($stmt = $db->prepare($query)) {
                $stmt->bind_param("ssssssss", $nombre, $email, $dui, $estado, $sucursal, $usuario, $contrasena, $tipoUsuario);
                 if ($stmt->execute()) {
                     echo "Usuario creado exitosamente.";
                 } else {
                     echo "Error al crear el usuario: " . $stmt->error;
                 }
                 $stmt->close();
             } else {
                 echo "Error al preparar la consulta: " . $db->error;
             }
             header("Location: ../../index.php");
             $db->close();
        }
    ?>
    </div>
</body>
</html>
