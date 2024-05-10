<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creando Gerente</title>
    <link rel="stylesheet" href="../css/nuevoGerente.css">
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
                <h1 class="hedaer_text">NUEVO GERENTE</h1>
            </div>
        
        </nav>
    </Header>    
    <main class ="main"> 
        <h1 class = "text">Ingresa los datos necesarios</h1>
        <form action="../scripts/nuevoGerente.php" method="post" class="form">
       
            <div class = "inputs_box">     
                <i class="fa-solid fa-user"></i>
                <input type="text" name="nombre" placeholder="Nombre" class ="inputs">

                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email"  class ="inputs"">
            </div>

            <div class = "inputs_box">
            <i class="fa-solid fa-id-card"></i>
                <input type="text" name="dui" placeholder="Dui"  class ="inputs">
                <i class="fa-solid fa-shop"></i>
          
                <?php
                //Incluimos la bd
                include '../../../script/conexion/db.php'; 
                //Mandamos a llamar el id y el nombre de la sucursal
                $result = $db->query("SELECT IdSucursal, Nombre FROM sucursal");
                //mostramos
                echo '<select name="sucursal" id="sucursal-select" class ="inputs">';
                echo '<option  >Seleccione una sucursal</option>';
                
                if ($result->num_rows > 0) {
                    //Recorremos todas las sucursales disponibles
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

            <div class = "inputs_box">
            <i class="fa-regular fa-user"></i>
                <input type="text" name="usuario" placeholder="Usuario"  class ="inputs">
                
            <i class="fa-solid fa-lock"></i>
                <input type="pass" placeholder="Contraseña" name="contrasena" class ="inputs">
            </div>

            <div >
                <input type="submit" value="CREAR USUARIO" class='btnSubmit'>
            </div>

        </form>
    </main>
</body>
</html>


<?php
// Incluir el archivo de conexión a la base de datos
include '../../../script/conexion/db.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $dui = $_POST['dui'] ?? '';
    $sucursal = $_POST['sucursal'] ?? '';
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    // Validación simple 
    if (empty($nombre) || empty($email) || empty($dui) || empty($sucursal) || empty($usuario) || empty($contrasena)) {
        die('Por favor completa todos los campos');
    }

     // Los valores fijos
     $tipoUsuario = "Gerente";
     $estado = "Activo";

     
   // Preparar una sentencia SQL para insertar los datos
   $query = "INSERT INTO usuario (Nombre, Email, Dui, IdSucursal, nombreUsuario, contraseña, TipoUsuario, Estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
   if ($stmt = $db->prepare($query)) {
       // Vincular los parámetros y los valores fijos
       $stmt->bind_param("ssssssss", $nombre, $email, $dui, $sucursal, $usuario, $contrasena, $tipoUsuario, $estado);

       // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Usuario creado exitosamente.";
        } else {
            echo "Error al crear el usuario: " . $stmt->error;
        }
        
        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $db->error;
    }

    // Cerrar la conexión
    $db->close();
}
?>