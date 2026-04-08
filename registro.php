<?php
include 'db.php'; //conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['Nombre'];
    $email = $_POST['Email'];
    $contraseña = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT); // Encriptar contraseña

    // Verificar si ya está registrado
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Este correo electrónico ya está registrado.";
    } else {
        // Insertar nuevo usuario
        $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

        if ($conn->query($sql) === TRUE) {

            // Redirigir a login después de registro
            header("Location: Login.html");
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    }

    $conn->close(); // Cerrar la conexión
}
?>