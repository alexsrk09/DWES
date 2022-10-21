<?php 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="game.php" method="post">
        <label for="numeroVerbos">Número de verbos&nbsp;</label>
        <input type="number" name="numeroVervos" min="1" value="1">
        <br><br>
        <label for="numeroCasillas">Número de casillas (minimo 1, máximo 3)</label>
        <input type="number" name="numeroCasillas" min="1" max="3"value="1">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>