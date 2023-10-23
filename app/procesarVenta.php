<?php
session_start();

// Conectar con la bd
$hostname = "db";
$username = "admin";
$password = "test";
$db = "database";

$conn = mysqli_connect($hostname, $username, $password, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Obtener datos
$nombreUsuario = $_SESSION['username']; // Asegúrate de reemplazar esto con el nombre real del usuario
$nombre_disc = $_POST['nombre_discoteca'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];
$est_venta = "Vender"; // Estado Vender

// Generar un ID automáticamente (clave primaria con autoincremento)
// No es necesario incluirlo en la consulta

// Guardar datos en la bd
$insertQuery = "INSERT INTO `entrada` (nombre_discoteca, nombre_usuario, fecha, precio, estado) VALUES ('$nombre_disc','$nombreUsuario','$fecha','$precio', '$est_venta')";

if (mysqli_query($conn, $insertQuery)) {
    echo '<script>alert("Se han registrado los datos correctamente"); window.location.href="./principal.php"</script>';
} else {
    echo "Error al registrar los datos: " . mysqli_error($conn);
}

$conn->close();
?>
