<?

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #003171;">

    <div class="d-flex justify-content-center gap-5 mb-2">
        <h1 class="text-center mt-4 text-white fs-2">Banco Agricola</h1>
        <img src="https://elencuentrosv.com/sanmarcos/wp-content/uploads/2020/08/banco-agricola.jpg" width="100"
            class="rounded-4">
    </div>

    <div class="mx-auto p-2" style="width:50rem;">

        <div class="container d-flex gap-3 mt-3 px-5 shadow-lg p-3 bg-body-tertiary rounded">
            <div class="col-lg-6">
                <div class="row">
                    <div class="d-flex text-center justify-content-center mb-3">
                        <h1 class="text-center mt-1 fs-2">Descripcion del Caso</h1>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex flex-column ">
                            <label for="exampleInputEmail1" class="form-label">Activacion de Cliente:</label>
                            <input type="text" class="form-control" id="activacionCliente">
                        </div>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Cuota:</label>
                        <input type="text" class="form-control" id="cuota">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Cantidad de Años:</label>
                        <input type="text" class="form-control" id="cantidadAños">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Aceptada/Rechazada/Espera</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Asignada por el prestamo</label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Asignada por el Plan Elegido</label>
                </div>
            </div>
        </div>

        <div class="d-flex gap-3 mx-auto justify-content-center mt-3">
            <button type="submit" class="btn btn-secondary">Inicio</button>
            <button type="submit" class="btn btn-secondary">Cambiar Usuario</button>
            <button type="submit" class="btn btn-secondary">Finalizar Proceso</button>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>