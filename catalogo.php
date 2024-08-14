
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Juegos</title>
    <link rel="stylesheet" href="style2.css">	
</head>
<body>

    <header>
        <h1><script>
            // Obtén los parámetros de la URL
            const urlParams = new URLSearchParams(window.location.search);
            const nombreUsuario = urlParams.get('nombreUsuario');
            const idUsuario = urlParams.get('idUsuario');
        
            // Muestra la información en la página
            document.write("<p>Nombre de Usuario: " + nombreUsuario + "</p>");
            document.write("<p>ID de Usuario: " + idUsuario + "</p>");
        </script>
        Catálogo de Juegos</h1>
    </header>


    <div class="game-container">
        <div class="game-card">
            <img src="snake.jpeg" alt="Juego 1">
            <h3>Snake</h3>
            <p> La mecánica del juego Snake consiste en guiar el a una serpiente en movimiento continuo que va creciendo de longitud a medida que va comiendo fruta de la pantalla, a través del joystick el usuario puede cambiar la dirección de la cabeza de la serpiente.</p>
            <button id="jugarButtonSnake" onclick="window.location.href = 'juego.html?idUsuario=' + idUsuario + '&nombreUsuario=' + nombreUsuario" style="display: block;">Click para jugar</button>
            <button id="comentariosButtonSnake" onclick="window.location.href='comentarios.html'" style="display: block;">¿Qué piensas del juego?</button>
        </div>

        <div class="game-card">
            <img src="minas.png" alt="Juego 2">
            <h3>Buscaminas</h3>
            <p>El juego debe su popularidad a las versiones que vienen con Microsoft Windows desde su versión 3.1.
                El juego posee un sistema de récords para cada uno de Los 4 niveles en el que se indica el menor tiempo en terminar el juego. Este juego pondrá a prueba tu destreza mental, deberás ponerla a trabajar si quieres completarlo.</p>
            <button>Próximamente</button>  
        </div>
        
        <div class="game-card">
            <img src="pac.jpeg" alt="Juego 3">
            <h3>Pac-man</h3>
            <p>Pac-Man fue creado por el diseñador Toru Iwatani, de la empresa japonesa Namco. El juego consiste en conducir a Pac-Man, una bola amarilla que abre y cierra la boca, por un laberinto. Suma puntos cuando come aquello que encuentra a su paso, bolitas y diferentes frutas, pero debe esquivar a cuatro fantasmas.</p>
            <button>Próximamente</button>
        </div>
    </div>

</body>
</html>