<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: Login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Decoración.css">
    <title>Tienda</title>
</head>

<body>

    <header class="Encabezado">

        <h1>Tienda</h1>

        <button onclick="window.location.href='logout.php'" class="BotonRegreso">
    Cerrar sesión
</button>
    </header>

    <div class="padre">
        <div class="div">1 </div>
        <div class="div">2</div>
        <div class="div">3 </div>
        <div class="div">4 </div>
        <div class="div">5 </div>
        <div class="div">6 </div>
        <div class="div">7 </div>
        <div class="div">8 </div>
        <div class="div">9 </div>
        <div class="div">10 </div>
        <div class="div">11 </div>
        <div class="div">12 </div>
        <div class="div">13 </div>
        <div class="div">14 </div>
        <div class="div">15 </div>
        <div class="div">16 </div>
        <div class="div">17 </div>
        <div class="div">18 </div>
        <div class="div">19 </div>
        <div class="div">20 </div>
        <div class="div">21 </div>
        <div class="div">22 </div>
        <div class="div">23 </div>
        <div class="div">24 </div>
    </div>



</body>

</html>