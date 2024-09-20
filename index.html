<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>
</head>
<body>
    <h2>Agregar Usuario</h2>

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Datos de conexión a la base de datos
       $servername = "sql10.freesqldatabase.com";  // Cambia por el servidor 

correspondiente
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
            echo "<p>Nuevo usuario agregado exitosamente</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        // Cerrar la conexión
        $conn->close();
    }
    ?>

    <!-- Formulario HTML -->
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento" required><br><br>

        <input type="submit" value="Agregar Usuario">
    </form>
</body>
</html>
