
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
            for ($i = 1; $i <= 10; $i++){
                echo("<tr>");
                if($i!=1)echo ("<td style=\" background-color:red;\">".$i."</td>");
                else echo ("<td style=\" background-color:red;\">"."x"."</td>");
                for ($j = 1; $j <= 10; $j++){
                    if($i!=1) echo ("<td>".$i*$j."</td>");
                    else echo ("<td style=\" background-color:red;\">".$i*$j."</td>");
                }
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>