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

// Validar la entrada para evitar inyección SQL
$id_entrada = mysqli_real_escape_string($conn, $_POST['id_entrada']);

// Obtener el nombre de usuario de la sesión
if (isset($_SESSION['username'])) {
    $nombreUsuario = $_SESSION['username'];
} else {
    // Si no hay nombre de usuario en la sesión, redirigir al usuario a una página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Buscar si existe la entrada
$resultado = mysqli_query($conn, "SELECT * FROM `entrada` WHERE id='$id_entrada'")
    or die(mysqli_error($conn));

$filas = mysqli_num_rows($resultado);
if ($filas > 0) {
    // Realizar las actualizaciones necesarias
    $actualizar = mysqli_query($conn, "UPDATE `entrada` SET estado='Comprar', nombre_usuario='$nombreUsuario' WHERE id='$id_entrada'")
        or die(mysqli_error($conn));

    if ($actualizar) {
        // Redirigir a principal.php después de la actualización exitosa
        header("Location: principal.php");
        exit();
    } else {
        echo '<script>alert("Error al actualizar la entrada"); window.location.href="./index.php"</script>';
    }
} else {
    echo '<script>alert("No se encontró la entrada con el ID proporcionado"); window.location.href="./index.php"</script>';
}
?>
