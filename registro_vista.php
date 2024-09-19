<?php require_once "./app/config/dependencias.php"; 
    require_once "./app/controller/registro.php";
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
            max-width: 500px;
            width: 100%;
        }

        .form-control {
            background-color: #F7F9FC; 
            border: 1px solid #E0E4E8; 
            color: #333333; 
            border-radius: 4px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #6C63FF; 
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 4px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-primary {
            background-color: #6C63FF; 
            color: #FFFFFF;
        }

        .btn-primary:hover {
            background-color: #5A4BCE; 
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
    <title>SUITS</title>
</head>
<body>
    <form class="container mt-5" action="registro_vista.php" method="POST">
        <div class="row justify-content-center">
            <div class="col-5">
                <label for="">Nombre</label><br>
                <input class="form-control mb-3" name="nombre" type="text"><br><br>
            
                <label for="">Apellido</label><br>
                <input class="form-control mb-3" name="apellido" type="text"><br><br>

                <label for="">E-mail</label><br>
                <input class="form-control mb-3" name="email" type="email"><br><br>

                <label for="">Password</label><br>
                <input class="form-control mb-3" name="password" type="password"><br><br>

                <a class="btn btn-success w-100" href="login.php">Login</a>

            </div>
        </div>
    </form>