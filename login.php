<?php 

session_start();
    require_once "./app/config/dependencias.php"; 
    

if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Inicializar variable de error
$error = "";

// Procesar el inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar que los campos no estén vacíos
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (!empty($email) && !empty($password)) {
        // Comprobar si el email está registrado
        if (isset($_SESSION['registro']) && $_SESSION['registro']['email'] == $email) {
            // Verificar la contraseña
            if ($_SESSION['registro']['pass'] == $password) {
                $_SESSION['usuario'] = [
                    "nombre" => $_SESSION['registro']['nombre'],
                    "email" => $_SESSION['registro']['email']
                ];
                header("Location: index.php");
                exit();
            } else {
                $error = "Contraseña incorrecta. Intenta de nuevo.";
            }
        } else {
            $error = "Usuario no registrado o email incorrecto.";
        }
    } else {
        $error = "Por favor, completa todos los campos.";
    }
}
?>

<style>
        body {
            background-color: #F0F4F8; 
            color: #333333; 
            font-family: 'Arial', sans-serif; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #FFFFFF; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            max-width: 400px;
            width: 100%;
        }

        .form-control {
            background-color: #F7F9FC; 
            border: 1px solid #E0E4E8; 
            color: #333333; 
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px; 
        }

        .form-control:focus {
            border-color: #6C63FF; 
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            width: 100%;
            border: none; 
        }

        .btn-success {
            background-color: #34D399;
            color: #FFFFFF;
        }

        .btn-success:hover {
            background-color: #2FBE77; 
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
    </style>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS.'b5.css';?>">
    <script src="<?=JS.'b5.js';?>"></script>
    <script src="<?=JS.'b2.js';?>"></script>
    <title>Login</title>
    
</head>
<body>

<div class="container">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <a class="btn btn-success w-100" href="index.php">Iniciar Seción</a><br>
        
        <a class="btn btn-success w-100" href="registro_vista.php">Regresar</a>
        
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
