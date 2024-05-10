<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Sucursal</title>
    <link rel="stylesheet" href="../css/nuevaSucursal.css">
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
                <h1 class="hedaer_text">NUEVA SUCURSAL</h1>
            </div>
        
        </nav>
    </Header>    

    <main class ="main"> 
        <h1 class = "text">Ingresa los datos necesarios</h1>
        <form action="../scripts/nuevaSucursal.php" method="post" class="form">
       
            <div class = "inputs_box">     
            <i class="fa-solid fa-shop"></i>
                <input type="text" name="nombre" placeholder="Nombre Sucursal" class ="inputs">

                <i class="fa-solid fa-location-dot"></i>
                <input type="text" name="direccion" placeholder="direccion Sucursal"  class ="inputs">
            </div>

            <div class = "inputs_box">
            <i class="fa-solid fa-user-plus"></i>
                <?php
                //Incluimos la bd
                include '../../../script/conexion/db.php'; 
                //Mandamos a llamar el id y el nombre de los gerentes
                $stmt = $db->prepare("SELECT TipoUsuario, Nombre, IdUsuario FROM usuario WHERE TipoUsuario = ?");
                $tipoUsuario = 'Gerente';
                $stmt->bind_param("s", $tipoUsuario);
                $stmt->execute();
                $result = $stmt->get_result();
                
                echo '<select name="gerente" id="gerente-select" class="inputs">';
                echo '<option>Seleccione un Gerente</option>';

                if ($result->num_rows > 0) {
                // Recorremos todas las entradas de usuarios gerentes disponibles
                  while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . ($row["IdUsuario"]) . '">' . ($row["Nombre"]) . '</option>';
                    }
                } else {
                 echo '<option value="">No hay Gerentes disponibles</option>';
                }
                    echo '</select>';
                $db->close();
                ?>
            
            </div>
            <div>
                <input type="submit" value="CREAR SUCURSAL" class='btnSubmit'>
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
    $direccion = $_POST['direccion'] ?? '';
    $gerente = $_POST['gerente'] ?? '';

    // Validación simple
    if (empty($nombre) || empty($direccion) || empty($gerente)) {
        die('Por favor completa todos los campos');
    }


     
   // Preparar una sentencia SQL para insertar los datos
   $query = "INSERT INTO sucursal (Nombre, Direccion, IdGerenteSucursal)  VALUES (?, ?, ?)";
    
   if ($stmt = $db->prepare($query)) {
       // Vincular los parámetros y los valores fijos
       $stmt->bind_param("ssi", $nombre, $direccion, $gerente);

       // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Sucursal creada exitosamente.";
        } else {
            echo "Error al crear la sucursal: " . $stmt->error;
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