<?php
$minas = 10;
$filas = 10;

if (!isset($_COOKIE["table"])) {
    $arrayMinas = array();
    

    //coloca las minas en posiciones aleatorias en el array
    for ($i = 0; $i < $minas; $i++) {
        $fila = rand(0, $filas - 1);
        $columna = rand(0, $filas - 1);
        $arrayMinas[$fila][$columna] = 9;
    }
    //coloca los numeros en el array
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $filas; $j++) {
            if (!isset($arrayMinas[$i][$j])) {
                $arrayMinas[$i][$j] = 0;
                if (isset($arrayMinas[$i - 1][$j - 1]) && $arrayMinas[$i - 1][$j - 1] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i - 1][$j]) && $arrayMinas[$i - 1][$j] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i - 1][$j + 1]) && $arrayMinas[$i - 1][$j + 1] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i][$j - 1]) && $arrayMinas[$i][$j - 1] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i][$j + 1]) && $arrayMinas[$i][$j + 1] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i + 1][$j - 1]) && $arrayMinas[$i + 1][$j - 1] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i + 1][$j]) && $arrayMinas[$i + 1][$j] == 9) {
                    $arrayMinas[$i][$j]++;
                }
                if (isset($arrayMinas[$i + 1][$j + 1]) && $arrayMinas[$i + 1][$j + 1] == 9) {
                    $arrayMinas[$i][$j]++;
                }
            }
        }
    }
    //guarda el array en una cookie
    setcookie("table", serialize($arrayMinas), time() + 3600);
}
else {
    $arrayMinas = unserialize($_COOKIE["table"]);
}

?>