<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilosPrincipal.css">
    <title>ReSaleB</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="icono-usuario">
                    <div class="usuario-container">   
                        <img src="./images/icono_usuario.png" alt="Icono Usuario"style="width: 30px; height: 30px;">
                <?php
                // Verificar si la variable de sesión está configurada
                if (isset($_SESSION['username'])) {
                    echo '<span class="nombre-usuario">' . $_SESSION['username'] . '</span>';
                }
                ?>
                    </div>   
                </li>

                                
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Menú</a>
                    <div class="dropdown-content">
                        <a href="venderEntrada.php">Venta de Entradas</a>
                        <a href="cerrarSesion.php" >Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="titulo-principal">
            <h1 style="text-shadow: 2px 2px 4px #000000;">ReSaleB</h1>
        </div>
        <div class="resumen">
            <div class="descripcion-general"><b>Descripción General</b></div>
            <br>
            <p>¡Bienvenido a nuestra página de reventa de entradas en Bilbao! Aquí encontrarás una amplia selección de entradas para una variedad de eventos emocionantes, que van desde conciertos en vivo y festivales de música hasta eventos deportivos y espectáculos teatrales. Nuestro objetivo es proporcionar acceso a experiencias únicas y memorables para todos los amantes del entretenimiento en Bilbao y sus alrededores. Contamos con un equipo comprometido que se esfuerza por ofrecer un servicio excepcional y garantizar que tu experiencia de compra sea conveniente y segura. Explora nuestras ofertas y asegura tu asistencia a los eventos más destacados de la ciudad. ¡No te pierdas la oportunidad de vivir momentos inolvidables con nosotros!</p>
        </div>

        <div class="container">
            <h1>Discotecas de Bilbao</h1>

            <!-- Lista de Discotecas -->
            <div class="discotecas-list">
                <div class="discoteca">
                    <h2><a href="entradasSonora.php">Sonora</a></h2>
                    <p>Una discoteca con capacidad para 1600 personas que organiza viernes de reggaetón y sábados de techno.</p>
                </div>

                <div class="discoteca">
                    <h2><a href="entradasStage.php">Stage Live</a></h2>
                    <p>Una discoteca céntrica con buena música comercial y alguna noche ambientada.</p>
                </div>

                <div class="discoteca">
                    <h2><a href="entradasBack.php">BackRoom</a></h2>
                    <p>Una discoteca céntrica con buena música comercial y alguna noche ambientada.</p>
                </div>

                <div class="discoteca">
                    <h2><a href="entradasRock.php">Rockstar</a></h2>
                    <p>Una discoteca céntrica con buena música comercial y reggaetón.</p>
                </div>

                <div class="discoteca">
                    <h2><a href="entradasMoma.php">Moma</a></h2>
                    <p>Una discoteca céntrica con buena música comercial y alguna noche ambientada.</p>
                </div>
            </div>

        </div>
    </main>

    <footer>
        <!-- Aquí va el contenido del pie de página -->
    </footer>
</body>
</html>