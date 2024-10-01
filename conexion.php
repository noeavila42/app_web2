<?php
// 1. Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "beca";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// 2. Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// 3. Consulta para verificar el usuario y contraseña
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = $conn->query($sql);

// 4. Verificar si el usuario existe
if ($result->num_rows > 0) {
    echo "¡Inicio de sesión exitoso! Bienvenido, $usuario.";
} else {
    echo "Usuario o contraseña incorrectos.";
}

// Cerrar la conexión
$conn->close();
?>