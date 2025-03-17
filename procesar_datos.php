
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Formulario de Clientes</title>
 <style>
 /* Reglas CSS */
 /* Aquí puedes incluir tus estilos CSS */
 </style>
 <script>
 /* Funciones JavaScript */
 /* Aquí puedes incluir validaciones JavaScript */
 function validar() {
 let nombre = document.getElementById('nombre').value;
 let email = document.getElementById('email').value;
 if (nombre === '' || email === '') {
 alert('Por favor completa todos los campos');
 return false;
 }
 return true;
 }
 </script>
</head>
<body>
 <h2>Formulario de Clientes</h2>
 <form action="procesar_datos.php" method="post" onsubmit="return
validar()">
 <label for="nombre">Nombre:</label>
 <input type="text" id="nombre" name="nombre" required>
 <br>
 <label for="email">Email:</label>
 <input type="email" id="email" name="email" required>
 <br>
 <input type="submit" value="Guardar Cliente">
 </form>
</body>
</html>


<?php
// Conexión segura con la base de datos utilizando MySQLi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comercio";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}
// Validaciones de datos en PHP
$nombre = $_POST['nombre'];
$email = $_POST['email'];
// Insertar datos en la base de datos
$sql = "INSERT INTO clientes (nombre, email) VALUES ('$nombre', '$email')";
if ($conn->query($sql) === TRUE) {
 echo "Datos ingresados correctamente";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

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

<?php
// Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}
// Obtener los datos del formulario
$id = $_POST['id'];
$nuevoNombre = $_POST['nuevo_nombre'];
$nuevoEmail = $_POST['nuevo_email'];
// Consulta para modificar un cliente en la base de datos
$sql = "UPDATE clientes SET nombre='$nuevoNombre', email='$nuevoEmail' WHERE
id=$id";
if ($conn->query($sql) === TRUE) {
 echo "Cliente modificado correctamente";
} else {
 echo "Error al modificar el cliente: " . $conn->error;
}
// Cerrar la conexión a la base de datos
$conn->close();
?>

<?php
// Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
 die("Conexión fallida: " . $conn->connect_error);
}
// Obtener el ID del cliente a eliminar
$id = $_POST['id'];
// Consulta para eliminar un cliente de la base de datos
$sql = "DELETE FROM clientes WHERE id=$id";
if ($conn->query($sql) === TRUE) {
 echo "Cliente eliminado correctamente";
} else {
 echo "Error al eliminar el cliente: " . $conn->error;
}
// Cerrar la conexión a la base de datos
$conn->close();

// Esta linea de código es agregada como prueba para el desarrollo de la S8
?>

