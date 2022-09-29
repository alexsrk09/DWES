<?php
// Carga fecha de nacimiento en variables y calcula la edad.
$fechaHoy = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$fechaNacim = mktime(0, 0, 0, 10, 9, 2001);
echo (floor(($fechaHoy - $fechaNacim)/60/60/24/365));//resto las fechas y divido para pasar de segundos a años y elimino decimales
echo ("<br><br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/tree/main/unit3/condiciones/ej3\">github</a>");
?>