<?php
$servername = "localhost";
$username = "root";  // Cambia si tu usuario tiene contraseña
$password = "";
$dbname = "AGENCIA";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
