<?php
/**   Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual
 *  correspondiente. Marcar el día actual en verde y los festivos en rojo.
 *  @author: Alejandro Jiménez 
 */

$diaActual = date("j"); //Devuelve el día del mes actual
$mesActual = date("n"); //Devuelve el mes actual
$añoActual = date("Y"); //Devuelve el año actual
if ($_POST) {
    if (isset($_POST["cambiofl"])) {
        if ($_POST["cambiofl"] == 13)
            $mesVer = 1;
        else
            $mesVer = $_POST["cambiofl"];
    }
    else
        $mesVer = $_POST["mes"];
}
else {
    $mesVer = $mesActual;
}
$festivos = array(
    'festivosCumple' => array(
        'Alex birthday' => mktime(0, 0, 0, 10, 9, $añoActual),
        'Antonio birthday' => mktime(0, 0, 0, 6, 19, $añoActual)
    ), //Cumpleaños
    'festivosLocales' => array(
        'fuensanta' => mktime(0, 0, 0, 6, 8, $añoActual), //fuensanta
        'sanRafael' => mktime(0, 0, 0, 10, 24, $añoActual), //san Rafael
    ),
    'festivosAndalucia' => array(
        'diaAndalucía' => mktime(0, 0, 0, 2, 28, $añoActual), //dia de Andalucía
        'semanaSanta0' => easter_date($year = date("Y"), $method = CAL_EASTER_DEFAULT) - 86400 * 3, // semana santa
    ),
    'festivosNacionales' => array(
        'anioNuevo' => mktime(0, 0, 0, 1, 1, $añoActual), //Año Nuevo
        'epifania' => mktime(0, 0, 0, 1, 6, $añoActual), //Epifanía
        'semanaSanta1' => easter_date($year = date("Y"), $method = CAL_EASTER_DEFAULT) - 86400 * 4, // semana santa
        'diaTrabajo' => mktime(0, 0, 0, 5, 1, $añoActual), //Día del Trabajo
        'asuncion' => mktime(0, 0, 0, 8, 15, $añoActual), //Asunción de la Virgen
        'fiestaNacional' => mktime(0, 0, 0, 10, 12, $añoActual), //Fiesta Nacional de España
        'todosSantos' => mktime(0, 0, 0, 11, 1, $añoActual), //Todos los Santos
        'constitucion' => mktime(0, 0, 0, 12, 6, $añoActual), //Día de la Constitución
        'inmaculadaConcepción' => mktime(0, 0, 0, 12, 8, $añoActual), //Inmaculada Concepción
        'navidad' => mktime(0, 0, 0, 12, 25, $añoActual), //Navidad
    )
);
$dias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"); //array con los dias de la semana
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); //array con los meses del año
$diasMes = cal_days_in_month(CAL_GREGORIAN, $mesVer, $añoActual); //devuelve el número de días del mes
$Week = date("N", mktime(0, 0, 0, $mesVer, 1, $añoActual)) - 1; //Devuelve el número del día de la semana del primer día del mes
$dia = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bucles5.css">
</head>

<body>
    <form method="post" action="bucles5.php">
        <button type="submit" name="cambiofl" value="<?php echo $mesVer - 1?>">menos</button>

        <h3>
            <?php
echo $meses[$mesVer - 1];
?>
        </h3>
        <button type="submit" name="cambiofl" value="<?php echo $mesVer + 1?>">mas</button>


        <select name="mes">
            <?php
for ($i = 0; $i < 12; $i++) {
    $valor = $i + 1;
    if ($i == $mesVer - 1) {
        echo "<option value='$valor' selected>$meses[$i]</option>";
    }
    else {
        echo "<option value='$valor'>$meses[$i]</option>";
    }
}
?>
        </select>
        <input type="submit" name="select" value="Enviar">
    </form>
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
    if (in_array(mktime(0, 0, 0, $mesVer, $dia, $añoActual), $festivos['festivosCumple'])) {
        $key = array_keys($festivos['festivosCumple'], mktime(0, 0, 0, $mesVer, $dia, $añoActual), $strict = false);
            echo "<td class='festivosCumple'><abbr title=\"" . $key[0] . "\">" . $dia . "</abbr></td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesVer, $dia, $añoActual), $festivos['festivosAndalucia'])) {
        $key = array_keys($festivos['festivosAndalucia'], mktime(0, 0, 0, $mesVer, $dia, $añoActual), $strict = false);
            echo "<td class='festivosAndalucia'><abbr title=\"" . $key[0] . "\">" . $dia . "</abbr></td>";
    }
    else if (in_array(mktime(0, 0, 0, $mesVer, $dia, $añoActual), $festivos['festivosNacionales']) || ($dia + $Week) % 7 == 0) {
        if (($dia + $Week) % 7 == 0)
            echo "<td class='festivosNacionales'>" . $dia . "</td>";
        else {
            $key = array_keys($festivos['festivosNacionales'], mktime(0, 0, 0, $mesVer, $dia, $añoActual), $strict = false);
            echo "<td class='festivosNacionales'><abbr title=\"" . $key[0] . "\">" . $dia . "</abbr></td>";
        }
    }
    else if (in_array(mktime(0, 0, 0, $mesVer, $dia, $añoActual), $festivos['festivosLocales'])) {
        $key = array_keys($festivos['festivosLocales'], mktime(0, 0, 0, $mesVer, $dia, $añoActual), $strict = false);
        echo "<td class='festivosLocales'><abbr title=\"" . $key[0] . "\">" . $dia . "</abbr></td>";
    }
    else if ($dia == $diaActual && $mesVer == $mesActual) {
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
            <td class="festivosAndalucia">festivos Andalucia</td>
            <td class="festivosNacionales">festivos Nacionales</td>
            <td class="festivosLocales">festivos Locales</td>
            <td class="dia">Dia de hoy</td>
        </tr>
    </table>
</body>

</html>
<?php
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/blob/main/unit3/bucles/bucles5.php\">github</a>");
?>