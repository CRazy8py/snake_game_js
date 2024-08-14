<?php
$host = "192.168.137.52";
$port = 3306;
$socket = "";
$user = "snakeadmin";
$password = "Utr.2023";
$dbname = "snake_online";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket);

// Verificar la conexión
if ($con->connect_error) {
    die('NO SE CONECTO' . $con->connect_error);
}

// Obtener datos del formulario
$username = $_POST['usuario'];
$email = $_POST['email'];
$password_hash =$_POST['contrasena'];
$bup_nomber = $_POST['number'];

// Insertar usuario en la base de datos
$query = "INSERT INTO user (user_name, email, password, back_up_number) VALUES ('$username', '$email', '$password_hash', '$bup_nomber')";
$result = $con->query($query);

if ($result) {
    echo "<script>
    setTimeout(function() {
        window.location.href = 'index.html?';
    }, );
  </script>" ;
} else {
    echo "Error en el registro: " . mysqli_error($con);
}

// Cerrar la conexión
$con->close();
?>
