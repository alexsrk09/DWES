<?php
    /**
     * Crea un formulario de login que permita al usuario recordar los datos introducidos. Incluye una
     * opción para borrar la información almacenada.
     * @author Alex09
     */
    $duracion = time() + 60*60*24*30; // duracion de 30 dias
    $nombre = "user";
    $valor = array(
        "nombre" => "",
        "contraseña" => ""
    );
    if (isset($_POST['submit'])) {
        $valor['nombre'] = $_POST['nombre'];
        $valor['contraseña'] = $_POST['contraseña'];
        setcookie($nombre, serialize($valor), $duracion);
    }
    if(isset($_POST['borrar'])) {
        setcookie($nombre, "", time() - 3600);
    }
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
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $valor['nombre']; ?>">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña" value="<?php echo $valor['contraseña']; ?>">
        <input type="submit" value="Enviar" name="submit">
        <input type="submit" value="Borrar cookie" name="borrar">
    </form>
    <?php 
        if (isset($_COOKIE['user'])) {
            $user = unserialize($_COOKIE['user']);
            echo "<h1>Cookie</h1>";
            echo "<p>Nombre: $user[nombre]</p>";
            echo "<p>Contraseña: $user[contraseña]</p>";
            echo "<p>Duración: $duracion</p>";
        }
    ?>
</body>
</html>

