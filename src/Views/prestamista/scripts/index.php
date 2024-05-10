<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #cfe9f7; /* Color celeste para el fondo */
        }
        .container {
            display: flex;
            flex-direction: row; /* Distribución en fila */
            justify-content: space-between; /* Espacio entre elementos */
            align-items: flex-start; /* Alinear arriba */
            width: 80%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .left-column {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .right-column {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Alinear a la izquierda */
        }
        select, button {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            min-width: 120px; /* Ancho mínimo para los botones */
            cursor: pointer; /* Cambiar cursor al pasar sobre los botones */
            transition: background-color 0.3s ease; /* Transición suave para el color de fondo */
        }
        button:not(:last-child) {
            margin-right: 10px; /* Espacio entre los botones */
        }
        button:hover {
            background-color: #f0f0f0; /* Cambiar color de fondo al pasar el mouse */
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }
        #nombre-usuario {
            margin-right: 10px; /* Pequeño margen a la derecha del campo de nombre de usuario */
        }
        .menu-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .menu {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            padding: 10px;
            transition: background-color 0.3s ease;
        }
        .menu a:hover {
            background-color: #f0f0f0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-column">
            <select id="transacciones">
                <?php
                $transacciones = array("Pagos de Tarjetas", "Recarga Celular", "Pago de Servicios", "Cobra tu Remesa", "Retiro de efectivo sin tarjeta", "Transferencias UNI", "Transferencias QR", "Transferencia 365", "Notificación de Viajero");
                foreach($transacciones as $transaccion):
                ?>
                <option value="<?php echo strtolower(str_replace(' ', '_', $transaccion)); ?>"><?php echo $transaccion; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="menu-container">
            <div class="menu">
                <a href="./index.php">Inicio</a>
                <a href="./cuenta.php">Cuenta</a>
                <a href="./transacciones.php">Transacciones</a>
            </div>
        </div>
        <div class="right-column">
            <!-- Reemplaza los campos de texto con botones -->
            <?php
            $perfilUsuario = array("Perfil de usuario", "Comparte", "Subir", "Copia", "Impresión");
            foreach($perfilUsuario as $campo):
                if ($campo == "Nombre de usuario") {
                    echo '<input id="nombre-usuario" type="text" placeholder="' . $campo . '">';
                } else {
                    // Asigna un href específico a cada botón
                    $buttonHref = ''; // Define la URL específica para cada botón
                    switch ($campo) {
                        case "Perfil de usuario":
                            $buttonHref = "./perfil.php";
                            break;
                        case "Subir":
                            $buttonHref = "#";
                            break;
                        case "Copia":
                            $buttonHref = "#";
                            break;
                        case "Impresión":
                            $buttonHref = "#";
                            break;
                        default:
                            $buttonHref = "#"; // URL predeterminada o en blanco si es necesario
                            break;
                    }
                    echo '<button onclick="window.location.href=\'' . $buttonHref . '\'">' . $campo . '</button>';
                }
            ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
