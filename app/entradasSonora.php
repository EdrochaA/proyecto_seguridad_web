<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Entradas</title>
    <link rel="stylesheet" href="app/css/lista.css">
    <style>
        /* Estilo para contener cada entrada en un recuadro con bordes curvos */
        .entry-container {
            background-color: #f0f0f0; /* Color de fondo */
            border: 2px solid #ccc; /* Borde con color y grosor */
            border-radius: 10px; /* Bordes curvos */
            padding: 20px; /* Espaciado interno */
            margin: 20px 0; /* Margen superior e inferior */
            list-style: none; /* Elimina los bullet points */
            color: black; /* Color de texto */
        }

        /* Estilo para el botón de "Comprar" */
        .comprar-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 20px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
            border-radius: 8px;
        }

        .comprar-button:hover {
            background-color: #45a049;
        }

        /* Estilo para centrar el título */
        h1 {
            text-align: center;
        }

        /* Estilo para el fondo negro */
        body {
            background-color: black;
            color: white;
        }

    </style>
</head>

<body>
    <h1>Entradas Sonora</h1>

    <div id="entryList">
        <?php
        $hostname = "db";
        $username = "admin";
        $password = "test";
        $db = "database";

        $conn = mysqli_connect($hostname, $username, $password, $db);
        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT nombre_discoteca, fecha, id, precio FROM entrada WHERE nombre_discoteca = 'Sonora' AND estado = 'Vender'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            // Mostrar datos de cada fila
            while ($row = $result->fetch_assoc()) {
                echo "<li class='entry-container'>";
                echo "Nombre de la discoteca: " . $row["nombre_discoteca"] . "<br>";
                echo "Fecha: " . $row["fecha"] . "<br>";
                echo "ID: " . $row["id"] . "<br>";
                echo "Precio: " . $row["precio"] . "€" . "<br>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "0 resultados";
        }
        $conn->close();
        ?>
    </div>

    <div class="center-container">
        <button class="comprar-button" type="button" onclick="window.location.href = './comprar_entrada.php';">Comprar</button>
    </div>

    <script>
        // Resto de tu código JavaScript aquí
    </script>
</body>

</html>

