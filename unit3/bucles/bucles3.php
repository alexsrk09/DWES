
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
                for ($j = $desde; $j <= $hasta; $j++){
                    if($i!=$desde) {
                        if((bool)rand(0,1)==true) echo ('<td><input type="number" name="'.$i.'*'.$j.'"/></td>');

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
        if($_POST){
            foreach($_POST as $name=>$value){
                $separado = explode("*", $name);
                if($separado[0]*$separado[1]==$value)$aciertos++;
            }
        }
        echo 'aciertos: '.$aciertos;
    ?>
</body>
</html>
<?php
/** Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas */
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/blob/main/unit3/bucles/bucles3.php\">github</a>");
?>