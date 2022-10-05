<?php
/**   Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
 *  correspondiente. Marcar el día actual en verde y los festivos en rojo.
 *  @author: Alejandro Jiménez 
 */

$diaActual = date("j"); //Devuelve el día del mes actual
$mesActual = date("n"); //Devuelve el mes actual
$añoActual = date("Y"); //Devuelve el año actual
$festivos = array(
    'festivosCumple' => array('cumpleanios'=>mktime(0, 0, 0, 10, 9, $añoActual)), //Cumpleaños
    'festivosFeria' => array(
            'feria0'=>mktime(0, 0, 0, 5, 25, $añoActual), //feria
            'feria1'=>mktime(0, 0, 0, 26, 26, $añoActual), //feria
            'feria2'=>mktime(0, 0, 0, 5, 27, $añoActual), //feria
            'feria3'=>mktime(0, 0, 0, 5, 28, $añoActual), //feria
            'feria4'=>mktime(0, 0, 0, 5, 29, $añoActual), //feria
            'feria5'=>mktime(0, 0, 0, 5, 30, $añoActual), //feria
            'feria6'=>mktime(0, 0, 0, 5, 31, $añoActual), //feria
            'feria7'=>mktime(0, 0, 0, 6, 1, $añoActual), //feria
    ),
    'festivosLocales'=> array(
            'fuensanta'=>mktime(0, 0, 0, 6, 8, $añoActual), //fuensanta
            'sanRafael'=>mktime(0, 0, 0, 10, 24, $añoActual), //san Rafael
    ),
    'festivosAndalucia'=>array(
           'diaAndalucía'=> mktime(0, 0, 0, 2, 28, $añoActual), //dia de Andalucía
           'semanaSanta0'=>easter_date($year = date("Y"), $method = CAL_EASTER_DEFAULT) - 86400 * 3, // semana santa
    ),
    'festivosNacionales'=>array(
            'anioNuevo'=>mktime(0, 0, 0, 1, 1, $añoActual), //Año Nuevo
            'epifania'=>mktime(0, 0, 0, 1, 6, $añoActual), //Epifanía
            'semanaSanta1'=>easter_date($year = date("Y"), $method = CAL_EASTER_DEFAULT) - 86400 * 4, // semana santa
            'diaTrabajo'=>mktime(0, 0, 0, 5, 1, $añoActual), //Día del Trabajo
            'asuncion'=>mktime(0, 0, 0, 8, 15, $añoActual), //Asunción de la Virgen
            'fiestaNacional'=>mktime(0, 0, 0, 10, 12, $añoActual), //Fiesta Nacional de España
            'todosSantos'=>mktime(0, 0, 0, 11, 1, $añoActual), //Todos los Santos
            'constitucion'=>mktime(0, 0, 0, 12, 6, $añoActual), //Día de la Constitución
            'inmaculadaConcepción'=>mktime(0, 0, 0, 12, 8, $añoActual), //Inmaculada Concepción
            'navidad'=>mktime(0, 0, 0, 12, 25, $añoActual), //Navidad
        )
);
$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); //array con los dias de la semana
$diasMes = cal_days_in_month(CAL_GREGORIAN, $mesActual, $añoActual); //devuelve el número de días del mes
$Week = date("N", mktime(0, 0, 0, $mesActual, 1, $añoActual)) - 1; //Devuelve el número del día de la semana del primer día del mes
$dia = 1;
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
    if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivos['festivosCumple']))
        echo "<td class='festivosCumple'>" . $dia . "</td>";
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivos['festivosAndalucia'])) {
        echo "<td class='festivosAndalucia'>" . $dia . "</td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivos['festivosNacionales']) || ($dia + $Week) % 7 == 0) {
        echo "<td class='festivosNacionales'>" . $dia . "</td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivos['festivosLocales'])) {
        echo "<td class='festivosLocales'>" . $dia . "</td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesActual, $dia, $añoActual), $festivos['festivosFeria'])) {
        echo "<td class='festivosFeria'>" . $dia . "</td>";
    }
    else if ($dia == $diaActual) {
        echo "<td class='dia'>$dia</td>";
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
    <br><br>
    <table>
        <tr>
            <td class="festivosCumple">cumpleaños</td>
            <td class="festivosAndalucia">festivos Andalucia</td>
            <td class="festivosNacionales">festivos Nacionales</td>
            <td class="festivosLocales">festivos Locales</td>
            <td class="festivosFeria">Feria</td>
            <td class="dia">Dia de hoy</td>
        </tr>
    </table>
</body>

</html>
<?php
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/blob/main/unit3/bucles/bucles5.php\">github</a>");
?>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
        padding: 5px;
    }

    .festivosCumple {
        background-color: blue;
    }

    .festivosAndalucia {
        background-color: Darkred;
    }

    .festivosNacionales {
        background-color: red;
    }

    .festivosLocales {
        background-color: darksalmon;
    }

    .festivosFeria {
        background-color: yellow;
    }

    .dia {
        background-color: lightgreen;
    }
</style>