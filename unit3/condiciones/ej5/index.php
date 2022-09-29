    <?php
    // Script que muestre una lista de enlaces en función del perfil de usuario:
    // Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
    // Perfil Usuario: Pagina1, Pagina2
    //@author: Alejandro Jiménez
    // Inicializamos la variable $perfil
    $perfil = "Administrador";
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
        <p>página 1</p>
        <p>página 2</p>
        <?php 
    if ($perfil == "Administrador") {
        echo ("<p>página 3</p>");
        echo ("<p>página 4</p>");
    }
    echo ("<br>");
    echo ("<a href=\"https://github.com/alexsrk09/DWES/tree/main/unit3/condiciones/ej5\">github</a>");
    ?>
</body>
</html>