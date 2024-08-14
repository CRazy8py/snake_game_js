<?php
session_start(); // Inicia la sesión si no está iniciada

$host = "192.168.137.52";
$port = 3306;
$socket = "";
$user = "snakeadmin";
$password = "Utr.2023";
$dbname = "snake_online";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die('Could not connect to the database server' . mysqli_connect_error());

$nombre = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$pass = isset($_POST['contrasena']) ? $_POST['contrasena'] : null;

// Verifica si todas las variables necesarias están presentes
if ($nombre !== null && $email !== null && $pass !== null) {
    $query = mysqli_query($conn, "SELECT user_name FROM user WHERE user_name='" . $nombre . "' and password='" . $pass . "' and email='" . $email . "'");
    $nr = mysqli_num_rows($query);
    $query2 = mysqli_query($conn, "SELECT id_user FROM user WHERE user_name='" . $nombre . "' and password='" . $pass . "' and email='" . $email . "'");
    $nr2 = mysqli_num_rows($query2);

    if ($nr == 1) {
        // Obtiene el nombre de usuario desde la base de datos
        $fila = mysqli_fetch_assoc($query);
        $nombreUsuario = $fila['user_name'];
        $fila2 = mysqli_fetch_assoc($query2);
        $idUsuario = $fila2['id_user'];
        
        $_SESSION ['id']=$idUsuario;
        $_SESSION ['nombre']=$nombreUsuario;

        
        // Incorpora código JavaScript para redirigir después 
        echo "<script>
             
                    window.location.href = 'catalogo.php?idUsuario=".urlencode($idUsuario) .'&nombreUsuario='.urlencode($nombreUsuario) ."'
             
              </script>";
    } else {
        echo "<h1>No ingreso</h1>";
        echo "<a id='register-button' href='registrar.html'>Registrarse</a>";
    }
} else {
    // Si falta algún dato, emite un mensaje de error
    echo json_encode(['error' => 'Faltan datos']);
}

// Cerrar conexión
$conn->close();
?>
