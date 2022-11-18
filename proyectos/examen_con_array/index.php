<?php
/**
 * directorio de index
 * @author Alejandro Jiménez
 */
include "lib.php";
include "configs.php";
session_start();
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
    
        <?php
        if(!isset($_SESSION["usuario"])){
            echo "<form action='inicio_sesion.php' method='post'>";
            echo "<label for='usuario'>Usuario</label>";
            echo "<input type='text' name='usuario' id='usuario'>";
            echo "<label for='password'>Contraseña</label>";
            echo "<input type='password' name='password' id='password'>";
            echo "<input type='submit' name='login' value='Login'>";
            echo "</form>";
        }
        else {
            echo "<form method=\"post\" action=\"\">";
            if (!$_POST) {
            echo "<label for=\"equipo\">equipo: </label>";
            echo "<select name=\"equipo\" id=\"equipo\">";
            foreach ($tarifas as $key => $value) {
                $equipo = $value['equipo'];
                echo "<option value=\"$equipo\">$equipo</option>";
            }
            echo "</select>";
            echo "<br>";
            echo "<label for=\"entrada\">entrada: </label>";
            foreach ($tarifas[0]["tarifas"] as $key => $value) {
                echo "<input type=\"radio\" name=\"entrada\" value=\"".$value["zona"]."\" id=\"entrada\"><label for=\"entrada\">".$value["zona"]."</label>";
            }
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
                    foreach ($tarifas as $tarifa) {
                        if ($tarifa["equipo"] == $equipo) {
                            foreach ($tarifa["tarifas"] as $tarifa) {
                                if ($tarifa["zona"] == $zona) {
                                    $precio = $tarifa["precio"];
                                }
                            }
                        }
                    }
                    echo "<input type=\"checkbox\" name=\"asientos[]\" value=\"$i\"><label>$i, ".$precio."€</label>";
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
                $precios = 0;
                foreach ($asientos as $asiento) {
                    foreach ($tarifas as $tarifa) {
                        if ($tarifa["equipo"] == $equipo) {
                            foreach ($tarifa["tarifas"] as $tarifa) {
                                if ($tarifa["zona"] == $zona) {
                                    $precio = $tarifa["precio"];
                                }
                            }
                        }
                    }
                    $precios += $precio;
                }
                echo "<h1>Resumen</h1>";
                if (isset($asientos)) {
                    foreach ($asientos as $asiento) {
                        foreach ($tarifas as $tarifa) {
                            if ($tarifa["equipo"] == $equipo) {
                                foreach ($tarifa["tarifas"] as $tarifa) {
                                    if ($tarifa["zona"] == $zona) {
                                        $precio = $tarifa["precio"];
                                    }
                                }
                            }
                        }
                        echo "<p>Asiento: $asiento, precio: " . $precio . "</p>";
                        echo "<input type=\"hidden\" name=\"asientos[]\" value=\"$asiento-$precio-$zona\">";
                        
                    }
                    echo "<p>Precio: $precios</p>";
                    echo "<button type=\"submit\" name=\"parte\" value=\"guardar\">seguir comprando</button>";
                }
            } catch (Exception $e) {
                echo "<h1>Debes elegir al menos un asiento</h1>";
            }

        }
        else if($_POST["parte"] == "guardar"){
            $asientos = $_POST["asientos"];
            foreach ($asientos as $asiento) {
                if(isset($_SESSION["asientos"])){
                    array_push($_SESSION["asientos"], $asiento);
                }
                else{
                    $_SESSION["asientos"] = array($asiento);
                }
            }
        }}
        ?>
    </form>
</body>

</html>