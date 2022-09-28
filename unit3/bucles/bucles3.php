
<?php
/** Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas */
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES\">github</a>");
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
    <table>
        <?php
        $desde=1;
        $hasta=10;
            for ($i = $desde; $i <= $hasta; $i++){
                echo("<tr>");
                if($i!=$desde)echo ("<td style=\" background-color:red;\">".$i."</td>");
                else echo ("<td style=\" background-color:red;\">"."x"."</td>");
                for ($j = $desde; $j <= $hasta; $j++){
                    if($i!=$desde) echo ("<td>".$i*$j."</td>");
                    else echo ("<td style=\" background-color:red;\">".$i*$j."</td>");
                }
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>