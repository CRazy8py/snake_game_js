<?php
// Configuración de la base de datos
$host="192.168.137.52";
$port=3306;
$socket="";
$user="snakeadmin";
$password="Utr.2023";
$dbname="snake_online";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

// Recibir datos del formulario
$nombre = $_POST['name'];
$comentario = $_POST['comment'];

// Insertar datos en la base de datos
$sql = "INSERT INTO comments (comment_name, comment) VALUES ('$nombre', '$comentario')";

if ($conn->query($sql) === TRUE) {
    // Mensaje de éxito
    echo "";
} else {
    // Mensaje de error en caso de falla
    echo "Error al enviar el comentario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="exito.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éxito</title>
    <style>
        /* éxito.css */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: rgb(2, 0, 36);
        background: linear-gradient(
            140deg,
            rgba(2, 0, 36, 1) 0%,
            rgba(9, 9, 121, 1) 35%,
            rgba(5, 100, 181, 1) 64%,
            rgba(0, 212, 255, 1) 100%
        );
        color: #fff;
        text-align: center;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 1em;
    }

    h1, p {
        margin: 20px 0;
    }

    a {
        color: #6D26D3;
        text-decoration: none;
        border-bottom: 1px solid #6D26D3;
        padding-bottom: 2px;
    }

    a:hover {
        border-bottom: 2px solid #6D26D3;
    }

    .back-button {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #555;
    }
    .button {
        width: 80%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin-top: 10px;
        border: 0;
        outline: none;
        border-radius: 10px;
        border: 1px solid black;
        font-size: 16px;
        color: white;
        background-color: #6D26D3;
        text-align: center;
        margin: 5%;
        font-weight: bold;
        text-decoration: none; /* Añadido para quitar la subrayado del enlace */
        display: inline-block; /* Añadido para que se comporte como un bloque en línea */
    }
    .button:hover {
            background-color: #45a049;
            
    }

    </style>
</head>
<body>
    <header>
        <h1>Comentario Enviado Exitosamente</h1>
    </header>
    <p>¡Gracias por tu comentario!</p>
    <a href="comentarios.html" class="button">Volver a la página de comentarios</a>
</body>
</html>
