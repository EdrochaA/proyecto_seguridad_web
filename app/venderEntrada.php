<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/venderEntrada.css">
    <title>Venta de Entradas</title>
</head>
<body>
    <div class="container">
        <h2>Venta de Entradas</h2>
        <form action="procesarVenta.php" method="POST" id="formularioVenta">
            <label for="nombre_discoteca">Nombre de la Discoteca:</label>
            <select name="nombre_discoteca" id="nombre_discoteca">
                <option value="Moma">Moma</option>
                <option value="Stage Live">Stage Live</option>
                <option value="Rockstar">Rockstar</option>
                <option value="BackRoom">BackRoom</option>
                <option value="Sonora">Sonora</option>
            </select><br><br>

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Introduce el precio"><br><br>

            <label for="fecha">Fecha del Evento:</label>
            <input type="date" id="fecha" name="fecha"><br><br>

            <input type="submit" value="Vender Entrada" id="botonVender">
        </form>
    </div>

    <script>
        document.getElementById('botonVender').addEventListener('click', function (event) {
            var nombreDiscoteca = document.getElementById('nombre_discoteca').value;
            var precio = document.getElementById('precio').value;
            var fechaInput = document.getElementById('fecha').value;
            var fechaEvento = new Date(fechaInput);
            var fechaActual = new Date();

            if (fechaEvento <= fechaActual) {
                event.preventDefault();
                alert("Selecciona una fecha posterior a la fecha actual.");
                return;
            }

            console.log('Nombre de la Discoteca: ' + nombreDiscoteca);
            console.log('Precio: ' + precio);
            console.log('Fecha del Evento: ' + fechaInput);
        });
    </script>
</body>
</html>

