
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 

?>
<body>
    <table>
        <?php
        // Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
        // correspondiente. Marcar el día actual en verde y los festivos en rojo.
        //@author: Alejandro Jiménez
        
        $diaActual = date("j"); //Devuelve el día del mes actual
        $mesActual = date("n"); //Devuelve el mes actual
        $añoActual = date("Y"); //Devuelve el año actual
        
        $dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); //array con los dias de la semana
        $diasMes = cal_days_in_month(CAL_GREGORIAN, $mesActual, $añoActual); //devuelve el número de días del mes
        $Week = date("N", mktime(0, 0, 0, $mesActual, 1, $añoActual)); //Devuelve el número del día de la semana del primer día del mes
        $dia = 1;
        echo "<tr>";
        for ($i = 0; $i < 7; $i++) {
            echo "<th>" . $dias[$i] . "</th>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i = 0; $i < $Week; $i++) {
            echo "<td></td>";
        }
        while ($dia <= $diasMes) {
             if($dia==$diaActual){
                echo "<td style=\"background-color:green;\">$dia</td>";
             }
                 else echo "<td>" . $dia . "</td>";
            if (($dia + $Week) % 7 == 0) {
                echo "</tr><tr>";
            }
            $dia++;
        }
        echo "</tr>";
        ?>
    </table>
</body>
</html>
<?php
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/blob/main/unit3/bucles/bucles5.php\">github</a>");
?>