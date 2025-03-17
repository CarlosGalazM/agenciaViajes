<?php
// Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}
// Consulta para obtener todos los clientes de la base de datos
$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
 while($fila = $resultado->fetch_assoc()) {
 echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " - Email: " . $fila["email"] .
"<br>";
 }
} else {
 echo "No se encontraron clientes";
}
// Cerrar la conexión a la base de datos
$conn->close();
?>