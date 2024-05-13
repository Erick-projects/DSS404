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

    <!-- Botones Izquierda -->

    <div class="d-flex flex-column float-start mt-5 text-white" style="background-color: #1F4788;">
        <div class="text-start container mt-4 mb-2" class="float-end" style="background-color: #1F4788;">Abonar a Cuenta de Ahorro
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
            </svg>
        </div>
        <hr class="hr" />
        <div class="text-start container mt-2 mb-2 text-white" style="background-color: #1F4788;">Pagar Mora en Tarjeta
            <svg xmlns="http://www.w3.org/2000/svg" class="float-end"  width="20" height="20" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
            </svg>
        </div>
        <hr class="hr" />
        <div class="text-start container mt-2 mb-4 text-white" style="background-color: #1F4788;">Verificar Estado de Cuenta
            <svg xmlns="http://www.w3.org/2000/svg" class="float-end"  width="20" height="20" fill="currentColor"
                class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
            </svg>
        </div>
    </div>

    <!-- Botones Derecha -->

    <div class="d-flex flex-column float-end mt-5 text-white" style="background-color: #1F4788;">
        <div class="text-end container mt-4 mb-2" style="background-color: #1F4788;">
            <svg xmlns="http://www.w3.org/2000/svg" class="float-start" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
            Retiro de Efectivo
        </div>
        <hr class="hr" />
        <div class="text-end container mt-2 mb-2 text-white" style="background-color: #1F4788;">
            <svg xmlns="http://www.w3.org/2000/svg" class="float-start" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
            Retiro Total del Efectivo
        </div>
        <hr class="hr" />
        <div class="text-end container mt-2 mb-4 text-white" style="background-color: #1F4788;">
            <svg xmlns="http://www.w3.org/2000/svg" class="float-start" width="20" height="20" fill="currentColor"
                class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
            </svg>
            Transferencia a Otra Cuenta
        </div>
    </div>

    <div class="mx-auto p-2" style="width: 30rem;">
        <div class="container mt-3 px-5 shadow-lg p-3 bg-body-tertiary rounded">
            <form>
                <div class="d-flex text-center justify-content-center mb-3">
                    <h1 class="text-center mt-1 fs-4">Ingresar o Retirar Dinero</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Documento Unico de Identidad (DUI)</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>