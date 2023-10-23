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
        <form action="vender.php" onsubmit="verificarID(event)" method="POST" id="formularioVenta">
            <label for="id_entrada">ID de la Entrada:</label>
            <input type="text" id="id_entrada" name="id_entrada" placeholder="Introduce el ID de la entrada"><br><br>
            <input type="submit" value="Comprar Entrada" id="botonVender">
        </form>
    </div>
</body>
</html>
