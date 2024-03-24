<?php
    session_start(); // Iniciar la sesión
    //Importante incluir el script que abre conexion a bd
    include_once("./conexion/BD.php"); 
    
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $usuario = $_POST['username'];
        $contraseña = $_POST['password'];
        $email = $_POST['email'];
    
    // Consulta SQL para verificar las credenciales  
    $sql = "SELECT * FROM usuario WHERE nombreUsuario=? AND contraseña=? AND Email=?";
     
    // Preparar la consulta
    $stmt = mysqli_prepare($db, $sql);
    
    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "sss", $usuario, $contraseña, $email);

    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);     

   // Obtener el resultado
   $resultado = mysqli_stmt_get_result($stmt);

    // Verificar si se encontró un registro 
    if(mysqli_num_rows($resultado) == 1) {
         // Redirigir a la página principal
    header("Location: ../html/index.html");
       exit;
    } else {
     // Credenciales incorrectas
      header("Location: ../html/formulario.html");
      exit;
     }
}    
?>