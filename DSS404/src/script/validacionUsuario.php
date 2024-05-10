<?php
    session_start(); // Iniciar la sesión
    //Importante incluir el script que abre conexion a bd
    include_once("conexion/BD.php"); 
    
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $usuario = $_POST['username'];
        $email = $_POST['email'];
        $contraseña = $_POST['password'];
    
    // Consulta SQL para verificar las credenciales  
    $query = mysqli_query($db,"SELECT * FROM usuario WHERE nombreUsuario = '$usuario' AND contraseña = '$contraseña' AND Email = '$email'");

   $confirmacion = mysqli_num_rows($query);
    // Verificar si se encontró un registro 
    if($confirmacion == 1) {
         // Redirigir a la página principal
    header("Location: ../html/index.html");
    echo ("entre");
    } else {
     // Credenciales incorrectas
      header("Location: ./formulario.php");
      exit;
     }
}    

mysqli_close($db);
?>