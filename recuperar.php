<?php
$host="192.168.137.52";
$port=3306;
$socket="";
$user="snakeadmin";
$password="Utr.2023";
$dbname="snake_online";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('NO SE CONECTO' . mysqli_connect_error());

// Manejar el formulario de recuperación
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $bup_number = $_POST['recuperacion'];
    $password = $_POST['contrasena'];


    // Consulta para verificar si la pregunta y respuesta coinciden
    $consulta = "SELECT * FROM user WHERE email='$email' AND back_up_number='$bup_number'";
    $resultado = mysqli_query($con, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        // Las credenciales son correctas, actualizar la contraseña
        // Utilizamos el campo nombre para identificar al usuario
        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila["email"]; // Usamos el campo nombre
    
        // Actualizar la contraseña
        $actualizar_contrasena = "UPDATE user SET password = '$password' WHERE email = '$email'";
        $result = mysqli_query($con, $actualizar_contrasena);
    
        if ($result) {
            echo "Contraseña actualizada exitosamente. Puede iniciar sesión con su nueva contraseña <a href='index.html'>Iniciar sesión</a>.";
        } else {
            echo "Error al actualizar la contraseña. Por favor, inténtelo nuevamente.";
        }
    } else {
        echo "Pregunta o respuesta incorrectas. Por favor, verifique sus credenciales.";
    }
    
}

// Cerrar la conexión
$con->close();

?>
