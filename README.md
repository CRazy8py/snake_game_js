<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Juegos</title>
    <style>
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
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        .game-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 200px;
        }

        .game-card {
            position: relative;
            width: 300px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .game-card h3 {
            padding: 10px;
            margin: 0;
            font-size: 1.2em;
        }

        .game-card p {
            padding: 0 40px;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        .game-card button {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: #4caaaf;
            color: #fff;
            border: none;
            border-radius: 0 0 8px 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            z-index: 2;
        }

        .game-card button:hover {
            background-color: #07475e;
        }
    </style>
</head>
<body>
    <header>
        <?php
            session_start(); // Inicia la sesión si no está iniciada
            if(isset($_SESSION['nombre'])) {
                $nombre = $_SESSION['nombre'];
                echo "<h1>Bienvenido: $nombre Catálogo de Juegos</h1>";
            } else {
                echo "<h1>Catálogo de Juegos</h1>";
            }
        ?>
    </header>
    

    <div class="game-container">
        <div class="game-card">
            <img src="snake.jpeg" alt="Juego 1">
            <h3>Snake</h3>
            <p> La mecánica del juego Snake consiste en guiar el a una serpiente en movimiento continuo que va creciendo de longitud a medida que va comiendo fruta de la pantalla, a través del joystick el usuario puede cambiar la dirección de la cabeza de la serpiente.</p>
            <button onclick="window.location.href='juego1.html'">Click para jugar</button>
        </div>

        <div class="game-card">
            <img src="minas.png" alt="Juego 2">
            <h3>Buscaminas</h3>
            <p>El juego debe su popularidad a las versiones que vienen con Microsoft Windows desde su versión 3.1.

                El juego posee un sistema de récords para cada uno de Los 4 niveles en el que se indica el menor tiempo en terminar el juego.</p>
                <button>Próximamente</button>  
            </div>
        <div class="game-card">
            <img src="pac.jpeg" alt="Juego 2">
            <h3>Pac-man</h3>
            <p>Pac-Man fue creado por el diseñador Toru Iwatani, de la empresa japonesa Namco. El juego consiste en conducir a Pac-Man, una bola amarilla que abre y cierra la boca, por un laberinto. Suma puntos cuando come aquello que encuentra a su paso, bolitas y diferentes frutas, pero debe esquivar a cuatro fantasmas.</p>
            <div>

            </div>
            <button>Próximamente</button> 
        </div>
    </div>

</body>
</html>

