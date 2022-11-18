<?php 
    include_once 'configs.php';
    if ($_POST["usuario"]==$user && $_POST["password"]==$password) {
        session_start();
        $_SESSION["usuario"]=$_POST["usuario"];
        header("Location: index.php");
    }
    else {
        echo "Usuario o contraseña incorrectos";
    }
?>