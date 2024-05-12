<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transacciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #cfe9f7;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #d1c4e9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Transacciones</h1>

    <form id="movimientoForm" action="guardar_movimiento.php" method="post">
        <div class="form-group">
            <label for="tipoMovimiento">Tipo de Movimiento:</label>
            <select name="tipoMovimiento" id="tipoMovimiento" class="form-control">
                <option value="ABONO">ABONO</option>
                <option value="RETIRAR">RETIRAR EFECTIVO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="text" id="monto" name="monto" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="idCuenta">ID de Cuenta:</label>
            <input type="text" id="idCuenta" name="idCuenta" class="form-control">
        </div>
        <div class="form-group">
            <label for="idCuentaDestino">ID de Cuenta Destino:</label>
            <input type="text" id="idCuentaDestino" name="idCuentaDestino" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Realizar Movimiento</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
