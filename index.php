

<?php

    session_start();
    require_once "./app/controller/inicio.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suit</title>
</head>
<body>

    <p><?php=$_SESSION['usuario']['nombre']?></p>

    
    <a href="cerrar_secion.php" class="btn btn-danger btn-lg">Cerrar secion</a>
    
</body>
</html>
