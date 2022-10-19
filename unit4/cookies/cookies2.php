<?php
    /**
     * Escriba una página que compruebe si el navegador permite crear cookies y se lo diga al usuario
     * (mediante una o más páginas).
     * @author Alex09
     */
    $duracion = time() + 60*60*24*30; // duracion de 30 dias
    $nombre = "nombre";
    $valor = "Alex09";
    setcookie($nombre, $valor, $duracion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Comprobar cookie" name="submit">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            if (isset($_COOKIE['nombre'])) {
                echo "<h1>Cookie</h1>";
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Valor: $valor</p>";
                echo "<p>Duración: $duracion</p>";
            } else {
                echo "<h1>No se ha creado la cookie</h1>";
            }
        }
        ?>
</body>
</html>
