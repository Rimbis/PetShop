<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "tienda"; 

//Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificar
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>