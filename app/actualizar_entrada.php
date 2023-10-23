<?php
$hostname = "db";
$username = "admin";
$password = "test";
$db = "database";

// Conexión a la base de datos
$conn = new mysqli($hostname, $username, $password, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se reciben datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del cuerpo de la solicitud
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['id_entrada'])) {
        $id_entrada = $data['id_entrada'];

        // Actualizar la entrada en la base de datos
        $usuario_actual = $_SESSION['username']; // Asegúrate de tener la sesión iniciada

        $sql = "UPDATE entrada SET nombre_usuario = '$usuario_actual', estado = 'Vendido' WHERE id = $id_entrada";

        if ($conn->query($sql) === true) {
            echo json_encode(array('status' => 'success', 'message' => 'Entrada comprada con éxito'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error al comprar la entrada: ' . $conn->error));
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'No se proporcionó el ID de entrada'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Método no permitido'));
}

$conn->close();
?>
