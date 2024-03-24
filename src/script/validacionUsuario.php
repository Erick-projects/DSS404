<?php
    session_start(); // Iniciar la sesión
    //Importante incluir el script que abre conexion a bd
    include_once("./conexion/BD.php"); 
    
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
        $usuario = $_POST['username'];
        $contraseña = $_POST['password'];
        $email = $_POST['email'];
    
    // Consulta SQL para verificar las credenciales  
    $sql = "SELECT * FROM usuario WHERE nombreUsuario = '$usuario' AND contraseña = '$contraseña' AND Email = '$email'";
    $result = mysqli_query($db, $sql);

    // Verificar si se encontró un registro 
    if(mysqli_num_rows($result) >= 1) {
         // Redirigir a la página principal
    header("Location: ../html/index.html");
    
    } else {
     // Credenciales incorrectas
      header("Location: ../html/formulario.html");
      exit;
     }
}    

mysqli_close($db);
?>