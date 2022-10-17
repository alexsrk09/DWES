
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <table>
        <?php
        $aciertos=0;
        $desde=1;
        $hasta=10;
            for ($i = $desde; $i <= $hasta; $i++){
                echo("<tr>");
                if($i!=$desde)echo ("<td style=\" background-color:red;\">".$i."</td>");
                else echo ("<td style=\" background-color:red;\">"."x"."</td>");
                $contador=0;
                for ($j = $desde; $j <= $hasta; $j++){
                    if($i!=$desde) {
                        if(rand(0,3)==0 && $contador<=1 && !$_POST) {
                            echo ('<td><input type="number" name="'.$i.'*'.$j.'"/></td>');
                            $contador++;
                        }
                        else if($_POST && isset($_POST[$i.'*'.$j]) && $_POST[$i.'*'.$j]==$i*$j) {
                            echo ('<td style=" background-color:green;">'.$i*$j.'</td>');
                            $aciertos++;
                        }
                        else if($_POST && isset($_POST[$i.'*'.$j]) && $_POST[$i.'*'.$j]!=$i*$j) {
                            echo ('<td><input type="number" name="'.$i.'*'.$j.'"/></td>');
                        }
                        else echo ("<td>".$i*$j."</td>");

                    }
                    else echo ("<td style=\" background-color:red;\">".$i*$j."</td>");
                }
                echo("</tr>");
            }
        ?>
    </table>
    <input type="submit"/>
    </form>
    <?php 
        echo 'aciertos: '.$aciertos;
    ?>
</body>
</html>
<?php
/** Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas */
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/blob/main/unit3/bucles/bucles3.php\">github</a>");
?>