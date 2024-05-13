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

    <div class="mx-auto p-2" style="width: 40rem;">
        <div class="container mt-3 px-5 shadow-lg p-3 bg-body-tertiary rounded">
            <form>
                <div class="d-flex text-center justify-content-center mb-3">
                    <h1 class="text-center mt-1 fs-2">Registro Nuevo Cliente</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Documento Unico de Identidad (DUI)</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Correo Electronico</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center mx-auto">
                    <button type="submit" class="btn btn-success">Verificar</button>
                </div>
            </form>
        </div>
        <h1 class="text-center mt-3 fs-2 text-white">Que deseas hacer el dia de hoy?</h1>
        <div class="d-flex gap-3 mx-auto justify-content-center mt-3">
            <button type="submit" class="btn btn-secondary">Inicio</button>
            <button type="submit" class="btn btn-secondary">Transferencia</button>
            <button type="submit" class="btn btn-secondary">Cajero</button>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>