<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="https://github.com/alexsrk09/DWES">github</a>
    <br>
</body>

</html>
<?php
$monthsArray = [null, "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
$month = 2;
$year = 2000;
switch ($monthsArray[$month]) {
    case "enero":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "marzo":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "mayo":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "julio":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "agosto":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "octubre":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "diciembre":
        echo ($monthsArray[$month] . " tiene 31 dias");
        break;
    case "febrero":
        if (($year%4 == 0 && $year%100 != 0) || $year%400 == 0) echo ($monthsArray[$month] . " tiene 29 dias");
        else echo ($monthsArray[$month] . " tiene 28 dias");
        break;
    case "abril":
        echo ($monthsArray[$month] . " tiene 30 dias");
        break;
    case "junio":
        echo ($monthsArray[$month] . " tiene 30 dias");
        break;
    case "septiembre":
        echo ($monthsArray[$month] . " tiene 30 dias");
        break;
    case "noviembre":
        echo ($monthsArray[$month] . " tiene 30 dias");
        break;
    default:
        echo ("mes erróneo");
        break;
}
?>