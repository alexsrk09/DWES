<?php
// Carga fecha de nacimiento en variables y calcula la edad.
$fechaHoy = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$Spring= mktime(0, 0, 0, 3  , 20, date("Y"));
$Summer= mktime(0, 0, 0, 6  , 21, date("Y"));
$Fall= mktime(0, 0, 0, 9  , 23, date("Y"));
$Winter= mktime(0, 0, 0, 12  , 21, date("Y"));
// $fechaHoy=$Winter+1;
// $fechaHoy=$Spring+1;
// $fechaHoy=$Summer+1;
// $fechaHoy=$Winter+1;
if($fechaHoy<=$Spring || $fechaHoy>=$Winter){echo "<img src=\"winter.jpg\" alt=\"Winter\">";}
if($fechaHoy>$Spring && $fechaHoy<=$Summer){echo "<img src=\"spring.jpg\" alt=\"Spring\">";}
if($fechaHoy>$Summer && $fechaHoy<=$Fall){echo "<img src=\"summer.jpg\" alt=\"Summer\">";}
if($fechaHoy>$Fall && $fechaHoy<=$Winter){echo "<img src=\"fall.jpg\" alt=\"Fall\">";}
echo ("<br><br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/tree/main/unit3/condiciones/ej4\">github</a>");
?>