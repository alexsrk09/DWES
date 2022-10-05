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
// Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
// correspondiente. Marcar el día actual en verde y los festivos en rojo.
//@author: Alejandro Jiménez
$diaActual = date("j"); //Devuelve el día del mes actual
$mesActual = date("n"); //Devuelve el mes actual
$añoActual = date("Y"); //Devuelve el año actual
$festivosCumple = array(mktime(0, 0, 0, 10, 9, $añoActual)); //Cumpleaños
$festivosFeria = array(
    mktime(0, 0, 0, 5, 25, $añoActual), //feria
    mktime(0, 0, 0, 26, 26, $añoActual), //feria
    mktime(0, 0, 0, 5, 27, $añoActual), //feria
    mktime(0, 0, 0, 5, 28, $añoActual), //feria
    mktime(0, 0, 0, 5, 29, $añoActual), //feria
    mktime(0, 0, 0, 5, 30, $añoActual), //feria
    mktime(0, 0, 0, 5, 31, $añoActual), //feria
    mktime(0, 0, 0, 6, 1, $añoActual), //feria
);
$festivosLocales = array(
    mktime(0, 0, 0, 6, 8, $añoActual), //fuensanta
    mktime(0, 0, 0, 10, 24, $añoActual), //san Rafael
); 
$festivosAndalucia = array(
    mktime(0, 0, 0, 2, 28, $añoActual), //dia de Andalucía
    easter_date( $year = date("Y"),  $method = CAL_EASTER_DEFAULT)-86400*3,// semana santa
);
$festivosNacionales = array(
    mktime(0, 0, 0, 1, 1, $añoActual), //Año Nuevo
    mktime(0, 0, 0, 1, 6, $añoActual), //Epifanía
    easter_date( $year = date("Y"),  $method = CAL_EASTER_DEFAULT)-86400*4,// semana santa
    mktime(0, 0, 0, 5, 1, $añoActual), //Día del Trabajo
    mktime(0, 0, 0, 8, 15, $añoActual), //Asunción de la Virgen
    mktime(0, 0, 0, 10, 12, $añoActual), //Fiesta Nacional de España
    mktime(0, 0, 0, 11, 1, $añoActual), //Todos los Santos
    mktime(0, 0, 0, 12, 6, $añoActual), //Día de la Constitución
    mktime(0, 0, 0, 12, 8, $añoActual), //Inmaculada Concepción
    mktime(0, 0, 0, 12, 25, $añoActual), //Navidad
);
$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); //array con los dias de la semana
$diasMes = cal_days_in_month(CAL_GREGORIAN, $mesActual, $añoActual); //devuelve el número de días del mes
$Week = date("N", mktime(0, 0, 0, $mesActual, 1, $añoActual)) - 1; //Devuelve el número del día de la semana del primer día del mes
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
    if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivosCumple))
        echo "<td style='background-color:blue;'>" . $dia . "</td>";
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivosAndalucia)) {
        echo "<td style='color:DarkRed'>" . $dia . "</td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivosNacionales) || ($dia + $Week) % 7 == 0) {
        echo "<td style='color:red'>" . $dia . "</td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivosLocales)) {
        echo "<td style='color:DarkSalmon'>" . $dia . "</td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivosFeria)) {
        echo "<td style='background-color:red;'>" . $dia . "</td>";
    }
    else if ($dia == $diaActual) {
        echo "<td style=\"background-color:green;\">$dia</td>";
    }
    else
        echo "<td>" . $dia . "</td>";
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