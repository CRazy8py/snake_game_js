<?php

// Obtener los datos de la URL
$idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : null;
$nombreUsuario = isset($_GET['nombreUsuario']) ? $_GET['nombreUsuario'] : null;
$score = isset($_GET['score']) ? $_GET['score'] : null;

// Verificar si se recibieron los datos correctamente
if (!empty($idUsuario) && !empty($nombreUsuario) && !empty($score)) {
    // Resto del código...

    // Conectar a la base de datos
    $host = "192.168.137.52";
    $port = 3306;
    $socket = "";
    $user = "snakeadmin";
    $password = "Utr.2023";
    $dbname = "snake_online";

    $conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

    // Verificar si la conexión a la base de datos fue exitosa.
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Realizar operaciones con la puntuación, por ejemplo, insertarla en la base de datos.
    $query = "INSERT INTO score (id_user, score) VALUES (?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param('ii', $idUsuario, $score);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
        echo "<script>
             
        window.location.href = '/snake/juego.html?idUsuario=".urlencode($idUsuario) .'&nombreUsuario='.urlencode($nombreUsuario) ."'
       </script>";
    } else {
        echo json_encode(["status" => "error", "message" => "Error al insertar la puntuación: " . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "La puntuación, el ID del usuario o el nombre del usuario no se recibieron correctamente."]);
}
?>
