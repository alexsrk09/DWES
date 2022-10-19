<?php
    /**
     * Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la
     * cookie y destruirla.
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
    <?php
        echo "<h1>Cookie</h1>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Valor: $valor</p>";
        echo "<p>Duración: $duracion</p>";
        ?>
</body>
</html>