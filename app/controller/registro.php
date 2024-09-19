
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location:index3.php");
    exit();
}

if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['apellido']) && !empty($_POST['apellido']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password'])) {

    // Validar si el email ya está registrado
    if (isset($_SESSION['registro']) && $_SESSION['registro']['email'] == $_POST['email']) {
        $error = "El email ya está registrado.";
    } else {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $_SESSION['registro'] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "email" => $email,
            "pass" => $pass
        ];
        
        header("location:login.php");
        exit();
    }
}
?>
