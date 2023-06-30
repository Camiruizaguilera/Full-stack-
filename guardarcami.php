<?php
// Conexión a la base de datos
$servername = "nombre_del_servidor";
$username = "nombre_de_usuariid_usuario";
$password = "contrasena";
$dbname = "turismociudad";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtención de datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Inserción de datos en la base de datos
$sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso!";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();
?>
