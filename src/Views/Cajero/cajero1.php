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
        <h1 class="text-center mt-3 text-white mb-4">Bienvenido al Sistema de Cajero</h1>
    </div>

    <div class="d-flex justify-content-center gap-5 mb-2">
        <h1 class="text-center mt-4 text-white fs-2">Banco Agricola</h1>
        <img src="https://elencuentrosv.com/sanmarcos/wp-content/uploads/2020/08/banco-agricola.jpg" width="100"
            class="rounded-4">
    </div>

    <div class="mx-auto p-2" style="width: 40rem;">
        <div class="container mt-3 px-5 shadow-lg p-3 bg-body-tertiary rounded">
            <form>
                <div class="d-flex text-center justify-content-center mb-3">
                    <h1 class="text-center mt-3 fs-2">Inicio de Sesión</h1>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="nombreUsuario" maxLength="10" aria-label="Username"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="nombreUsuario" maxLength="25" aria-label="Password"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="d-flex justify-content-center mx-auto">
                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>