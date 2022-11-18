<?php
//creamos la cookie table
include_once 'controller.php';
?>
<?php
    if(isset($_POST)){
        //conseguir la fila y columna pulsada
        foreach($_POST as $key => $value){
            $fila = substr($key, 0, 1);
            $columna = substr($key, 1, 2);
        }
        //comprobar si hay mina
        if($arrayMinas[$fila][$columna] == 9){
            echo "Has perdido";
            //eliminar la cookie
            setcookie("table", "", time() - 3600);
        }
        else{
            if (isset($_COOKIE["casillas"])) {
                $arrayCasillas = unserialize($_COOKIE["casillas"]);
            }
            else{
                $arrayCasillas = array();
            }
            array_push($arrayCasillas, array(
                "fila" => $fila,
                "columna" => $columna
            ));
            setcookie("casillas", serialize($arrayCasillas), time() + 3600);
        }
       
    }
?>
<form action="index.php" method="post">
    <table>
        <?php
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $filas; $j++) {
                $casilla = false;
                if (isset($_COOKIE["casillas"])) {
                    $arrayCasillas = unserialize($_COOKIE["casillas"]);
                    foreach ($arrayCasillas as $key => $value) {
                        if ($value["fila"] == $i && $value["columna"] == $j) {
                            $casilla = true;
                        }
                    }
                }
                if($casilla==true){
                    echo "<td><input type='submit' name='" . $i . $j . "' value='" . $arrayMinas[$i][$j] . "'></td>";
                }
                else{
                    echo "<td><input type='submit' name='" . $i . $j . "' value='  '></td>";
                }
                
            }
            echo "</tr>";
        }
        ?>
    </table>
</form>