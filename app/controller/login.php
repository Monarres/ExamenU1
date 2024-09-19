<?php

session_start();

    if(isset($_SESSION['usuario'])){
        header("location:index3.php");
        exit();
    }





    if(isset($_POST['email']) && !empty($_POST['email'])) && isset($_POST['password']) && !empty($_POST['password']){
        if($_SESSION['registro']['email'] == $_POST['email']){
            if($_SESSION['registro']['pass']== $_POST['password']){
                $_SESSION['usuario'] = $_SESSION['registro'];
                
                header("location:index3.php");
            }
        }
    }
?>