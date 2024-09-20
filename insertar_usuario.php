<?php
// Datos de conexión a la base de datos
$servername = "sql10.freesqldatabase.com";  // Cambia por el servidor correspondiente
$username = "sql10732523";   // Cambia por tu usuario de la base de datos
$password = "m8uLUjJ4l4"; // Cambia por tu contraseña de la base de datos
$dbname = "sql10732523";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$documento = $_POST['documento'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO usuarios (nombre, documento) VALUES ('$nombre', '$documento')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
