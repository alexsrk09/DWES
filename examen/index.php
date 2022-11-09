<?php
/**
 * directorio de index
 * @author Alejandro Jiménez
 */
include "lib.php";
include "configs.php";
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
    <h1>Reservas</h1>
    <form method="post" action="">
        <?php
        if (!$_POST) {
            echo "<label for=\"equipo\">equipo: </label>";
            echo "<select name=\"equipo\" id=\"equipo\">";
            foreach ($precios as $key => $value) {
                echo "<option value=\"$key\">$key</option>";
            }
            echo "</select>";
            echo "<br>";
            echo "<label for=\"entrada\">entrada: </label>";
            echo "<input type=\"radio\" name=\"entrada\" value=\"A\" id=\"entrada\"><label for=\"entrada\">A</label>";
            echo "<input type=\"radio\" name=\"entrada\" value=\"B\" id=\"entrada\"><label for=\"entrada\">B</label>";
            echo "<input type=\"radio\" name=\"entrada\" value=\"C\" id=\"entrada\"><label for=\"entrada\">C</label>";
            echo "<input type=\"radio\" name=\"entrada\" value=\"D\" id=\"entrada\"><label for=\"entrada\">D</label>";
            echo "</select>";
            echo "<br>";
            echo "<button type=\"submit\" name=\"parte\" value=\"part2\">siguiente</button>";
        } else if ($_POST["parte"] == "part2") {
            if(!isset($_POST["entrada"])){
                echo "<h1>Debes elegir una zona</h1>";
            }
            else{
            $equipo = $_POST["equipo"];
            $zona = $_POST["entrada"];
            switch ($zona) {
                case "A":
                    $inicio = 1;
                    $fin = 100;
                    break;
                case "B":
                    $inicio = 101;
                    $fin = 200;
                    break;
                case "C":
                    $inicio = 201;
                    $fin = 300;
                    break;
                case "D":
                    $inicio = 301;
                    $fin = 400;
                    break;
            }
            $reservadosZona = array();
            foreach ($reservados as $reservado) {
                if ($reservado["letra"] == $zona) {
                    array_push($reservadosZona, $reservado["asiento"]);
                }
            }
            echo "<h1>Elige asiento</h1>";
            echo "<form method=\"post\" action=\"\">";
            for ($i = $inicio; $i <= $fin; $i++) {
                if (in_array($i, $reservadosZona))
                    echo "<input type=\"checkbox\" name=\"asientos[]\" value=\"$i\" disabled><label>$i</label>";
                else
                    echo "<input type=\"checkbox\" name=\"asientos[]\" value=\"$i\"><label>$i, ".$precios[$equipo][$zona]."€</label>";
            }
            echo "<input type=\"hidden\" name=\"equipo\" value=\"$equipo\">";
            echo "<input type=\"hidden\" name=\"zona\" value=\"$zona\">";
            echo "<button type=\"submit\" name=\"parte\" value=\"part3\">siguiente</button>";}
        } else if ($_POST["parte"] == "part3") {
            try {
                if (!isset($_POST["asientos"])) {
                    throw new Exception("No se ha seleccionado equipo o entrada");
                }
                $asientos = $_POST["asientos"];
                $zona = $_POST["zona"];
                $equipo = $_POST["equipo"];
                $precio = 0;
                foreach ($asientos as $asiento) {
                    $precio += $precios[$equipo][$zona];
                }
                echo "<h1>Resumen</h1>";
                if (isset($asientos)) {
                    foreach ($asientos as $asiento) {
                        echo "<p>Asiento: $asiento, precio: " . $precios[$equipo][$zona] . "</p>";
                    }
                    echo "<p>Precio: $precio</p>";
                }
            } catch (Exception $e) {
                echo "<h1>Debes elegir al menos un asiento</h1>";
            }

        }
        ?>
    </form>
</body>

</html>